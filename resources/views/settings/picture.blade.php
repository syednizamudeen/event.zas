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
                                    @foreach ($imagetypes as $imagetype)
                                    <div class="form-group row">
                                        {{Form::label('picture_'.$imagetype['id'], $imagetype['name'], ['class' => 'col-4 col-form-label', 'for' => 'picture_'.$imagetype['id']])}}
                                        <div class="col-8">
                                            {{Form::file('picture_'.$imagetype['id'],['class'=>'form-control fileinput','placeholder'=>'Enter Text','multiple','data-preview-file-type'=>'image','data-preview'=>asset(env("MEDIA_UPLOAD_PATH", "\upload").'/'.$imagetype['link']['filename'])])}}
                                        </div>
                                        {{Form::hidden('picture_hidden['.$imagetype['id'].']',array_key_exists('link',$imagetype)?$imagetype['link']['id']:'')}}
                                    </div>
                                    @endforeach
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            {{Form::hidden('updatesetting','picture')}}
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
            fileActionSettings : {
                showUpload : false,
            },
            allowedFileExtensions: ["jpg", "jpeg", "gif", "png", "bmp"],	
            allowedFileTypes: ["image"],	
            browseClass: "btn btn-success",	
            browseLabel: "Pick Image",	
            browseIcon: "<i class=\"fas fa-image\"></i> ",	
            removeClass: "btn btn-danger",	
            removeLabel: "Delete",	
            removeIcon: "<i class=\"fas fa-trash-alt\"></i> "
        });
    });
</script>   
@endsection