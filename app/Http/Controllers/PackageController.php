<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\Truck;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Package::all();
        return view('package.index', compact('package', $package));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trucks = Truck::all('truck_number');
        return view('package.create')->with('truck_number', $trucks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'truck_number' => 'required',
            'package_number' => 'required|unique:packages',
            'destination' => 'required',
            'date_of_operation' => 'required'
        ]);
        $package = Package::create([
            'truck_number' => $request->truck_number,
            'package_number' => $request->package_number,
            'destination' => $request->destination,
            'date_of_operation' => $request->date_of_operation
        ]);
        return redirect('package');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('package.show', compact('package', $package));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        
        return view('package.edit', compact('package', $package));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //validate
        $request->validate([
            'truck_number' => 'required',
            'package_number' => 'required|unique:packages',
            'destination' => 'required',
            'date_of_operation' => 'required'
        ]);
        $package->truck_number = $request->truck_number;
        $package->package_number = $request->package_number;
        $package->destination = $request->destination;
        $package->date_of_operation = $request->date_of_operation;
        $package->save();
        $request->session()->flash('message', 'Sucessfully update package');
        return redirect('package');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Package $package)
    {
        $package->delete();
        $request->session()->flash('message', 'Sucessfully delete package');
        return redirect('package');
    }
}
