@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Update Package Details</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('package.update', $packages->package_id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">    
              <label for="truck_number">Truck Number</label>
              <select name="truck_number" class="form-control">
              @foreach ($truck_number as $number)
                  <option value="{{$number['truck_number']}}">{{$number['truck_number']}}</option>
              @endforeach
              </select>
            </div>
            <div class="form-group">
                <label for="package_number">Package Number</label>
                <input type="text" class="form-control" name="package_number" value="{{ $packages->package_number }}">
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" name="destination" value="{{ $packages->destination }}">
            </div>
            <div class="form-group">
                <label for="date_of_operation">Date of Operation</label>
                <input type="text" class="form-control" name="date_of_operation" value="{{ $packages->date_of_operation }}">
            </div>
            <div class="text-center">
            <a href="{{ route('package.index')}}" class="btn btn-primary bg-danger">Return</a>&nbsp;&nbsp;    
            <button type="submit" class="btn btn-primary bg-success">Update Details</button>
            </div>
        </form>
    </div>
</div>
@endsection
