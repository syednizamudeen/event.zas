@extends('layouts.home')
@section('content')
    <style>
        .select2-container--default .select2-selection--single {
            height: 46px !important;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.33;
            border-radius: 6px;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            top: 85% !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 26px !important;
        }
        .select2-container--default .select2-selection--single {
            border: 1px solid #CCC !important;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        }
    </style>
    <link rel="stylesheet" href="{{asset('vendor/select2/dist/css/select2.css')}}">
    <!-- Header -->
    <header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To Our {{$title}} Studio!</div>
            <!--<div class="intro-heading text-uppercase">It's Nice To Meet You</div>-->            
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <select class="form-control form-control-lg select2" id="exampleFormControlSelect1">
                            <option>Category</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <select class="form-control form-control-lg select2" id="exampleFormControlSelect2">
                            <option>City</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <select class="form-control form-control-lg select2" id="exampleFormControlSelect3">
                            <option>Country</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <a class="btn btn-primary btn-block btn-lg text-uppercase js-scroll-trigger" href="#">Search</a>
                </div>
            </div>
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
    <script src="{{asset('vendor/select2/dist/js/select2.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endsection