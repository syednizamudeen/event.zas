@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="{{asset('main/css/awesome-boostrap-checkbox.css')}}">
<link rel="stylesheet" href="{{asset('vendor/jqueryui/themes/base/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('main/css/flatslider.css')}}">
<section class="section-padding pb-70 team-area">
    <div class="container-fluid">
        <!-- Section Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
                <div class="section-title text-center">
                    <h2>All Vendors</h2>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
                </div>
            </div>
        </div>
        <!-- //Section Title -->            
        <div class="row">
            <div class="col-lg-2">
                <h3 class="mt-2 text-warning">Categories</h3>
                <hr>
                <div class="m-2">
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="anniversary">
                        <label for="anniversary">
                            Anniversary
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="birthday">
                        <label for="birthday">
                            Birthday Party
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="event">
                        <label for="event">
                            Corporate Event
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="decoration">
                        <label for="decoration">
                            Decoration
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="invitation">
                        <label for="invitation">
                            Invitation Designer
                        </label>
                    </div>
                </div>
                <h3 class="mt-2 text-warning">Price</h3>
                <hr>
                <div class="m-2">                        
                    <div id="advance"></div>                        
                    Range: <span id="state"></span><br/><br/>
                    <div class="flat-slider" id="advance_slide"></div>
                </div>
                <h3 class="mt-2 text-warning">Country</h3>
                <hr>
                <div class="m-2">
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="malaysia">
                        <label for="malaysia">
                            Malaysia
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="singapore">
                        <label for="singapore">
                            Singapore
                        </label>
                    </div>
                </div>
                <h3 class="mt-2 text-warning">City</h3>
                <hr>
                <div class="m-2">
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="johor">
                        <label for="johor">
                            Johor
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="kualalumpur">
                        <label for="kualalumpur">
                            Kuala Lumpur
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="larkin">
                        <label for="larkin">
                            Larkin
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="singaporecity">
                        <label for="singaporecity">
                            Singapore
                        </label>
                    </div>
                </div>
                <h3 class="mt-2 text-warning">Rating</h3>
                <hr>
                <div class="m-2">
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="five">
                        <label for="five">
                            <i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i> 5.0
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="four">
                        <label for="four">
                                <i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="far fa-star fa-lg"></i> 4.0
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="three">
                        <label for="three">
                            <i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="far fa-star fa-lg"></i><i class="far fa-star fa-lg"></i> 3.0
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="low">
                        <label for="low">
                            Low
                        </label>
                    </div>
                </div>
                <h3 class="mt-2 text-warning">Subscription</h3>
                <hr>
                <div class="m-2">
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="paid">
                        <label for="paid">
                            EventZAS Pay
                        </label>
                        <!-- <p class="text-muted font-italic pb-2">We recommend only sponsored vendors.</p> -->
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="free">
                        <label for="free">
                            Trial
                        </label>
                        <!-- <p class="text-muted font-italic pb-2">Anonymous are Trial Account holders.</p> -->
                    </div>
                </div>
                <!-- <button class="button float-right mt-5">Apply Filter</button> -->
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <!-- Single Team -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-team">
                            <div class="team-thumb" style="background-image: url({{asset('main/images/img-1.jpg')}})">
                                <h6>
                                    <span class="badge badge-success float-right m-3">
                                        EventZAS Pay <span class="fa-stack">
                                        <i class="far fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-dollar-sign fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </span>
                                </h6>
                                <div class="team-social">
                                    <a target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Instagram"><i class="fab fa-instagram  fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>AL Mamun</h4>
                                <span class="clearfix">Wedding Organiser</span>
                                <span class="clearfix">Singapore</span>
                                <a href="#" class="text-warning"><i class="fas fa-comments fa-fw"></i>(0) reviews</a> | 
                                <a href="profile.html" class="text-success"><i class="fas fa-folder-open fa-fw"></i>Show Profile</a>
                                <button class="button"><i class="fas fa-dollar-sign fa-fw"></i>Ask for Quote</button>
                            </div>
                        </div>
                    </div>
                    <!-- // Single Team -->
                    <!-- Single Team -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-team">
                            <div class="team-thumb" style="background-image: url({{asset('main/images/img-1.jpg')}})">
                                <div class="team-social">
                                    <a target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Instagram"><i class="fab fa-instagram  fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>AL Mamun</h4>
                                <span class="clearfix">Wedding Organiser</span>
                                <span class="clearfix">Singapore</span>
                                <a href="#" class="text-warning"><i class="fas fa-comments fa-fw"></i>(0) reviews</a> | 
                                <a href="profile.html" class="text-success"><i class="fas fa-folder-open fa-fw"></i>Show Profile</a>
                                <button class="button"><i class="fas fa-dollar-sign fa-fw"></i>Ask for Quote</button>
                            </div>
                        </div>
                    </div>
                    <!-- // Single Team -->
                    <!-- Single Team -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-team">
                            <div class="team-thumb" style="background-image: url({{asset('main/images/img-1.jpg')}})">
                                <h6>
                                    <span class="badge badge-success float-right m-3">
                                        EventZAS Pay <span class="fa-stack">
                                        <i class="far fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-dollar-sign fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </span>
                                </h6>
                                <div class="team-social">
                                    <a target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Instagram"><i class="fab fa-instagram  fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>AL Mamun</h4>
                                <span class="clearfix">Wedding Organiser</span>
                                <span class="clearfix">Singapore</span>
                                <a href="#" class="text-warning"><i class="fas fa-comments fa-fw"></i>(0) reviews</a> | 
                                <a href="profile.html" class="text-success"><i class="fas fa-folder-open fa-fw"></i>Show Profile</a>
                                <button class="button"><i class="fas fa-dollar-sign fa-fw"></i>Ask for Quote</button>
                            </div>
                        </div>
                    </div>
                    <!-- // Single Team -->
                    <!-- Single Team -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-team">
                            <div class="team-thumb" style="background-image: url({{asset('main/images/img-1.jpg')}})">
                                <div class="team-social">
                                    <a target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Instagram"><i class="fab fa-instagram  fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>AL Mamun</h4>
                                <span class="clearfix">Wedding Organiser</span>
                                <span class="clearfix">Singapore</span>
                                <a href="#" class="text-warning"><i class="fas fa-comments fa-fw"></i>(0) reviews</a> | 
                                <a href="profile.html" class="text-success"><i class="fas fa-folder-open fa-fw"></i>Show Profile</a>
                                <button class="button"><i class="fas fa-dollar-sign fa-fw"></i>Ask for Quote</button>
                            </div>
                        </div>
                    </div>
                    <!-- // Single Team -->
                </div>
                <div class="row">
                    <!-- Single Team -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-team">
                            <div class="team-thumb" style="background-image: url({{asset('main/images/img-1.jpg')}})">
                                <div class="team-social">
                                    <a target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Instagram"><i class="fab fa-instagram  fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>AL Mamun</h4>
                                <span class="clearfix">Wedding Organiser</span>
                                <span class="clearfix">Singapore</span>
                                <a href="#" class="text-warning"><i class="fas fa-comments fa-fw"></i>(0) reviews</a> | 
                                <a href="profile.html" class="text-success"><i class="fas fa-folder-open fa-fw"></i>Show Profile</a>
                                <button class="button"><i class="fas fa-dollar-sign fa-fw"></i>Ask for Quote</button>
                            </div>
                        </div>
                    </div>
                    <!-- // Single Team -->
                    <!-- Single Team -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-team">
                            <div class="team-thumb" style="background-image: url({{asset('main/images/img-1.jpg')}})">
                                <div class="team-social">
                                    <a target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Instagram"><i class="fab fa-instagram  fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>AL Mamun</h4>
                                <span class="clearfix">Wedding Organiser</span>
                                <span class="clearfix">Singapore</span>
                                <a href="#" class="text-warning"><i class="fas fa-comments fa-fw"></i>(0) reviews</a> | 
                                <a href="profile.html" class="text-success"><i class="fas fa-folder-open fa-fw"></i>Show Profile</a>
                                <button class="button"><i class="fas fa-dollar-sign fa-fw"></i>Ask for Quote</button>
                            </div>
                        </div>
                    </div>
                    <!-- // Single Team -->
                    <!-- Single Team -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-team">
                            <div class="team-thumb" style="background-image: url({{asset('main/images/img-1.jpg')}})">
                                <div class="team-social">
                                    <a target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Instagram"><i class="fab fa-instagram  fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>AL Mamun</h4>
                                <span class="clearfix">Wedding Organiser</span>
                                <span class="clearfix">Singapore</span>
                                <a href="#" class="text-warning"><i class="fas fa-comments fa-fw"></i>(0) reviews</a> | 
                                <a href="profile.html" class="text-success"><i class="fas fa-folder-open fa-fw"></i>Show Profile</a>
                                <button class="button"><i class="fas fa-dollar-sign fa-fw"></i>Ask for Quote</button>
                            </div>
                        </div>
                    </div>
                    <!-- // Single Team -->
                    <!-- Single Team -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-team">
                            <div class="team-thumb" style="background-image: url({{asset('main/images/img-1.jpg')}})">
                                <div class="team-social">
                                    <a target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
                                    <a target="_blank" href="#" title="Instagram"><i class="fab fa-instagram  fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>AL Mamun</h4>
                                <span class="clearfix">Wedding Organiser</span>
                                <span class="clearfix">Singapore</span>
                                <a href="#" class="text-warning"><i class="fas fa-comments fa-fw"></i>(0) reviews</a> | 
                                <a href="profile.html" class="text-success"><i class="fas fa-folder-open fa-fw"></i>Show Profile</a>
                                <button class="button"><i class="fas fa-dollar-sign fa-fw"></i>Ask for Quote</button>
                            </div>
                        </div>
                    </div>
                    <!-- // Single Team -->
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('vendor/jqueryui/jquery-ui.min.js')}}"></script>
<script>
jQuery(document).ready(function(){

    var getOutput    = $("#state");
    var getSlider = $("#advance_slide");

    getSlider.slider({
    range:true,
    min:1000,
    max:10000,
    values:[3300, 6500],
    step:50,
    slide:function(event, ui){
        getOutput.html( ui.values[0]+' - '+ui.values[1]+' $');
    }
    });
    getOutput.html(getSlider.slider("values",0)+' - '+getSlider.slider("values",1)+" $");

});
</script>
@endsection
