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
        //
        $supplier_lists = DB::table('suppliers')->where('is_deleted',0)->get(); 
        // echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

        // $browser = get_browser(null, true);
        // print_r($browser);

        // die();
        // dd($units);
        // die();

        return view('people.supplierlist', compact('supplier_lists'));
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
     * Store a newly created resource in storage.
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
}
