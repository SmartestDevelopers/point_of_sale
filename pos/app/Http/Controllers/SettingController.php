<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $warehouses = DB::table('warehouses')->get();
        return view('setting.viewsetting', compact('warehouses'));
    }

    public function warehouse()
    {
        return view('setting.warehouselist');
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
        $rows = $request->all();

        // dd($rows);

        $name = $rows['warehouse'];
        $address = $rows['address'];
        $phone = $rows['phone_number'];

        //insert these values into the database
        $update = DB::table('warehouses')->where('id', $id)->update([
            'warehouse' => $name,
            'address' => $address,
            'phone_number' => $phone
        ]);

        if($update){
            return redirect()->back()->with('success', 'Warehouse Updated Successfully');
         }else{
            return redirect()->back()->with('error', 'Warehouse Update Failed');
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
        //
    }


    public function submitWarehouse(Request $request){
    
            //dd($request->all());

            // echo "<pre>";
            // print_r($abc);
            // echo "</pre>";

            $abc = $request->all();

            $name = $abc['warehouse'];

            $address = $abc['address'];
            
            $phone = $abc['phone'];

            
            $insert = DB::table('warehouses')->insert([
                'warehouse' =>$name,
                'address' =>$address,
                'phone_number' =>$phone
                ]);

            return redirect()->back()->with('success', 'Warehouse Created Successfully');

    }

    public function deleteWarehouse($id)
{
    $delete = DB::table('warehouses')->where('id', $id)->update(['is_deleted' => 1]);

    if ($delete) {
        return redirect()->back()->with('success', 'Warehouse Deleted Successfully');
    } else {
        return redirect()->back()->with('error', 'Warehouse Deletion Failed');
    }
}

}
