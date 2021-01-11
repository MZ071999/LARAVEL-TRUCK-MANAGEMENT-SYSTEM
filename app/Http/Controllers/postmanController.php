<?php

namespace App\Http\Controllers;
use App\Models\postman;
use Illuminate\Http\Request;
class postmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postman = postman::all();
        return view('postman.index', compact('postman', $postman));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postman.create');
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
            'postman_id'=>'required',
            'truck_number'=>'required',
            'postman_number'=>'required',
            'postman_name'=>'required',
            'date_of_operation'=>'required'
        ]);
        $postman = postman::create([
            'postman_id' => $request->get('postman_id'),
            'truck_number' => $request->get('truck_number'),
            'postman_number' => $request->get('postman_number'),
            'postman_name' => $request->get('postman_name'),
            'date_of_operation' => $request->get('date_of_operation')
        ]);
       
        return redirect('/postman/' .$postman->postman_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(postman $postman)
    {
        return view('postman.show', compact('postman',$postman));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(postman $postman)
    {
        
        return view('postman.edit', compact('postman', $postman));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, postman $postman)
    {
        $request->validate([
            'postman_id'=>'required',
            'truck_number'=>'required',
            'postman_number'=>'required',
            'postman_name'=>'required',
            'date_of_operation'=>'required'
        ]);
        $postman->postman_id = $request->get('postman_id');
        $postman->truck_number =  $request->get('truck_number');
        $postman->postman_number = $request->get('postman_number');
        $postman->postman_name = $request->get('postman_name');
        $postman->date_of_operation = $request->get('date_of_operation');
        $postman->save();
        $request->session()->flash('message', 'Sucessfully update postman');
        return redirect('postman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, postman $postman)
    {
        
        $postman->delete();
        $request->session()->flash('message', 'Sucessfully delete postman');
        return redirect('postman');
    }
}
