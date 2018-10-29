<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name','EventZas')}}</title>

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/components/font-awesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/responsive.css')}}">

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

</head>

<body>
    
     <!-- Preloader -->
    <div class="preloader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <!-- // Preloader -->
    

    <!-- ====== Header ====== -->
    <header id="header" class="header">
        <!-- ====== Navbar ====== -->
        <nav class="navbar navbar-expand-lg fixed-top bg-primari">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand logo" href="{{url("/")}}">
                    <img src="main/images/logo.jpg" alt="logo">
                </a>
                <!-- // Logo -->

                <!-- Mobile Menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fa fa-bars"></i></span></button>
                <!-- Mobile Menu -->

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{url("/home")}}">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">ALL VENDORS</a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="#service">SERVICE</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="#portfolio">RECOMMENDED IDEAS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#blog">EVENT INSPIRATION</a></li>
                        @if (Auth::guest())
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">LOGIN</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="{{url("/vendors/register")}}">BECOME A VENDOR</a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog fa-lg fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="settingsDropdown">
                                <a class="dropdown-item" href="{{url("/services")}}">Service</a>
                                <a class="dropdown-item" href="{{url("/subscriptions")}}">Subscription</a>
                                <a class="dropdown-item" href="{{url("/plans")}}">Plan</a>
                                <a class="dropdown-item" href="{{url("/countries")}}">Country</a>
                                <a class="dropdown-item" href="{{url("/vendors")}}">Vendor</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url("/users")}}">User</a>
                                <a class="dropdown-item" href="{{url("/roles")}}">Role</a>
                                <a class="dropdown-item" href="{{url("/permissions")}}">Permission</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profilesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user fa-lg fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="profilesDropdown">
                                <div class="card border-0" style="width: 18rem;">
                                    <img class="card-img-top" src="{{asset('img/user2-160x160.jpg')}}" alt="Card image cap">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ Auth::user()->name }}</h5>
                                        <p class="card-text">{{ Auth::user()->email }}</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item p-1">
                                            <a href="{{url("/settings/profile")}}" class="btn btn-warning"><i class="fas fa-address-card fa-lg fa-fw"></i>Profile</a>
                                            <a href="{{ route('logout') }}" class="btn btn-info float-right"
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt fa-lg fa-fw"></i>Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                    <!-- <div class="card-footer text-muted text-center">
                                        Member Since 2 days ago
                                    </div> -->
                                </div>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ====== // Navbar ====== -->
    </header>
    <!-- ====== // Header ====== -->

    <!--<div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="py-5 mt-5">
                <div class="alert alert-primary" role="alert">
                    <h4><i class="fas fa-info-circle fa-lg fa-fw"></i>Info!</h4>
                    <hr>
                    <p class="lead">This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
                </div>
                <div class="alert alert-secondary" role="alert">
                    <h4><i class="far fa-flag fa-lg fa-fw"></i>Notice!</h4>
                    <hr>
                    <p class="lead">This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
                </div>
                <div class="alert alert-success" role="alert">
                    <h4><i class="fas fa-check fa-lg fa-fw"></i>Success!</h4>
                    <hr>
                    <p class="lead">This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
                </div>
                <div class="alert alert-danger" role="alert">
                    <h4><i class="fas fa-ban fa-lg fa-fw"></i>Alert!</h4>
                    <hr>
                    <p class="lead">This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
                </div>
                <div class="alert alert-warning" role="alert">
                    <h4><i class="fas fa-exclamation-triangle fa-lg fa-fw"></i>Warning!</h4>
                    <hr>
                    <p class="lead">This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
                </div>
                <div class="alert alert-info" role="alert">
                This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-light" role="alert">
                This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-dark" role="alert">
                This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                </div>
            </div>
        </div>
    </div>-->

    @include('inc.messages')
    @yield('content')

    <!-- ====== Footer Area ====== -->
    <footer class="footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="copyright-text">
                        <p class="text-white">License No.: 1234567890S &copy; 2018</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="copyright-text">
                        <a href="#"><i class="fab fa-facebook-square fa-2x fa-fw"></i></a>
                        <a href="#"><i class="fab fa-twitter-square fa-2x fa-fw"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-2x fa-fw"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <div class="copyright-text">
                        <a href="settings.html">Settings</a>
                        <a href="#about">About</a>
                        <a href="faq.html">F.A.Q.</a>
                        <a href="terms-of-service.html">Terms of Use</a>
                        <!--<a href="#contact">Contact</a>-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== // Footer Area ====== -->

    <!-- ====== ALL JS ====== -->
    <script src="{{asset('main/js/lightbox.min.js')}}"></script>
    <script src="{{asset('main/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('main/js/jquery.mixitup.js')}}"></script>
    <script src="{{asset('main/js/wow.min.js')}}"></script>
    <script src="{{asset('main/js/typed.js')}}"></script>
    {{-- <script src="{{asset('main/js/skill.bar.js')}}"></script> --}}
    {{-- <script src="{{asset('main/js/fact.counter.js')}}"></script> --}}
    <script src="{{asset('main/js/main.js')}}"></script>

</body>

</html>
