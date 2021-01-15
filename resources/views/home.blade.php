@extends('layouts.app')

@section('content')
<style>
.text-large {
  font-size: 120%;
}
</style>
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

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
            <div class="card-header bg-success font-weight-bold">Choose Which to Track: </div>
                <div class="card-body bg-light pt-5 pb-5 text-large">
                <i class="fas fa-truck" style="color:#ebbd34"></i>
                <a href="{{ route('truck.index')}}">Truck</a>
                </div>
                <div class="card-body pt-5 pb-5 text-large">
                <i class="fas fa-cube" style="color:#ebbd34"></i>
                <a href="{{ route('package.index')}}"> Package </a>
                </div>
                <div class="card-body bg-light pt-5 pb-5 text-large">
                <i class="fas fa-user" style="color:#ebbd34"></i>
                <a href="{{ route('postman.index')}}"> Postman </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
