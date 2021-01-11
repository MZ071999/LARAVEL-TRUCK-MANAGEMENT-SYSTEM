@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
            <div class="card-header bg-success font-weight-bold">Choose Which to Track: </div>
                <div class="card-body bg-light">
                <a href="{{ route('truck.index')}}">Truck</a>
                </div>
                <div class="card-body">
                <a href="{{ route('package.index')}}"> Package </a>
                </div>
                <div class="card-body bg-light">
                <a href="{{ route('postman.index')}}"> Postman </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
