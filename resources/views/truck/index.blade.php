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
<h3 class="display-5 text-center">Truck Details</h3> 

<table class="table table-striped mt-5">
    <thead>
        <tr>
          <th>No</th>
          <th>Truck Number</th>
          <th>Quantity</th>
          <th>Postman in Charge</th>
          <th>Operation Date</th>
          <th>Status</th>
          <th colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trucks as $count => $truck)
        <tr>
            <td>{{++$count}}</td>
            <td><a href="{{ route('truck.show',$truck->id)}}">{{$truck->truck_number}}</a></td>
            <td>{{$truck->no_of_items}}</td>
            <td>{{$truck->postman_name}}</td>
            <td>{{$truck->date_of_operation}}</td>
            <td>{{$truck->status}}</td>
            <td class="text-center">
                <a href="{{ route('truck.edit',$truck->id)}}" class="btn btn-primary btn-block">Edit</a>
            </td>
            <td class="text-center">
                <form action="{{ route('truck.destroy', $truck->id)}}" method="post">
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
    <a style="margin: 19px;" href="{{ route('truck.create')}}" class="btn btn-primary">New Truck Details</a>
  </div>
</div>

</div>
@endsection