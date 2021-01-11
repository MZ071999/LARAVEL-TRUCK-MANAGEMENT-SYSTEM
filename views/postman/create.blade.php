@extends('layouts.mainlayout')

@section('content')
   <div class="container"> 
       <h1 class="mt-5">Add New Postman</h1>
    <hr>
    <form action="/postman" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Postman id</label>
            <input type="text" class="form-control" id="postman_id" name="postman_id">
        </div>
        <div class="form-group">   
            <label for="title">Truck Number</label>
            <input type="text" class="form-control" id="truck_number" name="truck_number">
        </div>
        <div class="form-group">
            <label for="title">Postman Number</label>
            <input type="text" class="form-control" id="postman_number" name="postman_number">
        </div>
        <div class="form-group">
            <label for="title">Postman Name</label>
            <input type="text" class="form-control" id="postman_name" name="postman_name">
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