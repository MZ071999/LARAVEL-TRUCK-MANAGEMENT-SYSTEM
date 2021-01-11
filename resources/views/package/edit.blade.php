@extends('layouts.app')
@section('content')

    <div class="container">

        <h1 class="mt-5">Edit Package</h1>
        <hr>
        <form action="{{url('package', [$package->package_id]) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
                {{csrf_field() }}
            <div class="form-group">
                <label for="truck_number">Truck Number</label>
                <input type="text" value="{{$package->truck_number}}" class="form-control" id="truck_number" name="truck_number">
            </div>
            <div class="form-group">
                <label for="package_number">Package Number</label>
                <input type="text" value="{{$package->package_number}}" class="form-control" id="packae_number" name="package_number">
            </div>  
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" value="{{$package->destination}}" class="form-control" id="destination" name="destination">
            </div> 
            <div class="form-group">
                <label for="date_of_operation">Operation Date</label>
                <input type="date" value="{{$package->date_of_operation}}" class="form-control" id="date_of_operation" name="date_of_operation">
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