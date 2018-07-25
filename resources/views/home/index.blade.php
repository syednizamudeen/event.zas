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
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="form-group">
                        {{Form::select('services',$services, '',['class'=>'form-control form-control-lg select2','id'=>'exampleFormControlSelect1','style'=>'width:100%'])}}
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="form-group">
                        {{Form::select('countries',$countries, '',['class'=>'form-control form-control-lg select2','id'=>'exampleFormControlSelect3','style'=>'width:100%'])}}
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="form-group">
                        {{Form::select('cities',$cities, '',['class'=>'form-control form-control-lg select2','id'=>'exampleFormControlSelect2','style'=>'width:100%'])}}
                    </div>
                </div>                
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <a class="btn btn-primary btn-block btn-lg text-uppercase js-scroll-trigger" href="#">Search</a>                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"><a href="#" class="btn btn-outline-warning">Advanced Search <i class="fas fa-search-plus"></i></a></div>
            </div>
        </div>
    </div>
    </header>
    <!-- Clients -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <a href="#">
                                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/envato.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <a href="#">
                                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/designmodo.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <a href="#">
                                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/themeforest.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <a href="#">
                                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/creative-market.jpg')}}" alt="">
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <a href="#">
                                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/envato.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <a href="#">
                                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/designmodo.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <a href="#">
                                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/themeforest.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <a href="#">
                                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/logos/creative-market.jpg')}}" alt="">
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <!-- Services -->
    <section id="services" class="py-5">
    <div class="container">
        <!--<div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>     
        </div>
        </div>-->
        <div class="row text-center">
        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Search Vendor</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Recommended Ideas</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Event Inspirations</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-user fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">About</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        </div>
    </div>
    </section>    
    <script src="{{asset('vendor/select2/dist/js/select2.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2({
                placeholder: "Select",
            });
        });
    </script>
@endsection