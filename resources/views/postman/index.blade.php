@extends('layouts.app')
@section('content')

<div class="row">

<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success text-center">
      {{ session()->get('success') }}  
    </div>
    @endif
    </div>

<div class="col-sm-12">
<br />
<h3 class="display-5 text-center">Postman Details</h3> 

    <table class="table table-striped mt-5">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Truck Number</th>
              <th scope="col">Postman number</th>
              <th scope="col">Postman name</th>
              <th scope="col">Operation Date</th>
              <th colspan="2" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($postman as $count => $postman)
            <tr>
                    <td>{{++$count}}</td>
                    <td><a href="{{ route('postman.show',$postman->postman_id)}}">{{$postman->truck_number}}</a></td>
                    <td>{{$postman->postman_number}}</td>
                    <td>{{$postman->postman_name}}</td>
                    <td>{{$postman->date_of_operation}}</td>
                    <td class="text-center">
                <a href="{{ route('postman.edit',$postman->postman_id)}}" class="btn btn-primary btn-block">Edit</a>
            </td>
            <td class="text-center">
                <form action="{{ route('postman.destroy', $postman->postman_id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-block" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="text-center">
    <a style="margin: 19px;" href="{{ route('postman.create')}}" class="btn btn-primary bg-success">New postman Details</a>
  </div>
</div>

</div>
@endsection