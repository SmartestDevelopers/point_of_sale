<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $product_reviews = DB::table('product_reviews')->get(); 

        return view('product_review.index', compact('product_reviews'));
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
        // update record in the database
        $rows = $request->all();
        $unit_name = $rows['unit_name'];
        $status = $rows['status'];
        $update = DB::table('product_units')->where('id', $id)->update([
            'unit_name' => $unit_name,
            'status' => $status
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
        //
        echo "Product Unit Deleted Successfully";
    }

    public function productUnitDelete($id)
    {

        
         $delete = DB::table('product_units')->where('id', $id)->update(['is_deleted' => 1]);
        // $delete = DB::table('product_units')->where('id', $id)->delete();
        if($delete){
            return redirect()->back()->with('success', 'Product Unit Deleted Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Unit Deletion Failed');
         }
      
    }
}
