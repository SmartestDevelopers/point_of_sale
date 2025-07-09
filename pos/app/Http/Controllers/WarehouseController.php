<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $warehouses = DB::table('warehouses')->where('is_deleted', 0)->get();
        return view('warehouse-list', compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addWarehouse()
    {
        //
        return view('add-warehouse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitWarehouse(Request $request)
    {
        //

        $request->validate([
            'warehouse' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        DB::table('warehouses')->insert([
            'warehouse' => $request->warehouse,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'is_deleted' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/warehouse-list')->with('success', 'Warehouse added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editWarehouse($id)
    {
        $warehouse = DB::table('warehouses')->where('id', $id)->first();
        return view('add-warehouse', compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateWarehouse(Request $request, $id)
    {
        $request->validate([
            'warehouse' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        DB::table('warehouses')->where('id', $id)->update([
            'warehouse' => $request->warehouse,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'updated_at' => now(),
        ]);

        return redirect('/warehouse-list')->with('success', 'Warehouse updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteWarehouse($id)
    {
        DB::table('warehouses')->where('id', $id)->update(['is_deleted' => 1]);
        return redirect('/warehouse-list')->with('success', 'Warehouse deleted successfully!');
    }
}
