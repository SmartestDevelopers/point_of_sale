<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = DB::table('suppliers')->where('is_deleted', 0)->get(); 
        return view('supplier-list', compact('suppliers'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource /data/record/supplier-record in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $rows = $request->all();

        // dd($rows);

        $unit_name = $rows['unit_name'];
        $status = $rows['status'];

        //insert these values into the database
        $insert = DB::table('product_units')->insert([
            'unit_name' => $unit_name,
            'status' => $status
        ]);
        //  dd($insert);
         if($insert){
            return redirect()->back()->with('success', 'Product Unit Created Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Unit Creation Failed');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addSupplier()
    {
        return view('add-supplier');
    }

    public function submitSupplier(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'vat_number' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'balance' => 'nullable|string|max:255',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = '';
        if ($request->hasFile('images')) {
            $imagePath = $request->file('images')->store('suppliers', 'public');
        }

        DB::table('suppliers')->insert([
            'name' => $request->name,
            'company_name' => $request->company_name ?? '',
            'vat_number' => $request->vat_number ?? '',
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address ?? '',
            'balance' => $request->balance ?? '',
            'images' => $imagePath,
            'is_deleted' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/supplier-list')->with('success', 'Supplier added successfully!');
    }
}
