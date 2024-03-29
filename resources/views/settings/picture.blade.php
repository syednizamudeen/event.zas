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
                                            {{Form::file('picture_'.$imagetype['id'],['class'=>'form-control','placeholder'=>'Enter Text','multiple','data-preview-file-type'=>'image'])}}
                                        <div id="kv-success-{{array_key_exists('link',$imagetype)?$imagetype['link']['id']:''}}" class="alert alert-success" style="margin-top:10px;display:none"></div>
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
                                    {{ csrf_field() }}
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
    var APP_URL = {!! json_encode(url('/')) !!}
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var fileinputOption = {	
            theme: "fas",
            maxFileCount: 1,	
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
            removeIcon: "<i class=\"fas fa-trash-alt\"></i> ",
        };
        @foreach ($imagetypes as $imagetype)
        var defaultImage = {};
        @if (!empty($imagetype['link']['filename']))
        defaultImage = {
            overwriteInitial: true,
            initialPreview: [
                '<img src="{{asset($img_base_path.$imagetype['link']['filename'])}}" class="kv-preview-data file-preview-image">'
            ],
            initialPreviewAsData: false,
            initialPreviewFileType: 'image',
            initialPreviewDownloadUrl: '{{asset($img_base_path.$imagetype['link']['filename'])}}',
            initialPreviewConfig: [
                {type: "image", caption: "{{$imagetype['link']['filename']}}", url: APP_URL+"/settings/removepicture", key: {{$imagetype['link']['id']}}}
            ],
        };
        @endif
        $({{'picture_'.$imagetype['id']}}).fileinput($.extend({}, fileinputOption, defaultImage)).on('filepredelete', function(event, key, jqXHR, data) {  
            var abort = true;
            if (confirm("Are you sure you want to delete this image?")) {
                abort = false;
            }
            return abort;
        }).on('filedeleteerror', function(event, data, msg) {
        }).on('filedeleted', function(event, key, jqXHR, data) {
            $('#kv-success-'+key).html('Image deleted...').fadeIn('slow');
        });
        @endforeach
    });
</script>   
@endsection