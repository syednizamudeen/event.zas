@extends('layouts.home')
@section('content')
    <!-- Header -->
    <header class="masthead">
    <div class="container">
        <div class="intro-text">
        <div class="intro-lead-in">Welcome To Our {{$title}} Studio!</div>
        <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{url("/vendors/register")}}">Become a Vendor</a>
        </div>
    </div>
    </header>

    <!-- Services -->
    <section id="services">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>     
        </div>
        </div>
        <div class="row text-center">
        <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">E-Commerce</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Responsive Design</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Web Security</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        </div>
    </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
    <div class="container">
        <div class="row">
        <div class="col-md-3 col-sm-6">
            <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/envato.jpg')}}" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/designmodo.jpg')}}" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/themeforest.jpg')}}" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/creative-market.jpg')}}" alt="">
            </a>
        </div>
        </div>
    </div>
    </section>     

@endsection