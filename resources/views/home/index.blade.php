@extends('layouts.main')
@section('content')
    <!-- ====== Hero Area ====== -->
    <div class="hero-aria" id="home">
        <!-- Hero Area Content -->
        <div class="container">
            <div class="hero-content h-100">
                <div class="d-table">
                    <div class="d-table-cell">
                        <h2 class="text-uppercase">Plan My</h2>
                        <h3 class="text-uppercase"><span class="typed"></span></h3>
                        <!--<p>Make designed by as Begindot.</p>
                        <a href="#about" class="button smooth-scroll">Learn More</a>-->
                        <div class="homepage-form my-4">
                        <form action="" method="post" class="d-block d-flex">
                            <div class="fields d-block d-flex">
                            <div class="textfield-search one-third">
                                <input type="text" class="form-control" placeholder="Ex: event">
                            </div>
                            <div class="select-wrap one-third">
                                <div class="icon"><i class="fas fa-chevron-down fa-lg"></i></div>
                                <select name="" id="" class="form-control" placeholder="Keyword search">
                                <option value="">Where</option>
                                <option value="">San Francisco USA</option>
                                <option value="">Berlin Germany</option>
                                <option value="">Lodon United Kingdom</option>
                                <option value="">Paris Italy</option>
                                </select>
                            </div>
                            </div>
                            <input type="submit" class="search-submit btn" value="Search">  
                        </form>
                        </div>
                        <a href="filter.html" class="text-muted smooth-scroll"><i class="fas fa-search fa-lg fa-fw"></i>More Search Options</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Hero Area Content -->
        <!-- Hero Area Slider -->
        <div class="hero-area-slids owl-carousel">
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(main/images/img-1.jpg)"></div>
                <!-- // Single Background -->
            </div>
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(main/images/img-2.jpg)"></div>
                <!-- // Single Background -->
            </div>
        </div>
        <!-- // Hero Area Slider -->
    </div>
    <!-- ====== //Hero Area ====== -->

    <!-- ====== Featured Area ====== -->
    <section id="featured" class="section-padding pb-70">


        <div class="container">
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="4000">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <div class="carousel-item col-md-3 active">
                        <img class="img-fluid mx-auto d-block" src="http://placehold.it/350x150/000/fff?text=1" alt="slide 1">
                    </div>
                    <div class="carousel-item col-md-3">
                        <img class="img-fluid mx-auto d-block" src="http://placehold.it/350x150?text=2" alt="slide 2">
                    </div>
                    <div class="carousel-item col-md-3">
                        <img class="img-fluid mx-auto d-block" src="http://placehold.it/350x150?text=3" alt="slide 3">
                    </div>
                    <div class="carousel-item col-md-3">
                        <img class="img-fluid mx-auto d-block" src="http://placehold.it/350x150?text=4" alt="slide 4">
                    </div>
                    <div class="carousel-item col-md-3">
                        <img class="img-fluid mx-auto d-block" src="http://placehold.it/350x150?text=5" alt="slide 5">
                    </div>
                    <div class="carousel-item col-md-3">
                        <img class="img-fluid mx-auto d-block" src="http://placehold.it/350x150?text=6" alt="slide 6">
                    </div>
                    <div class="carousel-item col-md-3">
                        <img class="img-fluid mx-auto d-block" src="http://placehold.it/350x150?text=7" alt="slide 7">
                    </div>
                    <div class="carousel-item col-md-3">
                        <img class="img-fluid mx-auto d-block" src="http://placehold.it/350x150?text=8" alt="slide 7">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left fa-lg text-muted"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                    <i class="fa fa-chevron-right fa-lg text-muted"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <!--<div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured-item-wrap">
                        <h3><a href="#">Event Organiser</a></h3>
                        <div class="single-featured-item">
                            <div class="featured-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, voluptatibus, sunt. Recusandae ab aliquid voluptate exercitationem dicta ipsa, odio cumque sapiente quaerat nisi ad rem dolor iusto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured-item-wrap">
                        <h3><a href="#">Wedding Planner</a></h3>
                        <div class="single-featured-item">
                            <div class="featured-icon">
                                <i class="fas fa-american-sign-language-interpreting"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, voluptatibus, sunt. Recusandae ab aliquid voluptate exercitationem dicta ipsa, odio cumque sapiente quaerat nisi ad rem dolor iusto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured-item-wrap">
                        <h3><a href="#">Event Advertisement</a></h3>
                        <div class="single-featured-item">
                            <div class="featured-icon">
                                <i class="fab fa-adversal"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, voluptatibus, sunt. Recusandae ab aliquid voluptate exercitationem dicta ipsa, odio cumque sapiente quaerat nisi ad rem dolor iusto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </section>
    <!-- ====== //Featured Area ====== -->

    <!-- ====== About Area ====== -->
    @include('about.partials.about')
    <!-- ====== // About Area ====== -->


    <!-- ====== Fact Counter Section ====== -->
    <!-- ====================================================================
            NOTE: You need to change  'data-count="10"' and 'p' Eliments 
        ===================================================================== -->
    {{-- <section class="section-padding pb-70 bg-img fact-counter" id="counter" style="background-image: url(main/images/img-1.jpg)">
        <div class="container">
            <div class="row">
                <!-- Single Fact Counter -->
                <div class="col-lg-3 co col-md-6 l-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="08">0</span>+</h2>
                        <p>Years Experience</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="600">0</span>+</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="09">0</span>+</h2>
                        <p>Awards Win</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="451">0</span>+</h2>
                        <p>Cups of Coffee</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
            </div>
        </div>
    </section> --}}
    <!-- ====== //Fact Counter Section ====== -->

    <!-- ====== Service Section ====== -->
    {{-- <section id="service" class="section-padding pb-70 service-area bg-light">
        <div class="container-fluid">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Service</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <div class="row">
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h2>Event Organiser</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente minima repudiandae amet, accusamus ea impedit aperiam consectetur libero. Deleniti id sit minima.</p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fas fa-american-sign-language-interpreting"></i>
                        </div>
                        <h2>Wedding Planner</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente minima repudiandae amet, accusamus ea impedit aperiam consectetur libero. Deleniti id sit minima.</p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fab fa-adversal"></i>
                        </div>
                        <h2>Event Advertisement</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente minima repudiandae amet, accusamus ea impedit aperiam consectetur libero. Deleniti id sit minima.</p>
                    </div>
                </div>
                <!-- //Single Service -->
            </div>

        </div>
    </section> --}}
    <!-- ====== //Service Section ====== -->

    <!-- ====== Why choose Me Section ====== -->
    {{-- <section id="" class="section-padding why-choose-us pb-70">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Why choose Me</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-left">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-clock"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Completed on right time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-right">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-calendar-check"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Completed on right time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-left">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-history"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Completed on right time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-right">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-phone-volume"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Completed on right time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->
            </div>
        </div>
    </section> --}}
    <!-- ====== //Why choose Me Section ====== -->

    <!-- ====== Portfolio Section ====== -->
    <section id="portfolio" class="section-padding pb-85 portfolio-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Recommended Ideas</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row justify-content-center">
                <!-- Work List Menu-->
                <div class="col-lg-8">
                    <div class="work-list text-center">
                        <ul>
                            <li class="filter" class="active" data-filter="all">ALL</li>
                            <li class="filter" data-filter=".web">Web Design</li>
                            <li class="filter" data-filter=".graphic">Graphic</li>
                            <li class="filter" data-filter=".logo">Logo</li>
                            <li class="filter" data-filter=".wp">Wordpress</li>
                            <li class="filter" data-filter=".other">Other</li>
                        </ul>
                    </div>
                </div>
                <!-- // Work List Menu -->
            </div>
            <div class="row portfolio">
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix wp graphic">
                    <div class="single-portfolio" style="background-image: url(main/images/img-1.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="main/images/img-1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo web graphic other wp">
                    <div class="single-portfolio" style="background-image: url(main/images/img-1.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="main/images/img-1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix wp other">
                    <div class="single-portfolio" style="background-image: url(main/images/img-1.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="main/images/img-1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo other graphic wp web">
                    <div class="single-portfolio" style="background-image: url(main/images/img-1.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="main/images/img-1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo other wp graphic web">
                    <div class="single-portfolio" style="background-image: url(main/images/img-1.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="main/images/img-1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix wp logo graphic web">
                    <div class="single-portfolio" style="background-image: url(main/images/img-1.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="main/images/img-1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover other">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix web wp">
                    <div class="single-portfolio" style="background-image: url(main/images/img-1.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="main/images/img-1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo graphic wp web">
                    <div class="single-portfolio" style="background-image: url(main/images/img-1.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="main/images/img-1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix other logo web">
                    <div class="single-portfolio" style="background-image: url(main/images/img-1.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="main/images/img-1.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
            </div>
        </div>
    </section>
    <!-- ====== // Portfolio Section ====== -->

    <!-- ====== Frequently asked questions ====== -->
    <section id="faq" class="section-padding faq-area bg-secondary">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center faq-title">
                        <h2>Frequently asked questions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-bg bg-img" style="background-image: url(main/images/img-1.jpg)"></div>
                </div>
                <div class="col-lg-7">
                    <!-- FAQ Content -->
                    <div class="faq-content" id="accordion">

                        <!-- Single FAQ -->
                        <div class="single-faq">

                            <!-- FAQ Header -->
                            <h4 class="collapsed" data-toggle="collapse" data-target="#faq-1">Collapsible Group Item One</h4>
                            <!-- // FAQ Header -->

                            <!-- FAQ Content -->
                            <div id="faq-1" class="collapse show" data-parent="#accordion">
                                <div class="faq-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos, similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!
                                </div>
                            </div>
                            <!-- FAQ Content -->
                        </div>
                        <!-- // Single FAQ -->

                        <!-- Single FAQ -->
                        <div class="single-faq">

                            <!-- FAQ Header -->
                            <h4 class="collapsed" data-toggle="collapse" data-target="#faq-2">Lorem ipsum dolor sit amet Two</h4>
                            <!-- // FAQ Header -->

                            <!-- FAQ Content -->
                            <div id="faq-2" class="collapse" data-parent="#accordion">
                                <div class="faq-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos, similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!
                                </div>
                            </div>
                            <!-- FAQ Content -->
                        </div>
                        <!-- // Single FAQ -->

                        <!-- Single FAQ -->
                        <div class="single-faq">

                            <!-- FAQ Header -->
                            <h4 class="collapsed" data-toggle="collapse" data-target="#faq-3">Collapsible Group Item Three</h4>
                            <!-- // FAQ Header -->

                            <!-- FAQ Content -->
                            <div id="faq-3" class="collapse" data-parent="#accordion">
                                <div class="faq-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos, similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!
                                </div>
                            </div>
                            <!-- FAQ Content -->
                        </div>
                        <!-- // Single FAQ -->

                    </div>
                    <!-- FAQ Content -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-right cta-button">
                <a href="{{url("/faq")}}" class="button">Show All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // Frequently asked questions ====== -->

    <!-- ====== Blog Section ====== -->
    <section id="blog" class="section-padding pb-70 blog-section bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Blog Area</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <!-- Single Blog -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb" style="background-image: url(main/images/img-1.jpg)"></div>
                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                        <a href="single-blog.html" class="button">Read More</a>
                    </div>
                </div>
                <!-- Single Blog -->
                <!-- Single Blog -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb" style="background-image: url(main/images/img-1.jpg)"></div>
                        <h4 class="blog-title"><a href="single-blog.html">Lifetime free Update</a></h4>
                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                        <a href="single-blog.html" class="button">Read More</a>
                    </div>
                </div>
                <!-- Single Blog -->
                <!-- Single Blog -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb" style="background-image: url(main/images/img-1.jpg)"></div>
                        <h4 class="blog-title"><a href="single-blog.html">Unlimited Support</a></h4>
                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                        <a href="single-blog.html" class="button">Read More</a>
                    </div>
                </div>
                <!-- Single Blog -->
            </div>
            <div class="row">
                <div class="col-lg-12 text-center cta-button">
                    <a href="{{url("/blog")}}" class="button">Show All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // Blog Section ====== -->


    <!-- ====== Testimonial Section ====== -->
    {{-- <section id="testimonial" class="section-padding bg-secondary testimonial-area">
        <div class="container bg-white">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Testimonial</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonials owl-carousel" data-ride="carousel">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nam suscipit similique quod eaque adipisci modi recusandae nesciunt veniam, ut, rem eligendi minima et, accusantium?</p>
                            <h4>Aseven M <span>CEO - aseven.info</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nam suscipit similique quod eaque adipisci modi recusandae nesciunt veniam, ut, rem eligendi minima et, accusantium?</p>
                            <h4>Aseven M <span>CEO - aseven.info</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nam suscipit similique quod eaque adipisci modi recusandae nesciunt veniam, ut, rem eligendi minima et, accusantium?</p>
                            <h4>Aseven M <span>CEO - aseven.info</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ====== // Testimonial Section ====== -->

    <!-- ====== Team Section ====== -->
    {{-- <section class="section-padding pb-70 team-area">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <!-- Single Team -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb" style="background-image: url(main/images/img-1.jpg)">
                            <div class="team-social">
                                <a target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a target="_blank" href="#" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
                                <a target="_blank" href="#" title="Instagram"><i class="fab fa-instagram  fa-lg"></i></a>
                                <a target="_blank" href="#" title="View Profile"><i class="fas fa-folder-open fa-lg"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span class="clearfix">Wedding Organiser</span>
                            <span class="clearfix">Singapore</span>
                            <a href="#" class="text-danger"><i class="fas fa-comments fa-fw"></i>(0) reviews</a>
                            <button class="button"><i class="fas fa-dollar-sign fa-fw"></i>Ask for Quote</button>
                        </div>
                    </div>
                </div>
                <!-- // Single Team -->
                <!-- Single Team -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb" style="background-image: url(main/images/img-1.jpg)">
                            <div class="team-social">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span>Singapore</span>
                        </div>
                    </div>
                </div>
                <!-- // Single Team -->
                <!-- Single Team -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb" style="background-image: url(main/images/img-1.jpg)">
                            <div class="team-social">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span>Singapore</span>
                        </div>
                    </div>
                </div>
                <!-- // Single Team -->
                <!-- Single Team -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb" style="background-image: url(main/images/img-1.jpg)">
                            <div class="team-social">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span>Singapore</span>
                        </div>
                    </div>
                </div>
                <!-- // Single Team -->
            </div>
        </div>
    </section> --}}
    <!-- ====== // Team Section ====== -->


    <!-- ====== Call to Action Area ====== -->
    {{-- <section class="section-padding call-to-action-aria bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugit optio voluptatem modi, nemo, cupiditate vel, aspernatur, quae consequatur officia unde totam.</p>
                </div>
                <div class="col-lg-3">
                    <div class="cta-button">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="#" class="button">Contact me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ====== // Call to Action Area ====== -->


    <!-- ====== Pricing Area ====== -->
    {{-- <section class="section-padding pb-70 pricing-area">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Pricing Area</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <!-- Single Price Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Basic</h2>
                            <h3>$99<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div>
                <!-- // Single Price Box -->
                <!-- Single Price Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Premium</h2>
                            <h3>$119<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div>
                <!-- // Single Price Box -->
                <!-- Single Price Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Enterprise</h2>
                            <h3>$559<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div>
                <!-- // Single Price Box -->
                <!-- Single Price Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Business</h2>
                            <h3>$999<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div>
                <!-- // Single Price Box -->
            </div>
        </div>
    </section> --}}
    <!-- ====== // Pricing Area ====== -->


    <!-- ====== Contact Area ====== -->
    <section id="contact" class="section-padding contact-section bg-secondary">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Contact Me</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form -->
                    <form id="contact-form" action="mail.php" method="post" class="contact-form bg-white">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Name">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="email" required placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" required placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="" class="form-control" required placeholder="Message"></textarea>
                        </div>
                        <div class="form-btn text-center">
                            <button class="button" type="submit">Send Message</button>
                            <p class="form-message"></p>
                        </div>
                    </form>
                    <!-- // Form -->
                </div>
            </div>
            <!-- // Contact Form -->
        </div>
    </section>
    <!-- ====== // Contact Area ====== --> 
    <script>
        $(document).ready(function () {
            /*==========================
                Hero Area Slider
            ============================*/

            $('.hero-area-slids').owlCarousel({
                items: 1,
                loop: true,
                nav: false,
                doots: false,
                autoplay: true,
                animateOut: 'fadeOutRight',
                animateIn: 'fadeIn'

            });
            //Wow Animation
            new WOW().init();
            /*==========================
                Hero Title typer
            ============================*/
            var element = $('.typed');

            $(function () {
                element.typed({
                    strings: ["Corporate Event", "Product Launch", "Birthday Party"],
                    typeSpeed: 100,
                    loop: true,
                    autoplay: true,
                });
            });

            /*::::::::::::::::::::::::::::::::::::
            Portfolio Section
            ::::::::::::::::::::::::::::::::::::*/

            lightbox.option({
                'imageFadeDuration': 800,
                'resizeDuration': 500,
                'wrapAround': true
            });

            $('.portfolio-area').mixItUp();


            /*::::::::::::::::::::::::::::::::::::
            Testimonial Section
            ::::::::::::::::::::::::::::::::::::*/

            $('.testimonials').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                dots: false
            });


            /*::::::::::::::::::::::::::::::::::::
            Contact Area 
            ::::::::::::::::::::::::::::::::::::*/
            var form = $('#contact-form');

            var formMessages = $('.form-message');
            $(form).submit(function (e) {
                e.preventDefault();
                var formData = $(form).serialize();
                $.ajax({
                        type: 'POST',
                        url: $(form).attr('action'),
                        data: formData
                    })
                    .done(function (response) {
                        $(formMessages).removeClass('error');
                        $(formMessages).addClass('success');
                        $(formMessages).text(response);

                        $('#contact-form input,#contact-form textarea').val('');
                    })
                    .fail(function (data) {
                        $(formMessages).removeClass('success');
                        $(formMessages).addClass('error');

                        if (data.responseText !== '') {
                            $(formMessages).text(data.responseText);
                        } else {
                            $(formMessages).text('Oops! An error occured and your message could not be sent.');
                        }
                    });
            });
            
            $('#carouselExample').on('slide.bs.carousel', function (e) {
                var $e = $(e.relatedTarget);
                var idx = $e.index();
                var itemsPerSlide = 4;
                var totalItems = $('.carousel-item').length;

                if (idx >= totalItems-(itemsPerSlide-1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i=0; i<it; i++) {
                        // append slides to end
                        if (e.direction=="left") {
                            $('.carousel-item').eq(i).appendTo('.carousel-inner');
                        }
                        else {
                            $('.carousel-item').eq(0).appendTo('.carousel-inner');
                        }
                    }
                }
            });
        });
    </script>
@endsection