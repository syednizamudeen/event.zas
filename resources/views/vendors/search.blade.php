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
                    <h2>{{ $title }}</h2>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
                </div>
            </div>
        </div>
        <!-- //Section Title -->            
        <div class="row">
            <div class="col-lg-2">
            {!! Form::open(['method' => 'POST', 'name' => 'vendorfacet']) !!}
                <h3 class="mt-2 text-warning">Categories</h3>
                <hr>
                <div class="m-2">
                    @foreach($services as $service)
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="service_{{$service->id}}" name="{{$service->name}}" value="{{$service->name}}">
                        <label for="service_{{$service->id}}">
                            {{$service->name}}
                        </label>
                    </div>
                    @endforeach
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
                    @foreach($countries as $country)
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="country_{{$country->id}}" name="{{$country->name}}">
                        <label for="country_{{$country->id}}">
                            {{$country->name}}
                        </label>
                    </div>
                    @endforeach
                </div>
                <h3 class="mt-2 text-warning">City</h3>
                <hr>
                <div class="m-2">
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="johor" name="johor">
                        <label for="johor">
                            Johor
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="kualalumpur" name="kualalumpur">
                        <label for="kualalumpur">
                            Kuala Lumpur
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="larkin" name="larkin">
                        <label for="larkin">
                            Larkin
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="singaporecity" name="singaporecity">
                        <label for="singaporecity">
                            Singapore
                        </label>
                    </div>
                </div>
                <h3 class="mt-2 text-warning">Rating</h3>
                <hr>
                <div class="m-2">
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="five" name="five">
                        <label for="five">
                            <i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i> 5.0
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="four" name="four">
                        <label for="four">
                                <i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="far fa-star fa-lg"></i> 4.0
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="three" name="three">
                        <label for="three">
                            <i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="fas fa-star fa-lg"></i><i class="far fa-star fa-lg"></i><i class="far fa-star fa-lg"></i> 3.0
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="low" name="low">
                        <label for="low">
                            Low
                        </label>
                    </div>
                </div>
                <h3 class="mt-2 text-warning">Subscription</h3>
                <hr>
                <div class="m-2">
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="paid" name="subscription" value="paid">
                        <label for="paid">
                            EventZAS Pay
                        </label>
                        <!-- <p class="text-muted font-italic pb-2">We recommend only sponsored vendors.</p> -->
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input type="checkbox" id="free" name="subscription" value="free">
                        <label for="free">
                            Trial
                        </label>
                        <!-- <p class="text-muted font-italic pb-2">Anonymous are Trial Account holders.</p> -->
                    </div>
                </div>
                <!-- <button class="button float-right mt-5">Apply Filter</button> -->
            {!! Form::close() !!}
            </div>
            <div class="col-lg-10" id="live_container">
                @include('vendors.partials.live')
            </div>
        </div>
    </div>
</section>
<script src="{{asset('vendor/jqueryui/jquery-ui.min.js')}}"></script>
<script>
$(window).on('hashchange', function() {
    if (window.location.hash) {
        var page = window.location.hash.replace('#', '');
        if (page == Number.NaN || page <= 0) {
            return false;
        }else{
            getData(page);
        }
    }
});
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var getOutput = $("#state");
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
    getSlider.on("slidestop", function(event, ui){
        console.log("Slider stopped; initiate live search..."+ui.values[0]+' - '+ui.values[1]);
    });
    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        $('li').removeClass('active');
        $(this).parent('li').addClass('active');
        var myurl = $(this).attr('href');
        var page=$(this).attr('href').split('page=')[1];
        getData(page);
    });
    $("form[name='vendorfacet'] :input").change(function() {
        console.log("facet changed; initiate live search...");
        console.log($("form[name='vendorfacet']").serializeArray());
    });
});
function getData(page) {
    $.ajax(
    {
        url: '?page=' + page,
        type: "get",
        datatype: "html"
    })
    .done(function(data)
    {
        $("#live_container").empty().html(data);
        location.hash = page;
    })
    .fail(function(jqXHR, ajaxOptions, thrownError)
    {
        alert('No response from server');

    });
}
</script>
@endsection
