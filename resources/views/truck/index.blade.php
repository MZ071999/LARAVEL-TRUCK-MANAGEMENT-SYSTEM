@extends('layouts.app')
@section('content')

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
        <tr>
            <td>count++</td>
            <td>truck number</td>
            <td>quantity taken from package table</td>
            <td>postman name</td>
            <td>date data</td>
            <td>status</td>
            <td class="text-center">
                Edit
            </td>
            <td class="text-center">
                  <button class="btn btn-danger btn-block" type="submit">Delete</button>
                
            </td>
        </tr>
    </tbody>
  </table>
</div>

@endsection