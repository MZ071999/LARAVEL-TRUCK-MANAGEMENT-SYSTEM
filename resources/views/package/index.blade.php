@extends('layouts.mainlayout')
@section('content')

<div class="col-sm-12">
    <br />
    <h3 class="display-5 text-center">package Details</h3> 
    @if(Session::has('message'))
    {{Session::get('message')}}
    @endif
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Package Number</th>
              <th scope="col">Truck number</th>
              <th scope="col">Destination</th>
              <th scope="col">Operation Date</th>
              <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($package as $packages)
            <tr>
                <td>{{$packages->package_id}}</td>
                <td>{{$packages->number}}</td>
                <td>{{$packages->number}}</td>
                <td>{{$packages->destination}}</td>
                <td>{{$packages->date_of_operation}}</td>
                <td class="text-center">
                    Edit
                </td>
                <td class="text-center">
                      <button class="btn btn-danger btn-block" type="submit">Delete</button>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>



@endsection