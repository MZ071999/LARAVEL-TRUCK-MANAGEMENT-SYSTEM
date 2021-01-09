@extends('layouts.mainlayout')

@section('content')
    <h1>Add New Package</h1>
    <hr>
    <form action="/package" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Package Number</label>
            <input type="text" class="form-control" id="packagenumber" name="packagenumber">
        </div>
        <div class="form-group">
            <label for="title">Truck Number</label>
            <input type="text" class="form-control" id="trucknumber" name="trucknumber">
        </div>
        <div class="form-group">
            <label for="title">Destination</label>
            <input type="text" class="form-control" id="detination" name="destination">
        </div>
        <div class="form-group">
            <label for="title">Operation Date</label>
            <input type="text" class="form-control" id="operationdate" name="operationdate">
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

@endsection