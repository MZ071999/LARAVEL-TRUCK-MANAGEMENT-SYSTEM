<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use App\Models\Package;
use App\Models\postman;

const TRUCK = '/truck';

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trucks = Truck::all();
        $packages = Package::all('package_number');
        return view('truck.index', compact('trucks'))->with('package_number', $packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('truck.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'truck_number'=>'required|unique:trucks',
            'no_of_items',
            'postman_name'=>'required',
            'date_of_operation'=>'required',
            'status'
        ]);
        $trucks = new Truck([
            'truck_number' => $request->get('truck_number'),
            'no_of_items' => $request->get('no_of_items'),
            'postman_name' => $request->get('postman_name'),
            'date_of_operation' => $request->get('date_of_operation'),
            'status' => $request->get('status')
        ]);
        $trucks->save();
        return redirect(TRUCK)->with('success', 'Truck Details Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($truck_id)
    {
        $trucks = Truck::find($truck_id);
        $packages = Package::all('package_number');
        return view('truck.show', compact('trucks'))->with('package_number', $packages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($truck_id)
    {
        $trucks = Truck::find($truck_id);
        $postmen = postman::all();
        return view('truck.edit', compact('trucks'))->with(compact('postmen'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $truck_id)
    {
        $request->validate([
            'truck_number'=>'required|unique:trucks,truck_id',
            'no_of_items',
            'postman_name'=>'required',
            'date_of_operation'=>'required',
            'status'
        ]);
        $trucks = Truck::find($truck_id);
        $trucks->truck_number =  $request->get('truck_number');
        $trucks->no_of_items = null;
        $trucks->postman_name = $request->get('postman_name');
        $trucks->date_of_operation = $request->get('date_of_operation');
        $trucks->status = $request->get('status');
        $trucks->save();
        return redirect(TRUCK)->with('success', 'Truck Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($truck_id)
    {
        $trucks = Truck::find($truck_id);
        $trucks->delete();
        return redirect(TRUCK)->with('success', 'Truck Deleted!');
    }
}
