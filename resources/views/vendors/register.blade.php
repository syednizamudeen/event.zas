@extends('layouts.home')

@section('content')
<link rel="stylesheet" href="{{asset('vendor/smartwizard/css/smart_wizard.css')}}">
<link rel="stylesheet" href="{{asset('vendor/smartwizard/css/smart_wizard_theme_arrows.css')}}">
<link rel="stylesheet" href="{{asset('vendor/select2/dist/css/select2.css')}}">
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-5">Vendor Registration</h2>
                <form class="form" role="form" autocomplete="off" method="POST" id="myForm" action="{{ route('register') }}" enctype="multipart/form-data">
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
                                    <div class="col-lg-6" id="form-step-0" role="form" data-toggle="validator">
                                        <h3 class="pt-2">Step 1</h3>
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name">Company Name</label>
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required="" autofocus placeholder="full name">
                                            @if ($errors->has('name'))
                                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                            @endif
                                            <div class="text-danger help-block with-errors"></div>
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required="" placeholder="email@gmail.com">
                                            @if ($errors->has('email'))
                                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                            <div class="text-danger help-block with-errors"></div>
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password">Password</label>
                                            <input id="password" type="password" class="form-control" name="password" placeholder="password" title="At least 6 characters with letters and numbers" required="">
                                            @if ($errors->has('password'))
                                                <small class="text-danger">{{ $errors->first('password') }}</small>
                                            @endif
                                            <div class="text-danger help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password-confirmation">Verify</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  data-match="#password" data-match-error="Whoops, these don't match" placeholder="password (again)" required="">
                                            <div class="text-danger help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="container">
                                            <div class="row mt-5">
                                                <div class="col text-center"><i class="far fa-building fa-10x text-primary"></i></div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col">
                                                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium minus ipsam molestiae eaque similique porro maiores ducimus rem. Voluptate animi officia laboriosam fugit ab illo delectus. Facere dolores cumque placeat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" id="form-step-1" role="form" data-toggle="validator">
                                        <h3 class="pt-2">Step 2</h3>
                                        <div class="form-group">
                                            {{Form::label('services','Services Provided')}}
                                            {{Form::select('services[]',$services, '',['class'=>'form-control select2','multiple'=>'multiple','style'=>'width:100%','required'])}}
                                            <div class="text-danger help-block with-errors"></div>
                                        </div>                                    
                                        <div class="form-group">
                                            {{Form::label('companyregno','Company Reg. No.')}}
                                            {{Form::text('companyregno','',['class'=>'form-control','placeholder'=>'Enter Text','required'])}}
                                            <div class="text-danger help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('address','Address')}}
                                            {{Form::textarea('address','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('country','Country')}}
                                            {{Form::select('country',$countries, '',['class'=>'form-control'])}}
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
                                    <div class="col-lg-6" id="form-step-2" role="form" data-toggle="validator">
                                        <h3 class="pt-2">Step 3</h3>
                                        @foreach ($socialconnections as $socialconnection)
                                        <div class="form-group">
                                            {{Form::label('socialconnection['.$socialconnection->id.']',$socialconnection->name)}}
                                            {{Form::text('socialconnection['.$socialconnection->id.']','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div id="step-4" id="form-step-3" role="form" data-toggle="validator">
                                <div class="container">
                                    <h3 class="pt-2 text-center">Step 4</h3>
                                    <div class="card-deck mb-3 text-center package">
                                        @foreach ($packages as $package)
                                        <div class="card mb-4">
                                            <div class="card-header text-white {{$package->amount>0?'bg-success':'bg-secondary'}}">
                                                <h4 class="my-0 font-weight-normal">{{$package->name}}</h4>
                                            </div>
                                            <div class="card-body">
                                                <h1 class="card-title pricing-card-title">{{$package->country->currencysymbol}} {{$package->amount}} 
                                                @if($package->amount>0)    
                                                    <small class="text-muted">{{$package->duration->name}}</small>
                                                @endif
                                                </h1>
                                                <div class="form-group mt-3 mb-4">
                                                    @foreach ($addons as $addon)
                                                    <div class="form-check">
                                                        {{ Form::checkbox('addons[]',  $addon->id, '', ['class'=>'form-check-input input-addon',($package->amount>0?'':'disabled')] ) }}
                                                        {{ Form::label($addon->name, ucfirst($addon->name)) }}
                                                    </div>
                                                    <small class="form-text text-muted">({{$addon->duration->name}} {{$addon->country->currencysymbol}} {{$addon->amount}})</small>
                                                    @endforeach
                                                </div>
                                                @if($package->amount>0)
                                                {{ Form::button('Choose Plan', ['type' => 'button', 'class' => 'btn btn-lg btn-block btn-success btn-package','btn-data'=>$package->id] )  }}
                                                @else
                                                {{ Form::button('Start Trial', ['type' => 'button', 'class' => 'btn btn-lg btn-block btn-default btn-package','btn-data'=>$package->id] )  }}
                                                {{Form::hidden('plan_id',$package->id)}}
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div> 
                            </div>
                            <div id="step-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="container">
                                            <div class="row mt-5">
                                                <div class="col text-center"><i class="fab fa-cc-paypal fa-10x text-primary"></i></div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col">
                                                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium minus ipsam molestiae eaque similique porro maiores ducimus rem. Voluptate animi officia laboriosam fugit ab illo delectus. Facere dolores cumque placeat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 id="form-step-4" role="form" data-toggle="validator"">
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
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="acceptterms" name="acceptterms">
                                            <label for="acceptterms" class="for-check-label">I agree to the <a href="{{url("/terms-of-service")}}">Terms and Conditions</a></label>
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
<script src="{{asset('js/validator.min.js')}}"></script>
<script src="{{asset('vendor/smartwizard/js/jquery.smartWizard.min.js')}}"></script>
<script src="{{asset('vendor/select2/dist/js/select2.js')}}"></script>
<script>
    $(document).ready(function () {
        // Toolbar extra buttons
        var btnFinish = $('<button></button>').text('Finish')
        .addClass('btn btn-warning btn-finish disabled')
        .prop({"type":"submit","disabled":true})
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
        .addClass('btn btn-default')
        .on('click', function(){
            $('#smartwizard').smartWizard("reset");
            $('#myForm').find("input, textarea").val("");
        });
        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'default',
            transitionEffect:'fade',
            toolbarSettings: {
                toolbarPosition: 'bottom',
                toolbarExtraButtons: [btnFinish, btnCancel]
            },
            keyNavigation: false,
            anchorSettings: {
                // enableAllAnchors        :   true, // Activates all anchors clickable all times
                markDoneStep: true, // add done css
                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
            }
        });
        $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
            var elmForm = $("#form-step-" + stepNumber);
            // stepDirection === 'forward' :- this condition allows to do the form validation
            // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
            if(stepDirection === 'forward' && elmForm){
                elmForm.validator('validate');
                var elmErr = elmForm.children('.has-error');
                if(elmErr && elmErr.length > 0){
                    // Form validation failed
                    return false;
                }
            }
            return true;
        });
        $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
            $('html, body').animate({
                scrollTop: $("div.top").offset().top
            }, 1000);
            // Enable finish button only on last step
            if(stepNumber == 4){
                $('.btn-finish').removeClass('disabled').prop('disabled', false);
            }else{
                $('.btn-finish').addClass('disabled').prop('disabled', true);
            }
        });     
        $('.select2').select2();
        $(".package").on("click", ".btn-package", function(e){
            var that = this;
            var val = [];
            $(that).parent().parent().find(".input-addon").each(function(i) {
                val[i] = $(this).is(':checked');
            });
            $( ".card" ).each(function( index ) {
                $(this).removeClass('border-warning');
                $(this).children(':nth-child(2)').removeClass('text-white bg-warning');
                $(this).children(':nth-child(2)').find(".input-addon").each(function() {this.checked = false;});
            });
            $(that).parent().parent().addClass('border-warning');
            $(that).parent().addClass('text-white bg-warning');
            $('input[name="plan_id"]').val($(that).attr('btn-data'));
            $(that).parent().find(".input-addon").each(function(i) {this.checked = val[i];});
        }).on("click", ".input-addon", function(e){
            if($(this).is(':checked')) $(this).parent().parent().parent().find(".btn-package").trigger("click");
        });
    });
</script>
@endsection
