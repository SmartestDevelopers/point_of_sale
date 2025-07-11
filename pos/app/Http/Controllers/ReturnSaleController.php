<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReturnSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $returnSales = DB::table('return_sales')
            ->join('customers', 'return_sales.customer_id', '=', 'customers.id')
            ->join('warehouses', 'return_sales.warehouse_id', '=', 'warehouses.id')
            ->join('users', 'return_sales.user_id', '=', 'users.id')
            ->select(
                'return_sales.*',
                'customers.name as customer_name',
                'warehouses.warehouse as warehouse_name',
                'users.name as user_name'
            )
            ->orderBy('return_sales.created_at', 'desc')
            ->get();

        return view('return_sales.index', compact('returnSales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = DB::table('customers')->get();
    $warehouses = DB::table('warehouses')->get();
    $products = DB::table('products')->get();
    $units = DB::table('product_units')->get();
    $sales = DB::table('return_sales')
        ->join('customers', 'return_sales.customer_id', '=', 'customers.id')
        ->select('return_sales.id', 'return_sales.reference_no', 'customers.name as customer_name')
        ->get();
    
    return view('return_sales.create', compact('customers', 'warehouses', 'products', 'sales','units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'reference_no' => 'required|unique:return_sales',
            'customer_id' => 'required',
            'warehouse_id' => 'required',
            'biller_id' => 'required',
            'products' => 'required|array',
        ]);

        DB::beginTransaction();
        
        try {
            // Generate reference number if not provided
            $referenceNo = $request->reference_no ?: 'RSL-' . date('YmdHis') . '-' . rand(1000, 9999);
            
            // Insert return sale record
            $returnSaleId = DB::table('return_sales')->insertGetId([
                'reference_no' => $referenceNo,
                'user_id' => auth()->user()->id,
                'customer_id' => $request->customer_id,
                'warehouse_id' => $request->warehouse_id,
                'biller_id' => $request->biller_id,
                'item' => count($request->products),
                'total_qty' => array_sum(array_column($request->products, 'qty')),
                'total_discount' => $request->total_discount ?? 0,
                'total_tax' => $request->total_tax ?? 0,
                'total_price' => $request->total_price,
                'grand_total' => $request->grand_total,
                'order_tax_rate' => $request->order_tax_rate,
                'order_tax' => $request->order_tax,
                'order_discount' => $request->order_discount,
                'shipping_cost' => $request->shipping_cost,
                'document' => $request->document,
                'return_note' => $request->return_note,
                'staff_note' => $request->staff_note,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert product return sales
            foreach ($request->products as $product) {
                DB::table('product_return_sales')->insert([
                    'return_id' => $returnSaleId,
                    'product_id' => $product['product_id'],
                    'variant_id' => $product['variant_id'] ?? null,
                    'qty' => $product['qty'],
                    'sale_unit_id' => $product['sale_unit_id'],
                    'net_unit_price' => $product['net_unit_price'],
                    'discount' => $product['discount'] ?? 0,
                    'tax_rate' => $product['tax_rate'] ?? 0,
                    'tax' => $product['tax'] ?? 0,
                    'total' => $product['total'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            DB::commit();
            return redirect()->route('return-sales.index')->with('success', 'Return sale created successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error creating return sale: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $returnSale = DB::table('return_sales')
            ->join('customers', 'return_sales.customer_id', '=', 'customers.id')
            ->join('warehouses', 'return_sales.warehouse_id', '=', 'warehouses.id')
            ->join('users', 'return_sales.user_id', '=', 'users.id')
            ->select(
                'return_sales.*',
                'customers.name as customer_name',
                'customers.email as customer_email',
                'customers.phone as customer_phone',
                'warehouses.warehouse as warehouse_name',
                'users.name as user_name'
            )
            ->where('return_sales.id', $id)
            ->first();

        $productReturnSales = DB::table('product_return_sales')
            ->join('products', 'product_return_sales.product_id', '=', 'products.id')
            ->select('product_return_sales.*', 'products.name as product_name', 'products.code as product_code')
            ->where('product_return_sales.return_id', $id)
            ->get();

        return view('return_sales.show', compact('returnSale', 'productReturnSales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $returnSale = DB::table('return_sales')->where('id', $id)->first();
        $customers = DB::table('customers')->get();
        $warehouses = DB::table('warehouses')->get();
        $products = DB::table('products')->get();
        
        $productReturnSales = DB::table('product_return_sales')
            ->join('products', 'product_return_sales.product_id', '=', 'products.id')
            ->select('product_return_sales.*', 'products.name as product_name')
            ->where('product_return_sales.return_id', $id)
            ->get();

        return view('return_sales.edit', compact('returnSale', 'customers', 'warehouses', 'products', 'productReturnSales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'reference_no' => 'required|unique:return_sales,reference_no,' . $id,
            'customer_id' => 'required',
            'warehouse_id' => 'required',
            'biller_id' => 'required',
            'products' => 'required|array',
        ]);

        DB::beginTransaction();
        
        try {
            // Update return sale record
            DB::table('return_sales')->where('id', $id)->update([
                'reference_no' => $request->reference_no,
                'customer_id' => $request->customer_id,
                'warehouse_id' => $request->warehouse_id,
                'biller_id' => $request->biller_id,
                'item' => count($request->products),
                'total_qty' => array_sum(array_column($request->products, 'qty')),
                'total_discount' => $request->total_discount ?? 0,
                'total_tax' => $request->total_tax ?? 0,
                'total_price' => $request->total_price,
                'grand_total' => $request->grand_total,
                'order_tax_rate' => $request->order_tax_rate,
                'order_tax' => $request->order_tax,
                'order_discount' => $request->order_discount,
                'shipping_cost' => $request->shipping_cost,
                'document' => $request->document,
                'return_note' => $request->return_note,
                'staff_note' => $request->staff_note,
                'updated_at' => now(),
            ]);

            // Delete existing product return sales
            DB::table('product_return_sales')->where('return_id', $id)->delete();

            // Insert updated product return sales
            foreach ($request->products as $product) {
                DB::table('product_return_sales')->insert([
                    'return_id' => $id,
                    'product_id' => $product['product_id'],
                    'variant_id' => $product['variant_id'] ?? null,
                    'qty' => $product['qty'],
                    'sale_unit_id' => $product['sale_unit_id'],
                    'net_unit_price' => $product['net_unit_price'],
                    'discount' => $product['discount'] ?? 0,
                    'tax_rate' => $product['tax_rate'] ?? 0,
                    'tax' => $product['tax'] ?? 0,
                    'total' => $product['total'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            DB::commit();
            return redirect()->route('return-sales.index')->with('success', 'Return sale updated successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error updating return sale: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        
        try {
            // Delete product return sales first
            DB::table('product_return_sales')->where('return_id', $id)->delete();
            
            // Delete return sale
            DB::table('return_sales')->where('id', $id)->delete();
            
            DB::commit();
            return redirect()->route('return-sales.index')->with('success', 'Return sale deleted successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error deleting return sale: ' . $e->getMessage());
        }
    }
}
