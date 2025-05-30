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

        $orders_id = $rows['orders_id'];
        $product_names = $rows['product_names'];
        $reviews_text = $rows['reviews_text'];
        $date = $rows['date'];

        //insert these values into the database
        $insert = DB::table('product_reviews')->insert([
            'orders_id' => $orders_id,
            'product_names' => $product_names,
            'reviews_text' => $reviews_text,
            'date' => $date
        ]);
        //  dd($insert);
         if($insert){
            return redirect()->back()->with('success', 'Product Review Created Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Review Creation Failed');
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
        $orders_id = $rows['orders_id'];
       $product_names = $rows['product_names'];
        $reviews_text = $rows['reviews_text'];
        $date = $rows['date'];
        $update = DB::table('product_reviews')->where('id', $id)->update([
            'orders_id' => $orders_id,
             'product_names' => $product_names,
            'reviews_text' => $reviews_text,
            'date' => $date
        ]);
        if($update){
            return redirect()->back()->with('success', 'Product Review Updated Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Review Update Failed');
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

    public function productReviewDelete($id)
    {

        
         $delete = DB::table('product_reviews')->where('id', $id)->update(['is_deleted' => 1]);
        // $delete = DB::table('product_units')->where('id', $id)->delete();
        if($delete){
            return redirect()->back()->with('success', 'Product Unit Deleted Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Unit Deletion Failed');
         }
      
    }
}
