@extends('layouts.mainlayout')

@section('content')
   <div class="container"> 
       <h1 class="mt-5">Add New Package</h1>
    <hr>
    <form action="/package" method="post">
        {{csrf_field()}}
        <div class="form-group">   
             <div class="form-group">
            <label for="title">Truck Number</label>
            <input type="text" class="form-control" id="truck_number" name="truck_number">
        </div>
            <label for="title">Package Number</label>
            <input type="text" class="form-control" id="package_number" name="package_number">
        </div>
    
        <div class="form-group">
            <label for="title">Destination</label>
            <input type="text" class="form-control" id="destination" name="destination">
        </div>
        <div class="form-group">
            <label for="title">Operation Date</label>
            <input type="date" class="form-control" id="date_of_operation" name="date_of_operation">
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>

@endsection
