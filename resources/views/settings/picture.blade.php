@extends('layouts.home')
@section('content')
<link rel="stylesheet" href="{{asset('vendor/bootstrap-fileinput/css/fileinput.css')}}">
<section>
    <div class="container">
        @include('settings.partials.profilecard')
        <div class="row">
            <div class="col-md-3 ">
                @include('settings.partials.leftmenu')
           </div>
           <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>{{$title}}</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::open(['action' => ['SettingsController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                    <div class="form-group row">
                                        {{Form::label('profile', 'Profile Picture', ['class' => 'col-4 col-form-label', 'for' => 'profile'])}}
                                        <div class="col-8">
                                            {{Form::file('profile',['class'=>'form-control fileinput','placeholder'=>'Enter Text'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{Form::label('featurelogo', 'Feature Logo', ['class' => 'col-4 col-form-label', 'for' => 'featurelogo'])}}
                                        <div class="col-8">
                                            {{Form::file('featurelogo',['class'=>'form-control fileinput','placeholder'=>'Enter Text'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{Form::label('featurewall', 'Feature Wall', ['class' => 'col-4 col-form-label', 'for' => 'featurewall'])}}
                                        <div class="col-8">
                                            {{Form::file('featurewall',['class'=>'form-control fileinput','placeholder'=>'Enter Text'])}}
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            {{Form::hidden('updatesetting','account')}}
                                            {{Form::hidden('_method','PUT')}}
                                            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section>   
<script src="{{asset('vendor/bootstrap-fileinput/js/fileinput.js')}}"></script>	
<script src="{{asset('vendor/bootstrap-fileinput/themes/fas/theme.js')}}"></script>	
<script>
    $(document).ready(function () {
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