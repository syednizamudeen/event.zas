@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="{{asset('main/css/loginutil.css')}}">
<link rel="stylesheet" href="{{asset('main/css/login.css')}}">
<div class="container-login100">
    <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <form class="form login100-form validate-form flex-sb flex-w" role="form" autocomplete="off" method="POST" action="{{ route('login') }}">
            <span class="login100-form-title p-b-32">
                Account Login
            </span>

            <span class="txt1 p-b-11">
                Email
            </span>
            <div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
                <input class="input100" type="email" name="email" id="email" value="{{ old('email') }}" autofocus>
                <span class="focus-input100"></span>
            </div>
            
            <span class="txt1 p-b-11">
                Password
            </span>
            <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                <span class="btn-show-pass">
                    <i class="fa fa-eye"></i>
                </span>
                <input class="input100" type="password" name="password" id="password">                
                <span class="focus-input100"></span>
            </div>
            
            <div class="flex-sb-m w-full p-b-48">
                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div>
                    <a href="{{ route('password.request') }}" class="txt3">
                        Forgot Password?
                    </a>
                </div>
            </div>

            <a href="{{ route('register') }}" class="btn btn-success btn-lg">Register</a>
            <button type="submit" class="btn btn-warning btn-lg float-right">
                Login
            </button>
            {{ csrf_field() }}
        {!! Form::close() !!}
    </div>
</div>
<script src="{{asset('main/js/login.js')}}"></script>
@endsection
