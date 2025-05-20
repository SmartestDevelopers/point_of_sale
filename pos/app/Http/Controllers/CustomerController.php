<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer_lists = DB::table('customers')->where('is_deleted',0)->get(); 
        // echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

        // $browser = get_browser(null, true);
        // print_r($browser);

        // die();
        // dd($units);
        // die();

        return view('people.customerlist', compact('customer_lists'));
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

        $customer_group = $rows['customer_group'];
        $name = $rows['name'];
        $company_name = $rows['company_name'];
        $email = $rows['email'];
        $phone_number = $rows['phone_number'];
        $tax_number = $rows['tax_number'];
        $address = $rows['address'];
        $balance = $rows['balance'];
        

        //insert these values into the database
        $insert = DB::table('customers')->insert([
            'customer_group' => $customer_group,
            'name' => $name,
            'company_name' => $company_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'tax_number' => $tax_number,
            'address' => $address,
            'balance' => $balance
        ]);
        //  dd($insert);
         if($insert){
            return redirect()->back()->with('success', 'Customer Created Successfully');
         }else{
            return redirect()->back()->with('error', 'Customer Creation Failed');
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
