@extends('layouts.mainlayout')
@section('content')
    <div class="container">
        <div class="col-sm-12">
            <br />
            <h3 class="display-5 text-center">package Details</h3> 
            @if(Session::has('message'))
                <div class="alert alert-info">{{Session::get('message')}}</div>
            {{Session::get('message')}}
            @endif
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Truck Number</th>
                      <th scope="col">Package number</th>
                      <th scope="col">Destination</th>
                      <th scope="col">Operation Date</th>
                      <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($package as $package)
                    <tr>
                        <th scope="row">{{$package->package_id}}</th>
                            <td><a href="/package/{{$package->package_id}}">{{$package->truck_number}}</a></td>
                            <td>{{$package->package_number}}</td>
                            <td>{{$package->destination}}</td>
                            <td>{{$package->date_of_operation}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ URL::to("package/" .$package->package_id . '/edit') }}">
                                <button type="button" class="btn btn-warnig">Edit</button>
                            </a>
                            <form action="{{url('package', [$package->package_id])}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-danger" value="delete">
                            </form>
                            </div> 
                        </td> 
                    </tr>
                    @endforeach
                </tbody>
              </table>
              <div class="btn-group" role="group" aria-label="Basic example" color="Blue">
                <a href="{{url("package/create")}}">
                    <button type="button" class="btn btn-warnig">ADD Package</button>
                </a>
            </div>
        

    </div>

@endsection
