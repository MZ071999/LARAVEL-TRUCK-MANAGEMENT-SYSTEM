<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;

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
        return view('truck.index', compact('trucks'));
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
            'truck_number'=>'required',
            'no_of_items'=>'required',
            'postman_name'=>'required',
            'date_of_operation'=>'required',
            'status'=>'required'
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
        return view('truck.show', compact('trucks'));
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
        return view('truck.edit', compact('trucks'));  
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
            'truck_number'=>'required',
            'no_of_items'=>'required',
            'postman_name'=>'required',
            'date_of_operation'=>'required',
            'status'=>'required'
        ]);
        $trucks = Truck::find($truck_id);
        $trucks->truck_number =  $request->get('truck_number');
        $trucks->no_of_items = $request->get('no_of_items');
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
