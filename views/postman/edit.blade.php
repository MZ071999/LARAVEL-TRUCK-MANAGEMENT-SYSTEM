@extends('layouts.mainlayout')
@section('content')

    <div class="container">
        <h1 class="mt-5">Edit Postman</h1>
        <hr>
        <form action="{{url('postman', [$postman->postman_id]) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
                {{csrf_field() }}
            <div class="form-group">
                <label for="postman_id">Postman id</label>
                <input type="text" value="{{$postman->postman_id}}" class="form-control" id="postman_id" name="postman_id">
            </div>  
            <div class="form-group">
                <label for="truck_number">Truck Number</label>
                <input type="text" value="{{$postman->postman_number}}" class="form-control" id="truck_number" name="truck_number">
            </div>
            <div class="form-group">
                <label for="postman_number">Postman Number</label>
                <input type="text" value="{{$postman->postman_number}}" class="form-control" id="postman_number" name="postman_number">
            </div>  
            <div class="form-group">
                <label for="postman_name">Postman Number</label>
                <input type="text" value="{{$postman->postman_name}}" class="form-control" id="postman_name" name="postman_name">
            </div> 
            <div class="form-group">
                <label for="date_of_operation">Operation Date</label>
                <input type="date" value="{{$postman->date_of_operation}}" class="form-control" id="date_of_operation" name="date_of_operation">
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