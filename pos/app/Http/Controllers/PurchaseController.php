<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = DB::table('purchases')
            ->leftJoin('suppliers', 'purchases.supplier_id', '=', 'suppliers.id')
            ->join('warehouses', 'purchases.warehouse_id', '=', 'warehouses.id')
            ->join('users', 'purchases.user_id', '=', 'users.id')
            ->select(
                'purchases.*',
                'suppliers.name as supplier_name',
                'warehouses.warehouse as warehouse_name',
                'users.name as user_name'
            )
            ->orderBy('purchases.created_at', 'desc')
            ->get();

        return view('purchases.index', compact('purchases'));
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
        $products = DB::table('products')->get();

        // print_r($products);
        // die();
        // Join product_variations with products to get product name
        // $productVariations = DB::table('product_variations')
        //     ->join('products', 'product_variations.product_id', '=', 'products.id')
        //     ->select('product_variations.*', 'products.product_name')
        //     ->get();
        
        return view('purchases.create', compact('suppliers', 'warehouses', 'products'));
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
            'reference_no' => 'required|unique:purchases',
            'warehouse_id' => 'required',
            'status' => 'required',
            'payment_status' => 'required',
            'products' => 'required|array',
        ]);

        DB::beginTransaction();
        
        try {
            // Generate reference number if not provided
            $referenceNo = $request->reference_no ?: 'PUR-' . date('is') . '-' . rand(1000, 9999);
            
            // Insert purchase record
            $purchaseId = DB::table('purchases')->insertGetId([
                'reference_no' => $referenceNo,
                'user_id' => auth()->id(),
                'warehouse_id' => $request->warehouse_id,
                'supplier_id' => $request->supplier_id,
                'item' => count($request->products),
                'total_qty' => array_sum(array_column($request->products, 'qty')),
                'total_discount' => $request->total_discount ?? 0,
                'total_tax' => $request->total_tax ?? 0,
                'total_cost' => $request->total_cost,
                'order_tax_rate' => $request->order_tax_rate,
                'order_tax' => $request->order_tax,
                'order_discount' => $request->order_discount,
                'shipping_cost' => $request->shipping_cost,
                'grand_total' => $request->grand_total,
                'paid_amount' => $request->paid_amount ?? 0,
                'status' => $request->status,
                'payment_status' => $request->payment_status,
                'document' => $request->document,
                'note' => $request->note,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert product purchases
            foreach ($request->products as $product) {
                $productId = $this->getProductIdFromVariation($product['product_variation_id']);
                if (!$productId) {
                    // Instead of continuing silently, show a user-friendly error
                    DB::rollBack();
                    return redirect()->back()->with('error', 'Product variation is not linked to a product. Please check your product variations and try again.');
                }
                DB::table('product_purchases')->insert([
                    'purchase_id' => $purchaseId,
                    'product_id' => $productId,
                    'variant_id' => $product['product_variation_id'],
                    'qty' => $product['qty'],
                    'net_unit_cost' => $product['net_unit_cost'],
                    'total' => $product['total'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            DB::commit();
            return redirect()->route('purchases.index')->with('success', 'Purchase created successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error creating purchase: ' . $e->getMessage());
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
        $purchase = DB::table('purchases')
            ->leftJoin('suppliers', 'purchases.supplier_id', '=', 'suppliers.id')
            ->join('warehouses', 'purchases.warehouse_id', '=', 'warehouses.id')
            ->join('users', 'purchases.user_id', '=', 'users.id')
            ->select(
                'purchases.*',
                'suppliers.name as supplier_name',
                'suppliers.email as supplier_email',
                'warehouses.warehouse as warehouse_name',
                'users.name as user_name'
            )
            ->where('purchases.id', $id)
            ->first();

        $productPurchases = DB::table('product_purchases')
            ->join('products', 'product_purchases.product_id', '=', 'products.id')
            ->select('product_purchases.*', 'products.product_name', 'products.id as product_code')
            ->where('product_purchases.purchase_id', $id)
            ->get();

        return view('purchases.show', compact('purchase', 'productPurchases'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchase = DB::table('purchases')->where('id', $id)->first();
        $suppliers = DB::table('suppliers')->get();
        $warehouses = DB::table('warehouses')->get();
        $products = DB::table('products')->get();
        
        $productPurchases = DB::table('product_purchases')
            ->join('products', 'product_purchases.product_id', '=', 'products.id')
            ->select('product_purchases.*', 'products.product_name')
            ->where('product_purchases.purchase_id', $id)
            ->get();

        return view('purchases.edit', compact('purchase', 'suppliers', 'warehouses', 'products', 'productPurchases'));
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
            'reference_no' => 'required|unique:purchases,reference_no,' . $id,
            'warehouse_id' => 'required',
            'status' => 'required',
            'payment_status' => 'required',
            'products' => 'required|array',
        ]);

        DB::beginTransaction();
        
        try {
            // Update purchase record
            DB::table('purchases')->where('id', $id)->update([
                'reference_no' => $request->reference_no,
                'warehouse_id' => $request->warehouse_id,
                'supplier_id' => $request->supplier_id,
                'item' => count($request->products),
                'total_qty' => array_sum(array_column($request->products, 'qty')),
                'total_discount' => $request->total_discount ?? 0,
                'total_tax' => $request->total_tax ?? 0,
                'total_cost' => $request->total_cost,
                'order_tax_rate' => $request->order_tax_rate,
                'order_tax' => $request->order_tax,
                'order_discount' => $request->order_discount,
                'shipping_cost' => $request->shipping_cost,
                'grand_total' => $request->grand_total,
                'paid_amount' => $request->paid_amount ?? 0,
                'status' => $request->status,
                'payment_status' => $request->payment_status,
                'document' => $request->document,
                'note' => $request->note,
                'updated_at' => now(),
            ]);

            // Delete existing product purchases
            DB::table('product_purchases')->where('purchase_id', $id)->delete();

            // Insert updated product purchases
            foreach ($request->products as $product) {
                DB::table('product_purchases')->insert([
                    'purchase_id' => $id,
                    // Find the product_id for this variation
                    'product_id' => $this->getProductIdFromVariation($product['product_variation_id']),
                    'variant_id' => $product['product_variation_id'],
                    'qty' => $product['qty'],
                    'net_unit_cost' => $product['net_unit_cost'],
                    'total' => $product['total'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            DB::commit();
            return redirect()->route('purchases.index')->with('success', 'Purchase updated successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error updating purchase: ' . $e->getMessage());
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
            // Delete product purchases first
            DB::table('product_purchases')->where('purchase_id', $id)->delete();
            
            // Delete purchase
            DB::table('purchases')->where('id', $id)->delete();
            
            DB::commit();
            return redirect()->route('purchases.index')->with('success', 'Purchase deleted successfully!');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error deleting purchase: ' . $e->getMessage());
        }
    }

    // Helper to get product_id from product_variation_id
    private function getProductIdFromVariation($variationId)
    {
        $variation = DB::table('products')->where('id', $variationId)->first();
        // Defensive: check for object and product_id property
        // if ($variation && isset($variation->product_id) && $variation->product_id) {
            return $variation->id;
        // }
        // Optionally, log or throw a custom error here
        \Illuminate\Support\Facades\Log::error('Product variation with ID ' . $variationId . ' is not linked to a product.');
        return null;
    }
}
