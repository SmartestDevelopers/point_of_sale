<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReturnPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $returnPurchases = DB::table('return_purchases')
            ->leftJoin('suppliers', 'return_purchases.supplier_id', '=', 'suppliers.id')
            ->join('warehouses', 'return_purchases.warehouse_id', '=', 'warehouses.id')
            ->join('users', 'return_purchases.user_id', '=', 'users.id')
            ->select(
                'return_purchases.*',
                'suppliers.name as supplier_name',
                'warehouses.warehouse as warehouse_name',
                'users.name as user_name'
            )
            ->orderBy('return_purchases.created_at', 'desc')
            ->get();

        return view('return_purchases.index', compact('returnPurchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = DB::table('suppliers')->get();
        $warehouses = DB::table('warehouses')->get();
        $products = DB::table('products')->select('id', 'product_name')->get();
        $purchases = DB::table('purchases')
            ->leftJoin('suppliers', 'purchases.supplier_id', '=', 'suppliers.id')
            ->select('purchases.id', 'purchases.reference_no', 'suppliers.name as supplier_name')
            ->get();
            $units = DB::table('product_units')->select('id', 'unit_name')->get();
        
        return view('return_purchases.create', compact('suppliers', 'warehouses', 'products', 'purchases','units'));
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
            'reference_no' => 'required|unique:return_purchases',
            'warehouse_id' => 'required',
            'products' => 'required|array',
        ]);

        DB::beginTransaction();
        
        try {
            // Generate reference number if not provided
            $referenceNo = $request->reference_no ?: 'RPR-' . date('YmdHis') . '-' . rand(1000, 9999);
            
            // Insert return purchase record
            $returnPurchaseId = DB::table('return_purchases')->insertGetId([
                'reference_no' => $referenceNo,
                'user_id' => auth()->user()->id,
                'supplier_id' => $request->supplier_id,
                'warehouse_id' => $request->warehouse_id,
                'item' => count($request->products),
                'total_qty' => array_sum(array_column($request->products, 'qty')),
                'total_discount' => $request->total_discount ?? 0,
                'total_tax' => $request->total_tax ?? 0,
                'total_cost' => $request->total_cost,
                'order_tax_rate' => $request->order_tax_rate,
                'order_tax' => $request->order_tax,
                'grand_total' => $request->grand_total,
                'document' => $request->document,
                'return_note' => $request->return_note,
                'staff_note' => $request->staff_note,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert product return purchases
            foreach ($request->products as $product) {
                DB::table('product_return_purchases')->insert([
                    'return_purchase_id' => $returnPurchaseId,
                    'product_id' => $product['product_id'],
                    'variant_id' => $product['variant_id'] ?? null,
                    'qty' => $product['qty'],
                    'purchase_unit_id' => $product['purchase_unit_id'],
                    'net_unit_cost' => $product['net_unit_cost'],
                    'discount' => $product['discount'] ?? 0,
                    'tax_rate' => $product['tax_rate'] ?? 0,
                    'tax' => $product['tax'] ?? 0,
                    'total' => $product['total'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            DB::commit();
            return redirect()->route('return-purchases.index')->with('success', 'Return purchase created successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error creating return purchase: ' . $e->getMessage());
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
            ->select(
                'return_sales.*',
                'customers.name as customer_name',
                'warehouses.warehouse as warehouse_name',
                'users.name as user_name'
            )
            ->leftJoin('customers', 'return_sales.customer_id', '=', 'customers.id')
            ->leftJoin('warehouses', 'return_sales.warehouse_id', '=', 'warehouses.id')
            ->leftJoin('users', 'return_sales.user_id', '=', 'users.id') // Changed from biller_id to user_id
            ->where('return_sales.id', $id)
            ->first();

        $productReturnSales = DB::table('product_return_sales')
            ->join('products', 'product_return_sales.product_id', '=', 'products.id')
            ->join('product_units', 'product_return_sales.sale_unit_id', '=', 'product_units.id')
            ->select(
                'product_return_sales.*',
                'products.product_name as product_name',
                'product_units.unit_name as unit_name'
            )
            ->where('product_return_sales.return_id', $id)
            ->get();

        if (!$returnSale) {
            return view('return_sales.show', ['sale' => null]);
        }

        return view('return_sales.show', [
            'sale' => $returnSale,
            'productSales' => $productReturnSales
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $returnPurchase = DB::table('return_purchases')->where('id', $id)->first();
        $suppliers = DB::table('suppliers')->get();
        $warehouses = DB::table('warehouses')->get();
        $products = DB::table('products')->get();
        
        $productReturnPurchases = DB::table('product_return_purchases')
            ->join('products', 'product_return_purchases.product_id', '=', 'products.id')
            ->select('product_return_purchases.*', 'products.name as product_name')
            ->where('product_return_purchases.return_purchase_id', $id)
            ->get();

        return view('return_purchases.edit', compact('returnPurchase', 'suppliers', 'warehouses', 'products', 'productReturnPurchases'));
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
            'reference_no' => 'required|unique:return_purchases,reference_no,' . $id,
            'warehouse_id' => 'required',
            'products' => 'required|array',
        ]);

        DB::beginTransaction();
        
        try {
            // Update return purchase record
            DB::table('return_purchases')->where('id', $id)->update([
                'reference_no' => $request->reference_no,
                'supplier_id' => $request->supplier_id,
                'warehouse_id' => $request->warehouse_id,
                'item' => count($request->products),
                'total_qty' => array_sum(array_column($request->products, 'qty')),
                'total_discount' => $request->total_discount ?? 0,
                'total_tax' => $request->total_tax ?? 0,
                'total_cost' => $request->total_cost,
                'order_tax_rate' => $request->order_tax_rate,
                'order_tax' => $request->order_tax,
                'grand_total' => $request->grand_total,
                'document' => $request->document,
                'return_note' => $request->return_note,
                'staff_note' => $request->staff_note,
                'updated_at' => now(),
            ]);

            // Delete existing product return purchases
            DB::table('product_return_purchases')->where('return_purchase_id', $id)->delete();

            // Insert updated product return purchases
            foreach ($request->products as $product) {
                DB::table('product_return_purchases')->insert([
                    'return_purchase_id' => $id,
                    'product_id' => $product['product_id'],
                    'variant_id' => $product['variant_id'] ?? null,
                    'qty' => $product['qty'],
                    'purchase_unit_id' => $product['purchase_unit_id'],
                    'net_unit_cost' => $product['net_unit_cost'],
                    'discount' => $product['discount'] ?? 0,
                    'tax_rate' => $product['tax_rate'] ?? 0,
                    'tax' => $product['tax'] ?? 0,
                    'total' => $product['total'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            DB::commit();
            return redirect()->route('return-purchases.index')->with('success', 'Return purchase updated successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error updating return purchase: ' . $e->getMessage());
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
            // Delete product return purchases first
            DB::table('product_return_purchases')->where('return_purchase_id', $id)->delete();
            
            // Delete return purchase
            DB::table('return_purchases')->where('id', $id)->delete();
            
            DB::commit();
            return redirect()->route('return-purchases.index')->with('success', 'Return purchase deleted successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error deleting return purchase: ' . $e->getMessage());
        }
    }
}
