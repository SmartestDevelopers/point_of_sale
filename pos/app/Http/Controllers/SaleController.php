<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = DB::table('sales')
            ->join('customers', 'sales.customer_id', '=', 'customers.id')
            ->join('warehouses', 'sales.warehouse_id', '=', 'warehouses.id')
            ->join('users', 'sales.user_id', '=', 'users.id')
            ->select(
                'sales.*',
                'customers.name as customer_name',
                'warehouses.warehouse as warehouse_name',
                'users.name as user_name'
            )
            ->orderBy('sales.created_at', 'desc')
            ->get();

        return view('sales.index', compact('sales'));
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

        return view('sales.create', compact('customers', 'warehouses', 'products', 'units'));
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
            'reference_no' => 'required|unique:sales',
            'customer_id' => 'required',
            'warehouse_id' => 'required',
            'biller_id' => 'required',
            'sale_status' => 'required',
            'payment_status' => 'required',
            'products' => 'required|array',
        ]);

        DB::beginTransaction();
        
        try {
            // Generate reference number if not provided
            $referenceNo = $request->reference_no ?: 'SALE-' . date('YmdHis') . '-' . rand(1000, 9999);
            
            // Insert sale record
            $saleId = DB::table('sales')->insertGetId([
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
                'sale_status' => $request->sale_status,
                'payment_status' => $request->payment_status,
                'document' => $request->document,
                'paid_amount' => $request->paid_amount,
                'sale_note' => $request->sale_note,
                'staff_note' => $request->staff_note,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert product sales
            foreach ($request->products as $product) {
                DB::table('product_sales')->insert([
                    'sale_id' => $saleId,
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
            return redirect()->route('sales.index')->with('success', 'Sale created successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error creating sale: ' . $e->getMessage());
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
        $sale = DB::table('sales')
            ->join('customers', 'sales.customer_id', '=', 'customers.id')
            ->join('warehouses', 'sales.warehouse_id', '=', 'warehouses.id')
            ->join('users', 'sales.user_id', '=', 'users.id')
            ->select(
                'sales.*',
                'customers.name as customer_name',
                'customers.email as customer_email',
                'customers.phone_number as customer_phone',
                'warehouses.warehouse as warehouse_name',
                'users.name as user_name'
            )
            ->where('sales.id', $id)
            ->first();

        $productSales = DB::table('product_sales')
            ->join('products', 'product_sales.product_id', '=', 'products.id')
            ->select('product_sales.*', 'products.product_name', 'products.id as product_code')
            ->where('product_sales.sale_id', $id)
            ->get();

        return view('sales.show', compact('sale', 'productSales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = DB::table('sales')->where('id', $id)->first();
        $customers = DB::table('customers')->get();
        $warehouses = DB::table('warehouses')->get();
        $products = DB::table('products')->get();
        
        $productSales = DB::table('product_sales')
            ->join('products', 'product_sales.product_id', '=', 'products.id')
            ->select('product_sales.*', 'products.product_name')
            ->where('product_sales.sale_id', $id)
            ->get();

        return view('sales.edit', compact('sale', 'customers', 'warehouses', 'products', 'productSales'));
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
            'reference_no' => 'required|unique:sales,reference_no,' . $id,
            'customer_id' => 'required',
            'warehouse_id' => 'required',
            'biller_id' => 'required',
            'sale_status' => 'required',
            'payment_status' => 'required',
            'products' => 'required|array',
        ]);

        DB::beginTransaction();
        
        try {
            // Update sale record
            DB::table('sales')->where('id', $id)->update([
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
                'sale_status' => $request->sale_status,
                'payment_status' => $request->payment_status,
                'document' => $request->document,
                'paid_amount' => $request->paid_amount,
                'sale_note' => $request->sale_note,
                'staff_note' => $request->staff_note,
                'updated_at' => now(),
            ]);

            // Delete existing product sales
            DB::table('product_sales')->where('sale_id', $id)->delete();

            // Insert updated product sales
            foreach ($request->products as $product) {
                DB::table('product_sales')->insert([
                    'sale_id' => $id,
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
            return redirect()->route('sales.index')->with('success', 'Sale updated successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error updating sale: ' . $e->getMessage());
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
            // Delete product sales first
            DB::table('product_sales')->where('sale_id', $id)->delete();
            
            // Delete sale
            DB::table('sales')->where('id', $id)->delete();
            
            DB::commit();
            return redirect()->route('sales.index')->with('success', 'Sale deleted successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error deleting sale: ' . $e->getMessage());
        }
    }
}
