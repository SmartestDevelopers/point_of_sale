<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductBrands extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $product_brands = DB::table('product_brands')->get(); 

        return view('product_brands.index', compact('product_brands'));
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

        $brands_name = $rows['brands_name'];
        $note = $rows['note'];

        //insert these values into the database
        $insert = DB::table('product_brands')->insert([
            'brands_name' => $brands_name,
            'note' => $note
        ]);
        //  dd($insert);
         if($insert){
            return redirect()->back()->with('success', 'Product Brand Created Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Brand Creation Failed');
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
        // update record in the database
        $rows = $request->all();
        $brands_name = $rows['brands_name'];
        $note = $rows['note'];
        $update = DB::table('product_brands')->where('id', $id)->update([
            'brands_name' => $brands_name,
            'note' => $note
        ]);
        if($update){
            return redirect()->back()->with('success', 'Product Unit Updated Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Unit Update Failed');
         }
        // dd($update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "Product Brand Deleted Successfully";
    }

    public function productBrandDelete($id)
    {

        
         $delete = DB::table('product_brands')->where('id', $id)->update(['is_deleted' => 1]);
        // $delete = DB::table('product_units')->where('id', $id)->delete();
        if($delete){
            return redirect()->back()->with('success', 'Product Brand Deleted Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Brand Deletion Failed');
         }
      
    }
}
