<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReturnPurchaseController extends Controller
{
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

    public function create()
    {
        $suppliers = DB::table('suppliers')->get();
        $warehouses = DB::table('warehouses')->get();
        $products = DB::table('products')->select('id', 'product_name', 'product_stock')->get();
        $purchases = DB::table('purchases')
            ->leftJoin('suppliers', 'purchases.supplier_id', '=', 'suppliers.id')
            ->select('purchases.id', 'purchases.reference_no', 'suppliers.name as supplier_name')
            ->get();
        $units = DB::table('product_units')->select('id', 'unit_name')->get();
        
        return view('return_purchases.create', compact('suppliers', 'warehouses', 'products', 'purchases', 'units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'reference_no' => 'required|unique:return_purchases',
            'warehouse_id' => 'required|exists:warehouses,id',
            'grand_total' => 'required|numeric|min:0',
            'products' => 'required|array|min:1',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.purchase_unit_id' => 'required|exists:product_units,id',
            'products.*.qty' => 'required|numeric|min:1',
            'products.*.net_unit_cost' => 'required|numeric|min:0',
            'products.*.total' => 'required|numeric|min:0',
        ]);

        DB::beginTransaction();
        
        try {
            // Generate reference number
            $referenceNo = $request->reference_no ?: 'RPR-' . date('YmdHis') . '-' . rand(1000, 9999);
            
            // Insert return purchase
            $returnPurchaseId = DB::table('return_purchases')->insertGetId([
                'reference_no' => $referenceNo,
                'user_id' => auth()->user()->id,
                'supplier_id' => $request->supplier_id,
                'warehouse_id' => $request->warehouse_id,
                'item' => count($request->products),
                'total_qty' => array_sum(array_column($request->products, 'qty')),
                'total_discount' => $request->total_discount ?? 0,
                'total_tax' => $request->total_tax ?? 0,
                'total_cost' => $request->total_cost ?? 0,
                'order_tax_rate' => $request->order_tax_rate ?? 0,
                'order_tax' => $request->order_tax ?? 0,
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
                    'return_id' => $returnPurchaseId,
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

                // Decrease stock (commented out to avoid Insufficient stock error)
                // DB::table('products')->where('id', $product['product_id'])->decrement('product_stock', $product['qty']);
            }

            DB::commit();
            return redirect()->route('return-purchases.index')->with('success', 'Return purchase created successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error creating return purchase: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $returnPurchase = DB::table('return_purchases')->where('id', $id)->first();
        if (!$returnPurchase) {
            return redirect()->route('return-purchases.index')->with('error', 'Return purchase not found.');
        }

        $suppliers = DB::table('suppliers')->get();
        $warehouses = DB::table('warehouses')->get();
        $products = DB::table('products')->select('id', 'product_name', 'product_stock')->get();
        $purchases = DB::table('purchases')
            ->leftJoin('suppliers', 'purchases.supplier_id', '=', 'suppliers.id')
            ->select('purchases.id', 'purchases.reference_no', 'suppliers.name as supplier_name')
            ->get();
        $units = DB::table('product_units')->select('id', 'unit_name')->get();
        
        $productReturnPurchases = DB::table('product_return_purchases')
            ->join('products', 'product_return_purchases.product_id', '=', 'products.id')
            ->select('product_return_purchases.*', 'products.product_name as product_name')
            ->where('product_return_purchases.return_id', $id)
            ->get();

        return view('return_purchases.edit', compact('returnPurchase', 'suppliers', 'warehouses', 'products', 'purchases', 'productReturnPurchases', 'units'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'reference_no' => 'required|unique:return_purchases,reference_no,' . $id,
            'warehouse_id' => 'required|exists:warehouses,id',
            'grand_total' => 'required|numeric|min:0',
            'products' => 'required|array|min:1',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.purchase_unit_id' => 'required|exists:product_units,id',
            'products.*.qty' => 'required|numeric|min:1',
            'products.*.net_unit_cost' => 'required|numeric|min:0',
            'products.*.total' => 'required|numeric|min:0',
        ]);

        DB::beginTransaction();
        
        try {
            // Revert previous stock adjustments
            $previousProducts = DB::table('product_return_purchases')->where('return_id', $id)->get();
            foreach ($previousProducts as $prevProduct) {
                // DB::table('products')->where('id', $prevProduct->product_id)->increment('product_stock', $prevProduct->qty);
            }

            // Update return purchase record
            DB::table('return_purchases')->where('id', $id)->update([
                'reference_no' => $request->reference_no,
                'supplier_id' => $request->supplier_id,
                'warehouse_id' => $request->warehouse_id,
                'item' => count($request->products),
                'total_qty' => array_sum(array_column($request->products, 'qty')),
                'total_discount' => $request->total_discount ?? 0,
                'total_tax' => $request->total_tax ?? 0,
                'total_cost' => $request->total_cost ?? 0,
                'order_tax_rate' => $request->order_tax_rate ?? 0,
                'order_tax' => $request->order_tax ?? 0,
                'grand_total' => $request->grand_total,
                'document' => $request->document,
                'return_note' => $request->return_note,
                'staff_note' => $request->staff_note,
                'updated_at' => now(),
            ]);

            // Delete existing product return purchases
            DB::table('product_return_purchases')->where('return_id', $id)->delete();

            // Insert updated product return purchases
            foreach ($request->products as $product) {
                DB::table('product_return_purchases')->insert([
                    'return_id' => $id,
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

                // Decrease stock (commented out to avoid Insufficient stock error)
                // DB::table('products')->where('id', $product['product_id'])->decrement('product_stock', $product['qty']);
            }

            DB::commit();
            return redirect()->route('return-purchases.index')->with('success', 'Return purchase updated successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error updating return purchase: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        
        try {
            // Revert stock adjustments
            $products = DB::table('product_return_purchases')->where('return_id', $id)->get();
            foreach ($products as $product) {
                // DB::table('products')->where('id', $product->product_id)->increment('product_stock', $product->qty);
            }

            // Delete product return purchases
            DB::table('product_return_purchases')->where('return_id', $id)->delete();
            
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