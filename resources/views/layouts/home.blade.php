<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{config('app.name','EventZas')}}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('app/bootstrap/css/bootstrap.min.css')}}">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="{{asset('vendor/components/font-awesome/css/fontawesome-all.css')}}" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('app/agency.css')}}">

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('app/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('app/jquery-easing/jquery.easing.min.js')}}"></script>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="{{url("/")}}">EventZAS</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{url("/home")}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{url("/ideas")}}">Recommended Ideas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{url("/blog")}}">Event Inspiration</a>
            </li>
            @if (Auth::guest())
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("/vendors/register")}}">Become a Vendor</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    
    @include('inc.messages')
    @yield('content') 

    <!-- Footer -->
    <footer>
      <div class="container">
          <div class="row">
          <div class="col-md-4">
              <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
              <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                  <a href="#">
                  <i class="fab fa-twitter"></i>
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="#">
                  <i class="fab fa-facebook-f"></i>
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="#">
                  <i class="fab fa-instagram"></i>
                  </a>
              </li>
              </ul>
          </div>
          <div class="col-md-4">
              <ul class="list-inline quicklinks">
              @hasanyrole('super-admin|admin|vendor')
              <li class="list-inline-item">
                  <a href="{{url("/dashboard")}}">Dashboard</a>
              </li>
              @endrole
              <li class="list-inline-item">
                  <a href="{{url("/about")}}">About</a>
              </li>
              <li class="list-inline-item">
                  <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                  <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">
                  <a href="{{url("/contact")}}">Contact</a>
              </li>
              </ul>
          </div>
          </div>
      </div>
      </footer>

    <!-- Contact form JavaScript -->
    <script src="{{asset('app/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('app/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('app/agency.min.js')}}"></script>

  </body>
</html>