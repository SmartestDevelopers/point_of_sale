<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function index()
    {
        $stocks = DB::table('product_stocks')
            ->join('products', 'product_stocks.product_id', '=', 'products.id')
            ->join('warehouses', 'product_stocks.warehouse_id', '=', 'warehouses.id')
            ->join('product_units', 'product_stocks.unit_id', '=', 'product_units.id')
            ->join('users', 'product_stocks.user_id', '=', 'users.id')
            ->select(
                'product_stocks.*',
                'products.product_name',
                'warehouses.warehouse as warehouse_name',
                'product_units.unit_name',
                'users.name as user_name'
            )
            ->orderBy('product_stocks.created_at', 'desc')
            ->get();

        return view('product_stock.index', compact('stocks'));
    }

    public function create()
    {
        $products = DB::table('products')->select('id', 'product_name', 'product_stock')->get();
        $warehouses = DB::table('warehouses')->get();
        $units = DB::table('product_units')->select('id', 'unit_name')->get();

        return view('product_stock.create', compact('products', 'warehouses', 'units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'warehouse_id' => 'required|exists:warehouses,id',
            'unit_id' => 'required|exists:product_units,id',
            'quantity' => 'required|numeric|min:1',
            'adjustment_type' => 'required|in:add,subtract',
            'reference_no' => 'required|unique:product_stocks',
        ]);

        DB::beginTransaction();
        
        try {
            $product = DB::table('products')->where('id', $request->product_id)->first();
            $newStock = $request->adjustment_type === 'add' 
                ? ($product->product_stock + $request->quantity)
                : ($product->product_stock - $request->quantity);

            if ($newStock < 0) {
                throw new \Exception("Insufficient stock for product ID {$request->product_id}. Available: {$product->product_stock}");
            }

            DB::table('product_stocks')->insert([
                'product_id' => $request->product_id,
                'warehouse_id' => $request->warehouse_id,
                'unit_id' => $request->unit_id,
                'quantity' => $request->quantity,
                'adjustment_type' => $request->adjustment_type,
                'reference_no' => $request->reference_no,
                'note' => $request->note,
                'user_id' => auth()->user()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('products')->where('id', $request->product_id)->update([
                'product_stock' => $newStock,
                'updated_at' => now(),
            ]);

            DB::commit();
            return redirect()->route('stocks.index')->with('success', 'Stock adjustment created successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error creating stock adjustment: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $stock = DB::table('product_stocks')
            ->join('products', 'product_stocks.product_id', '=', 'products.id')
            ->join('warehouses', 'product_stocks.warehouse_id', '=', 'warehouses.id')
            ->join('product_units', 'product_stocks.unit_id', '=', 'product_units.id')
            ->join('users', 'product_stocks.user_id', '=', 'users.id')
            ->select(
                'product_stocks.*',
                'products.product_name',
                'warehouses.warehouse as warehouse_name',
                'product_units.unit_name',
                'users.name as user_name'
            )
            ->where('product_stocks.id', $id)
            ->first();

        if (!$stock) {
            return view('product_stock.show', ['stock' => null]);
        }

        return view('product_stock.show', compact('stock'));
    }

    public function edit($id)
    {
        $stock = DB::table('product_stocks')->where('id', $id)->first();
        $products = DB::table('products')->select('id', 'product_name', 'product_stock')->get();
        $warehouses = DB::table('warehouses')->get();
        $units = DB::table('product_units')->select('id', 'unit_name')->get();

        return view('product_stock.edit', compact('stock', 'products', 'warehouses', 'units'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'warehouse_id' => 'required|exists:warehouses,id',
            'unit_id' => 'required|exists:product_units,id',
            'quantity' => 'required|numeric|min:1',
            'adjustment_type' => 'required|in:add,subtract',
            'reference_no' => 'required|unique:product_stocks,reference_no,' . $id,
        ]);

        DB::beginTransaction();
        
        try {
            $stock = DB::table('product_stocks')->where('id', $id)->first();
            if (!$stock) {
                throw new \Exception("Stock adjustment not found.");
            }

            $product = DB::table('products')->where('id', $stock->product_id)->first();

            // Revert previous adjustment
            $revertedStock = $stock->adjustment_type === 'add' 
                ? ($product->product_stock - $stock->quantity)
                : ($product->product_stock + $stock->quantity);

            // Apply new adjustment
            $newStock = $request->adjustment_type === 'add' 
                ? ($revertedStock + $request->quantity)
                : ($revertedStock - $request->quantity);

            if ($newStock < 0) {
                throw new \Exception("Insufficient stock for product ID {$request->product_id}. Available: {$revertedStock}");
            }

            DB::table('product_stocks')->where('id', $id)->update([
                'product_id' => $request->product_id,
                'warehouse_id' => $request->warehouse_id,
                'unit_id' => $request->unit_id,
                'quantity' => $request->quantity,
                'adjustment_type' => $request->adjustment_type,
                'reference_no' => $request->reference_no,
                'note' => $request->note,
                'user_id' => auth()->user()->id,
                'updated_at' => now(),
            ]);

            DB::table('products')->where('id', $request->product_id)->update([
                'product_stock' => $newStock,
                'updated_at' => now(),
            ]);

            DB::commit();
            return redirect()->route('stocks.index')->with('success', 'Stock adjustment updated successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error updating stock adjustment: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        
        try {
            $stock = DB::table('product_stocks')->where('id', $id)->first();
            if (!$stock) {
                throw new \Exception("Stock adjustment not found.");
            }

            $product = DB::table('products')->where('id', $stock->product_id)->first();

            // Revert stock adjustment
            $newStock = $stock->adjustment_type === 'add' 
                ? ($product->product_stock - $stock->quantity)
                : ($product->product_stock + $stock->quantity);

            if ($newStock < 0) {
                throw new \Exception("Cannot delete: Insufficient stock for product ID {$stock->product_id}. Available: {$product->product_stock}");
            }

            DB::table('products')->where('id', $stock->product_id)->update([
                'product_stock' => $newStock,
                'updated_at' => now(),
            ]);

            DB::table('product_stocks')->where('id', $id)->delete();

            DB::commit();
            return redirect()->route('stocks.index')->with('success', 'Stock adjustment deleted successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error deleting stock adjustment: ' . $e->getMessage());
        }
    }
}
