@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="{{asset('main/css/loginutil.css')}}">
<link rel="stylesheet" href="{{asset('main/css/login.css')}}">
<div class="container-login100">
    <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <form class="form login100-form validate-form flex-sb flex-w" role="form" autocomplete="off" method="POST" action="{{ route('register') }}">
            <span class="login100-form-title p-b-32">
                Account Sign Up
            </span>

            <span class="txt1 p-b-11">
                Name
            </span>
            <div class="wrap-input100 validate-input m-b-36" data-validate = "Name is required">
                <input class="input100" type="text" name="name" id="name" value="{{ old('name') }}" autofocus placeholder="Full name">
                <span class="focus-input100"></span>
            </div>

            <span class="txt1 p-b-11">
                Email
            </span>
            <div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
                <input class="input100" type="email" name="email" id="email" value="{{ old('email') }}" autofocus placeholder="email@gmail.com">
                <span class="focus-input100"></span>
            </div>
            
            <span class="txt1 p-b-11">
                Password
            </span>
            <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                <span class="btn-show-pass">
                    <i class="fa fa-eye"></i>
                </span>
                <input class="input100" type="password" name="password" id="password" placeholder="Password">                
                <span class="focus-input100"></span>
            </div>

            <span class="txt1 p-b-11">
                Verify (Re-type Password)
            </span>
            <div class="wrap-input100 validate-input m-b-12" data-validate = "Verify Password is required">
                <span class="btn-show-pass">
                    <i class="fa fa-eye"></i>
                </span>
                <input class="input100" type="password" name="password_confirmation" id="password-confirm" placeholder="Password (again)">                
                <span class="focus-input100"></span>
            </div>

            <div class="flex-sb-m w-full p-b-48">
                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="acceptterms" type="checkbox" name="acceptterms">
                    <label class="label-checkbox100" for="acceptterms">
                        I agree to the <a href="terms-of-service.html">Terms and Conditions</a>
                    </label>
                </div>

                <div>
                    <a href="{{ route('login') }}" class="txt3">
                        I want to Log In
                    </a>
                </div>
            </div>
            
            <button type="submit" class="btn btn-warning btn-lg float-right">
                Register
            </button>
            {{ csrf_field() }}
        {!! Form::close() !!}
    </div>
</div>
<script src="{{asset('main/js/login.js')}}"></script>
@endsection
