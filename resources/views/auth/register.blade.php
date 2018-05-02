@extends('layouts.home')

@section('content')
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5">New User Registration</h2>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card border-secondary">
                            <div class="card-header">
                                <h3 class="mb-0 my-2">Sign Up</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required="" autofocus placeholder="full name">
                                        @if ($errors->has('name'))
                                            <small class="text-danger">{{ $errors->first('name') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required="" placeholder="email@gmail.com">
                                        @if ($errors->has('email'))
                                            <small class="text-center">{{ $errors->first('email') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="password" title="At least 6 characters with letters and numbers" required="">
                                        @if ($errors->has('password'))
                                            <small class="text-danger">{{ $errors->first('password') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirmation">Verify</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password (again)" required="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg float-right">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
    
            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>
    <!--/container-->
</section>
@endsection
