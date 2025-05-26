<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductVariationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $product_variations = DB::table('product_variations')->get(); 
        
        return view('product_variations.index', compact('product_variations'));
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

        $options = $rows['options'];
        $values = $rows['values'];

        //insert these values into the database
        $insert = DB::table('product_variations')->insert([
            'options' => $options,
            'values' => $values
        ]);
        //  dd($insert);
         if($insert){
            return redirect()->back()->with('success', 'Product Variation Created Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Variation Creation Failed');
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
    $request->validate([
        'options' => 'required|string|max:255',
        'values' => 'required|string|max:255',
    ]);

    $data = $request->only(['options', 'values']);

    $updated = DB::table('product_variations')->where('id', $id)->update($data);

    if ($updated) {
        return redirect()->back()->with('success', 'Product Variation updated successfully.');
    } else {
        return redirect()->back()->with('info', 'No changes were made.');
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
        //  delete record from the database
        echo "Product Variation Deleted Successfully";

        // is all clear here?
    }

    public function productVariationDelete($id)
    {
        // echo "Line 128";
        // die();

        
         $delete = DB::table('product_variations')->where('id', $id)->update(['is_deleted' => 1]);
        // $delete = DB::table('product_units')->where('id', $id)->delete();
        if($delete){
            return redirect()->back()->with('success', 'Product Variation Deleted Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Variation Deletion Failed');
         }
      
    }
}
