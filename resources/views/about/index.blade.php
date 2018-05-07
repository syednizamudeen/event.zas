@extends('layouts.home')
@section('content')

<style>
.pricing-table{
  background-color: #eee;
  font-family: 'Montserrat', sans-serif;
}

.pricing-table .block-heading {
  padding-top: 50px;
  margin-bottom: 40px;
  text-align: center; 
}

.pricing-table .block-heading h2 {
  color: #fed136;
}

.pricing-table .block-heading p {
  text-align: center;
  max-width: 420px;
  margin: auto;
  opacity: 0.7; 
}

.pricing-table .heading {
  text-align: center;
  padding-bottom: 10px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1); 
}

.pricing-table .item {
  background-color: #ffffff;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
  border-top: 2px solid #fed136;
  padding: 30px;
  overflow: hidden;
  position: relative; 
}

.pricing-table .col-md-5:not(:last-child) .item {
  margin-bottom: 30px; 
}

.pricing-table .item button {
  font-weight: 600; 
}

.pricing-table .ribbon {
  width: 160px;
  height: 32px;
  font-size: 12px;
  text-align: center;
  color: #fff;
  font-weight: bold;
  box-shadow: 0px 2px 3px rgba(136, 136, 136, 0.25);
  background: #4dbe3b;
  transform: rotate(45deg);
  position: absolute;
  right: -42px;
  top: 20px;
  padding-top: 7px; 
}

.pricing-table .item p {
  text-align: center;
  margin-top: 20px;
  opacity: 0.7; 
}

.pricing-table .features .feature {
  font-weight: 600; }

.pricing-table .features h4 {
  text-align: center;
  font-size: 18px;
  padding: 5px; 
}

.pricing-table .price h4 {
  margin: 15px 0;
  font-size: 45px;
  text-align: center;
  color: #fed136; 
}

.pricing-table .buy-now button {
  text-align: center;
  margin: auto;
  font-weight: 600;
  padding: 9px 0; 
}
</style>

<!-- About -->
<section id="about">
<div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">About</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
        <ul class="timeline">
        <li>
            <div class="timeline-image">
            <img class="rounded-circle img-fluid" src="{{asset('app/img/about/1.jpg')}}" alt="">   
            </div>
            <div class="timeline-panel">
            <div class="timeline-heading">
                <h4>2009-2011</h4>
                <h4 class="subheading">Our Humble Beginnings</h4>
            </div>
            <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-image">
            <img class="rounded-circle img-fluid" src="{{asset('app/img/about/2.jpg')}}" alt="">
            </div>
            <div class="timeline-panel">
            <div class="timeline-heading">
                <h4>March 2011</h4>
                <h4 class="subheading">An Agency is Born</h4>
            </div>
            <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div>
            </div>
        </li>
        <li>
            <div class="timeline-image">
            <img class="rounded-circle img-fluid" src="{{asset('app/img/about/3.jpg')}}" alt="">
            </div>
            <div class="timeline-panel">
            <div class="timeline-heading">
                <h4>December 2012</h4>
                <h4 class="subheading">Transition to Full Service</h4>
            </div>
            <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-image">
            <img class="rounded-circle img-fluid" src="{{asset('app/img/about/4.jpg')}}" alt="">
            </div>
            <div class="timeline-panel">
            <div class="timeline-heading">
                <h4>July 2014</h4>
                <h4 class="subheading">Phase Two Expansion</h4>
            </div>
            <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-image">
            <h4>Be Part
                <br>Of Our
                <br>Story!</h4>
            </div>
        </li>
        </ul>
    </div>
    </div>
</div>
</section>

<section class="pricing-table">
    <div class="container">
        <div class="block-heading">
            <h2>Pricing Table</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-5 col-lg-4">
                <div class="item">
                    <div class="heading">
                        <h3>BASIC</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="features">
                        <h4><span class="feature">Full Support</span> : <span class="value">No</span></h4>
                        <h4><span class="feature">Duration</span> : <span class="value">30 Days</span></h4>
                        <h4><span class="feature">Storage</span> : <span class="value">10GB</span></h4>
                    </div>
                    <div class="price">
                        <h4>$25</h4>
                    </div>
                    <button class="btn btn-block btn-default" type="submit">BUY NOW</button>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="item">
                    <div class="ribbon">Best Value</div>
                    <div class="heading">
                        <h3>PRO</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="features">
                        <h4><span class="feature">Full Support</span> : <span class="value">Yes</span></h4>
                        <h4><span class="feature">Duration</span> : <span class="value">60 Days</span></h4>
                        <h4><span class="feature">Storage</span> : <span class="value">50GB</span></h4>
                    </div>
                    <div class="price">
                        <h4>$50</h4>
                    </div>
                    <button class="btn btn-block btn-primary" type="submit">BUY NOW</button>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="item">
                    <div class="heading">
                        <h3>PREMIUM</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="features">
                        <h4><span class="feature">Full Support</span> : <span class="value">Yes</span></h4>
                        <h4><span class="feature">Duration</span> : <span class="value">120 Days</span></h4>
                        <h4><span class="feature">Storage</span> : <span class="value">150GB</span></h4>
                    </div>
                    <div class="price">
                        <h4>$150</h4>
                    </div>
                    <button class="btn btn-block btn-outline-success" type="submit">BUY NOW</button>
                </div>
            </div>
        </div>
    </div>
</section>
      
@endsection