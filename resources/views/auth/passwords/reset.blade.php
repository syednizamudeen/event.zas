@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="{{asset('main/css/loginutil.css')}}">
<link rel="stylesheet" href="{{asset('main/css/login.css')}}">
<div class="container-login100">
    <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <form class="form login100-form validate-form flex-sb flex-w" role="form" autocomplete="off" method="POST" action="{{ route('password.request') }}">
            <span class="login100-form-title p-b-32">
                Enter New Password
            </span>

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

            <button type="submit" class="btn btn-warning btn-lg float-right">
                Reset
            </button>
            <input type="hidden" name="token" value="{{ $token }}">
            {{ csrf_field() }}
        {!! Form::close() !!}
    </div>
</div>
<script src="{{asset('main/js/login.js')}}"></script>
@endsection
