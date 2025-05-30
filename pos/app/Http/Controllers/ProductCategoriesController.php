<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $product_categories = DB::table('product_categories')->get(); 

        return view('product_categories.index', compact('product_categories'));
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
        
        // dd($request->all());

        $result = $request->all();
 

        $category_name = $result['category_name'];
        $category_code = $result['category_code'];
        $description = $result['description'];

        $category = DB::table('product_categories')->insert([
            'category_name' => $category_name,
            'category_code' => $category_code,
            'description' => $description,
        ]);
        return redirect()->back()->with('success', 'Product Category Created Successfully');

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
        $category_name = $rows['category_name'];
        $category_code = $rows['category_code'];
        $description = $rows['description'];
        $update = DB::table('product_categories')->where('id', $id)->update([
            'category_name' => $category_name,
            'category_code' => $category_code,
            'description' => $description,
        ]);
        if($update){
            return redirect()->back()->with('success', 'Product Category Updated Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Category Update Failed');
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
        echo "Product Category Deleted Successfully";
    }

    public function productCategoryDelete($id)
    {

        
         $delete = DB::table('product_categories')->where('id', $id)->update(['is_deleted' => 1]);
        // $delete = DB::table('product_units')->where('id', $id)->delete();
        if($delete){
            return redirect()->back()->with('success', 'Product Category Deleted Successfully');
         }else{
            return redirect()->back()->with('error', 'Product Category Deletion Failed');
         }
      
    }
}
