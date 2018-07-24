<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{config('app.name','EventZas')}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('vendor/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('vendor/components/font-awesome/css/fontawesome-all.css')}}" type="text/css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/backend.css')}}">
  <link rel="stylesheet" href="{{asset('css/skin-yellow-light.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- jQuery -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-yellow-light layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{url("/dashboard")}}" class="navbar-brand"><b>Event</b>ZAS</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
            <li><a href="{{url("/dashboard")}}">Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{url("/services")}}">Service</a></li>
                <li><a href="{{url("/subscriptions")}}">Subscription</a></li>
                <li><a href="{{url("/plans")}}">Plan</a></li>
                <li><a href="{{url("/countries")}}">Country</a></li>
                @role('super-admin')
                <li class="divider"></li>
                <li><a href="{{url("/users")}}">Users</a></li>
                <li><a href="{{url("/roles")}}">Roles</a></li>
                <li><a href="{{url("/permissions")}}">Permissions</a></li>
                @endrole
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li><a href="{{url("/home")}}" target="_blank">Visit Site<i class="fas fa-external-link-square-alt fa-lg fa-fw"></i></a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <div class="collapse navbar-collapse pull-right">
          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
              @else
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                      <!-- Menu Toggle Button -->
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{asset('img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                          <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        
                          <p>
                              {{ Auth::user()->name }}
                            <small>Member since {{ Auth::user()->created_at }}</small>
                          </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                          <div class="row">
                            <div class="col-xs-4 text-center">
                              <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                              <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                              <a href="#">Friends</a>
                            </div>
                          </div>
                          <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                          <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                          </div>
                          <div class="pull-right">
                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                          </div>
                        </li>
                      </ul>
                    </li>
              @endif
          </ul>
        </div>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
    <!--
      <section class="content-header">
        <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section>
    -->
      <!-- Main content -->
      <section class="content">
          @include('inc.messages')
          @yield('content')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2017-2018 <a href="#">Mazin Softwares</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- SlimScroll -->
<script src="{{asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- Backend App -->
<script src="{{asset('js/backend.js')}}"></script>
</body>
</html>
