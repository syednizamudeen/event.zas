@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="{{asset('main/css/loginutil.css')}}">
<link rel="stylesheet" href="{{asset('main/css/login.css')}}">
<div class="container-login100">
    <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <form class="form login100-form validate-form flex-sb flex-w" role="form" autocomplete="off" method="POST" action="{{ route('password.email') }}">
            <span class="login100-form-title p-b-32">
                Forgot Password ?
            </span>

            <span class="txt1 p-b-11">
                Email
            </span>
            <div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
                <input class="input100" type="email" name="email" id="email" value="{{ old('email') }}" autofocus placeholder="email@gmail.com">
                <span class="focus-input100"></span>
            </div>

            <a href="{{ route('login') }}" class="btn btn-success btn-lg">Login</a>
            <button type="submit" class="btn btn-warning btn-lg float-right">
                Reset
            </button>
            {{ csrf_field() }}
        {!! Form::close() !!}
    </div>
</div>
<script src="{{asset('main/js/login.js')}}"></script>
@endsection
