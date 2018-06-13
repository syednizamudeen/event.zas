@extends('layouts.home')

@section('content')
<style>
    .pricing-table{
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
<link rel="stylesheet" href="{{asset('vendor/select2/dist/css/select2.css')}}">
<link rel="stylesheet" href="{{asset('vendor/bootstrap-fileinput/css/fileinput.css')}}">
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5">Vendor Registration</h2>
                <ul class="nav nav-tabs" role="tablist">
    
                    <li role="presentation" class="nav-item disabled">
                        <a href="#step1" class="nav-link active" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                Login Details
                            </a>
                    </li>
    
                    <li role="presentation" class="nav-item disabled">
                        <a href="#step2" class="nav-link" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                Company Info
                            </a>
                    </li>
                    <li role="presentation" class="nav-item disabled">
                        <a href="#step3" class="nav-link disable" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                Social Connection
                            </a>
                    </li>    
                    <li role="presentation" class="nav-item disabled">
                        <a href="#step4" class="nav-link disable" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                                Subscription
                            </a>
                    </li>
                    <li role="presentation" class="nav-item disabled">
                        <a href="#step5" class="nav-link disable" data-toggle="tab" aria-controls="step5" role="tab" title="Step 5">
                                Add On
                            </a>
                    </li>
                </ul>
    
                <form class="form" role="form" autocomplete="off" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col text-center"><i class="far fa-address-card fa-10x text-primary"></i></div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col">
                                                <p class="text-center">Basic Login detais for Account Creation Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium minus ipsam molestiae eaque similique porro maiores ducimus rem. Voluptate animi officia laboriosam fugit ab illo delectus. Facere dolores cumque placeat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="col-md-6">
                                    <h3 class="pt-2">Step 1</h3>
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name">Company Name</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required="" autofocus placeholder="full name">
                                        @if ($errors->has('name'))
                                            <small class="text-danger">{{ $errors->first('name') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required="" placeholder="email@gmail.com">
                                        @if ($errors->has('email'))
                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="password" title="At least 6 characters with letters and numbers" required="">
                                        @if ($errors->has('password'))
                                            <small class="text-danger">{{ $errors->first('password') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirmation">Verify</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password (again)" required="">
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline float-right">
                                <li class="list-inline-item">
                                    <button type="button" class="btn btn-primary next-step">Next</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col text-center">
                                                {{-- <i class="far fa-building fa-10x text-primary"></i> --}}
                                                <div class="form-group">
                                                    {{Form::label('logo','Logo')}}
                                                    {{Form::file('logo',['class'=>'form-control fileinput'])}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col">
                                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium minus ipsam molestiae eaque similique porro maiores ducimus rem. Voluptate animi officia laboriosam fugit ab illo delectus. Facere dolores cumque placeat.</p>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>                            
                                <div class="col-md-6">
                                    <h3 class="pt-2">Step 2</h3>
                                    <div class="form-group">
                                        {{Form::label('services','Services Provided')}}
                                        {{Form::select('services',$services, '',['class'=>'form-control select2','multiple'=>'multiple','style'=>'width:100%'])}}
                                    </div>                                    
                                    <div class="form-group">
                                        {{Form::label('companyregno','Company Reg. No.')}}
                                        {{Form::text('companyregno','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('name','Address')}}
                                        {{Form::textarea('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('name','Country')}}
                                        {{Form::select('name',['L' => 'Malaysia', 'S' => 'Singapore'], 'S',['class'=>'form-control'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('name','Postal Code')}}
                                        {{Form::number('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('name','Contact(Office) No.')}}
                                        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('name','Website')}}
                                        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                    </div>
                                    <ul class="float-right">
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-default prev-step">Previous</button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-primary next-step">Next</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col text-center"><i class="far fa-handshake fa-10x text-primary"></i></div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col">
                                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium minus ipsam molestiae eaque similique porro maiores ducimus rem. Voluptate animi officia laboriosam fugit ab illo delectus. Facere dolores cumque placeat.</p>
                                            </div>
                                        </div>
                                    </div>                              
                                </div>                            
                                <div class="col-md-6">
                                    <h3 class="pt-2">Step 3</h3>
                                    <div class="form-group">
                                        {{Form::label('name','Facebook')}}
                                        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('name','Instagram')}}
                                        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                    </div>
                                    <ul class="list-inline float-right">
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-default prev-step">Previous</button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-default next-step">Skip</button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-primary btn-info-full next-step">Next</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step4">
                            <div class="row">
                                <div class="col-md-12 pricing-table">
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
                                                    <button class="btn btn-block btn-default next-step" type="submit">BUY NOW</button>
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
                                                    <button class="btn btn-block btn-primary next-step" type="submit">BUY NOW</button>
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
                                                    <button class="btn btn-block btn-outline-success next-step" type="submit">BUY NOW</button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline float-right">
                                            <li class="list-inline-item">
                                                {{-- <button type="submit" class="btn btn-primary btn-lg float-right">Payment</button> --}}
                                                <button type="button" class="btn btn-default prev-step">Previous</button>
                                            </li>
                                        </ul>
                                    </div>                                
                                </div>
                            </div>
                            {{Form::hidden('vendor','enabled')}}
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col text-center"><i class="fas fa-puzzle-piece fa-10x text-primary"></i></div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col">
                                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium minus ipsam molestiae eaque similique porro maiores ducimus rem. Voluptate animi officia laboriosam fugit ab illo delectus. Facere dolores cumque placeat.</p>
                                            </div>
                                        </div>
                                    </div>                              
                                </div>                            
                                <div class="col-md-6">
                                    <h3 class="pt-2">Step 5</h3>
                                    <div class="form-group">
                                        {{Form::label('name','Facebook')}}
                                        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('name','Instagram')}}
                                        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                    </div>
                                    <ul class="list-inline float-right">
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-default prev-step">Previous</button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-primary btn-info-full next-step">Next</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</section>
<script src="{{asset('vendor/select2/dist/js/select2.js')}}"></script>
<script src="{{asset('vendor/bootstrap-fileinput/js/fileinput.js')}}"></script>
<script src="{{asset('vendor/bootstrap-fileinput/themes/fas/theme.js')}}"></script>
<script>
    $(document).ready(function () {
      //Initialize tooltips
      $('.nav-tabs > li a[title]').tooltip();
      
      //Wizard
      $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
  
          var $target = $(e.target);
      
          if ($target.parent().hasClass('disabled')) {
              return false;
          }
      });
  
      $(".next-step").click(function (e) {
  
          var $active = $('.nav-tabs li>a.active');
          $active.parent().next().removeClass('disabled');
          nextTab($active);
  
      });
      $(".prev-step").click(function (e) {
  
          var $active = $('.nav-tabs li>a.active');
          prevTab($active);
  
      });
      $('.select2').select2();
      $('.fileinput').fileinput({
        theme: "fas",
        showUpload: false,
        allowedFileExtensions: ["jpg", "jpeg", "gif", "png", "bmp"],
        allowedFileTypes: ["image"],
        browseClass: "btn btn-success",
        browseLabel: "Pick Image",
        browseIcon: "<i class=\"fas fa-image\"></i> ",
        removeClass: "btn btn-danger",
        removeLabel: "Delete",
        removeIcon: "<i class=\"fas fa-trash-alt\"></i> ",
        uploadUrl: "/file-upload-batch/logo"
      });
    });
    
    function nextTab(elem) {
        $(elem).parent().next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).parent().prev().find('a[data-toggle="tab"]').click();
    }
</script>
@endsection
