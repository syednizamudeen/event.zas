@extends('layouts.home')

@section('content')
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5">Welcome</h2>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <span class="anchor" id="formLogin"></span>
    
                        <!-- form card login -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Login</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">E-Mail Address</label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required="" autofocus>
                                        @if ($errors->has('email'))
                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" id="password" required="" autocomplete="new-password">
                                        @if ($errors->has('password'))
                                            <small class="text-danger">{{ $errors->first('password') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-check small">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}> <span>Remember me on this computer</span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg float-right">
                                            Login
                                        </button>
                                    <div class="form-group">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                                    </div>
                                </form>
                            </div>
                            <!--/card-block-->
                        </div>
                        <!-- /form card login -->
    
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
