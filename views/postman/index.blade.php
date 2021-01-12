@extends('layouts.mainlayout')
@section('content')

<div class="col-sm-12">
    <br />
    <h3 class="display-5 text-center">postman Details</h3> 
    @if(Session::has('message'))
        <div class="alert alert-info">{{Session::get('message')}}</div>
    {{Session::get('message')}}
    @endif
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Postman id</th>
              <th scope="col">Truck Number</th>
              <th scope="col">Postman number</th>
              <th scope="col">Postman name</th>
              <th scope="col">Operation Date</th>
              <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($postman as $postman)
            <tr>
                <th scope="row">{{$postman->postman_id}}</th>
                    <td><a href="/postman/{{$postman->postman_id}}">{{$postman->truck_number}}</a></td>
                    <td>{{$postman->postman_number}}</td>
                    <td>{{$postman->postman_name}}</td>
                    <td>{{$postman->date_of_operation}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ URL::to("postman/" .$postman->postman_id . '/edit') }}">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>
                    
                    <form action="{{url('postman', [$postman->postman_id])}}" method="post">
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
                <a href="{{url("postman/create")}}">
                    <button type="button" class="btn btn-warnig">Add Postman</button>
                </a>
            </div>
    </div>



@endsection
