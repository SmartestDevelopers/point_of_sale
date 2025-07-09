<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch products from the add_products table
        $products = DB::table('add_products')->get();
        return view('product.productlist', compact('products'));
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



    public function addProduct()
    {
        $productUnits = DB::table('product_units')->where('is_deleted','0')->get();
        $productCategories = DB::table('product_categories')->where('is_deleted','0')->get();
        return view('product.addproduct', compact('productUnits', 'productCategories'));
    }

    public function submitProduct(Request $request){
        //dd($request->all());
           
        $result = $request->all();
        $product_name = $result['product_name'];
        $product_category = $result['product_category'];
        $product_unit = $result['product_unit'];
        $product_price = $result['product_price'];
        $product_code = $result['product_code'];
        
        DB::table('add_products')->insert([
            'product_name' => $product_name,
            'product_category' => $product_category,
            'product_unit' => $product_unit,
            'product_price' => $product_price,
            'product_code' => $product_code,
        ]);
        return redirect('product-list')->with('success', 'Product Created Successfully');

    }
}
