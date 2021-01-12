@extends('layouts.mainlayout')
@section('content')

<div class="container">
        <h1 class="mt-5">Show postman {{$postman->postman_number}}</h1>

        <div class="jumbotron text-center">
            <p class="pd-5">  
                <strong>Postman ID: </strong> {{$postman->postman_id}}<br>
                <strong>Truck number: </strong> {{$postman->truck_number}}<br>
                <strong>Postman number: </strong> {{$postman->postman_number}}<br>
                <strong>Postman name: </strong> {{$postman->postman_name}}<br>
                <strong>Operation Date: </strong> {{$postman->date_of_operation}}<br>
                <div class="btn-group" role="group" aria-label="Basic example" color="Blue">
                    <a href="{{url("postman/")}}">
                        <button type="button" class="btn btn-warning">Back to Index</button>
                    </a>
            </p>
        </div>
</div>
