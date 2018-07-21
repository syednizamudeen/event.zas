@extends('layouts.home')
@section('content')
    <link rel="stylesheet" href="{{asset('css/hovereffect.css')}}" type="text/css">
    <section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-0">
                <div class="hovereffect">
                    <img class="img-fluid" src="{{asset('app/img/portfolio/01-thumbnail.jpg')}}" alt="">
                    <div class="overlay">
                        <h2>Threads</h2>
                        <p class="icon-links">
                            <a data-toggle="modal" href="#portfolioModal1"><i class="fa fa-link fa-2x"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-0">
                <div class="hovereffect">
                    <img class="img-fluid" src="{{asset('app/img/portfolio/02-thumbnail.jpg')}}" alt="">
                    <div class="overlay">
                        <h2>Explore</h2>
                        <p class="icon-links">
                            <a data-toggle="modal" href="#portfolioModal2"><i class="fa fa-link fa-2x"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-0">
                <div class="hovereffect">
                    <img class="img-fluid" src="{{asset('app/img/portfolio/03-thumbnail.jpg')}}" alt="">
                    <div class="overlay">
                        <h2>Finish</h2>
                        <p class="icon-links">
                            <a data-toggle="modal" href="#portfolioModal3"><i class="fa fa-link fa-2x"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        </p> 
                    </div>
                </div>
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-0">
                <div class="hovereffect">
                    <img class="img-fluid" src="{{asset('app/img/portfolio/04-thumbnail.jpg')}}" alt="">
                    <div class="overlay">
                        <h2>Lines</h2>
                        <p class="icon-links">
                            <a data-toggle="modal" href="#portfolioModal4"><i class="fa fa-link fa-2x"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-0">
                <div class="hovereffect">
                    <img class="img-fluid" src="{{asset('app/img/portfolio/05-thumbnail.jpg')}}" alt="">
                    <div class="overlay">
                        <h2>Southwest</h2>
                        <p class="icon-links">
                            <a data-toggle="modal" href="#portfolioModal5"><i class="fa fa-link fa-2x"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-0">
                <div class="hovereffect">
                    <img class="img-fluid" src="{{asset('app/img/portfolio/06-thumbnail.jpg')}}" alt="">
                    <div class="overlay">
                        <h2>Window</h2>
                        <p class="icon-links">
                            <a data-toggle="modal" href="#portfolioModal6"><i class="fa fa-link fa-2x"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        </p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>    

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
            <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/portfolio/01-full.jpg')}}" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
            <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/portfolio/02-full.jpg')}}" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
            <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/portfolio/03-full.jpg')}}" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
            <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/portfolio/04-full.jpg')}}" alt="">                  
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
            <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/portfolio/05-full.jpg')}}" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
            <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="{{asset('app/img/portfolio/06-full.jpg')}}" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection