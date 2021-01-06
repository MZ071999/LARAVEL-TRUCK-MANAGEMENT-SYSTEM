@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Truck Details</h3>
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
            <div class="form-group">
                <label for="truck_number">Truck Number</label>
                <input type="text" class="form-control" name="truck_number" value="{{ $truck->truck_number }}" readonly>
            </div>
            <div class="form-group">
                <label for="no_of_items">Quantity</label>
                <input type="text" class="form-control" name="no_of_items" value="{{ $truck->no_of_items }}" readonly>
            </div>
            <div class="form-group">
                <label for="postman_name">Postman in Charge</label>
                <input type="text" class="form-control" name="postman_name" value="{{ $truck->postman_name }}" readonly>
            </div>
            <div class="form-group">
                <label for="date_of_operation">Date of Operation</label>
                <input type="text" class="form-control" name="date_of_operation" value="{{ $truck->date_of_operation }}" readonly>
            </div>
            <div class="form-group">
                <label for="status">Status </label>
                <input type="text" class="form-control" name="status" value="{{ $truck->status }}" readonly>
            </div>
            </form>
            <div class="text-center">
            <a href="{{ route('truck.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;    
            </div>
    </div>
</div>
@endsection