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
<link rel="stylesheet" href="{{asset('vendor/smartwizard/css/smart_wizard.css')}}">
<link rel="stylesheet" href="{{asset('vendor/smartwizard/css/smart_wizard_theme_arrows.css')}}">
<link rel="stylesheet" href="{{asset('vendor/select2/dist/css/select2.css')}}">
<link rel="stylesheet" href="{{asset('vendor/bootstrap-fileinput/css/fileinput.css')}}">
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-5">Vendor Registration</h2>
                <form class="form" role="form" autocomplete="off" method="POST" id="myForm" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div id="smartwizard" class="top">
                        <ul>
                            <li><a href="#step-1">Login Details<br /><small>Account Creation</small></a></li>
                            <li><a href="#step-2">Company Info<br /><small>Vendor Particulars</small></a></li>
                            <li><a href="#step-3">Social Connection<br /><small>Get in Touch</small></a></li>
                            <li><a href="#step-4">Subscription<br /><small>Package and AddOn</small></a></li>
                            <li><a href="#step-5">Payment<br /><small>Ready to Go</small></a></li>
                        </ul>
                        
                        <div>                            
                            <div id="step-1">
                                <div class="row">
                                    <div class="col-lg-6">
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
                                    <div class="col-lg-6">
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
                            </div>
                            <div id="step-2">
                                <div class="row">
                                    <div class="col-lg-6">
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
                                    <div class="col-lg-6">
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
                                            {{Form::label('address','Address')}}
                                            {{Form::textarea('address','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('country','Country')}}
                                            {{Form::select('country',['L' => 'Malaysia', 'S' => 'Singapore'], 'S',['class'=>'form-control'])}}
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('postalcode','Postal Code')}}
                                            {{Form::number('postalcode','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('contact','Contact(Office) No.')}}
                                            {{Form::text('contact','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('website','Website')}}
                                            {{Form::text('website','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-3">
                                <div class="row">
                                    <div class="col-lg-6">
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
                                    <div class="col-lg-6">
                                        <h3 class="pt-2">Step 3</h3>
                                        <div class="form-group">
                                            {{Form::label('facebook','Facebook')}}
                                            {{Form::text('facebook','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('instagram','Instagram')}}
                                            {{Form::text('instagram','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-4" class="pricing-table">
                                <div class="container">
                                    <div class="block-heading">
                                        <h3>Step 4</h3>
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
                                </div> 
                            </div>
                            <div id="step-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="container">
                                            <div class="rowmt-5">
                                                <div class="col text-center"><i class="fab fa-cc-paypal fa-10x text-primary"></i></div>
                                            </div>
                                            <div class="rowmt-5">
                                                <div class="col">
                                                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium minus ipsam molestiae eaque similique porro maiores ducimus rem. Voluptate animi officia laboriosam fugit ab illo delectus. Facere dolores cumque placeat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3 class="pt-2">Step 5</h3>
                                        <div class="form-group">
                                            {{Form::label('cardholdername','Card Holder Name')}}
                                            {{Form::text('cardholdername','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('cardno','Card No.')}}
                                            {{Form::text('cardno','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('ccvno','CCV No.')}}
                                            {{Form::text('ccvno','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('cardexpiry','Card Expiry')}}
                                            {{Form::text('cardexpiry','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{Form::hidden('vendor','enabled')}}
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('vendor/smartwizard/js/jquery.smartWizard.min.js')}}"></script>
<script src="{{asset('vendor/select2/dist/js/select2.js')}}"></script>
<script src="{{asset('vendor/bootstrap-fileinput/js/fileinput.js')}}"></script>
<script src="{{asset('vendor/bootstrap-fileinput/themes/fas/theme.js')}}"></script>
<script>
    $(document).ready(function () {
        // Toolbar extra buttons
        var btnFinish = $('<button></button>').text('Finish')
        .addClass('btn btn-info btn-finish')
        .prop('type','submit')
        .on('click', function(){
            // if( !$(this).hasClass('disabled')){
                var elmForm = $("#myForm");
                if(elmForm){
            //         elmForm.validator('validate');
            //         var elmErr = elmForm.find('.has-error');
            //         if(elmErr && elmErr.length > 0){
            //             alert('Oops we still have error in the form');
            //             return false;
            //         }else{
            //             alert('Great! we are ready to submit form');
                        elmForm.submit();
            //             return false;
            //         }
                }
            // }
        });
        var btnCancel = $('<button></button>').text('Cancel')
        .addClass('btn btn-danger')
        .on('click', function(){
            $('#smartwizard').smartWizard("reset");
            $('#myForm').find("input, textarea").val("");
        });
        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'arrows',
            transitionEffect:'fade',
            toolbarSettings: {
                toolbarPosition: 'bottom',
                toolbarExtraButtons: [btnFinish, btnCancel]
            },
            anchorSettings: {
                // enableAllAnchors        :   true, // Activates all anchors clickable all times
                markDoneStep: true, // add done css
                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
            }
        }); 
        $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
            $('html, body').animate({
                scrollTop: $("div.top").offset().top
            }, 1000);
            // Enable finish button only on last step
            if(stepNumber == 4){
                $('.btn-finish').removeClass('disabled');
            }else{
                $('.btn-finish').addClass('disabled');
            }
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
</script>
@endsection
