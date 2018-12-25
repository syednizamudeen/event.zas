@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="py-5 mt-5">
                <div class="row pb-2">
                    <div class="col-lg-6">
                        <h2>{{$title}}</h2>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{url('/plans')}}" class="btn btn-primary btn-lg float-right"><i class="fas fa-long-arrow-alt-left fa-lg fa-fw"></i>Back</a>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        {{Form::label('name','Plan Name')}}
                        {{Form::text('name',$plan->name,['class'=>'form-control','placeholder'=>'Enter Text','disabled'=>'disabled'])}}
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('created_at','Created At')}}
                        {{Form::text('created_at',(!empty($plan->created_at)?$plan->created_at->format('F d, Y h:ia'):''),['class'=>'form-control','placeholder'=>'Enter Text','disabled'=>'disabled'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        {{Form::label('updated_at','Updated At')}}
                        {{Form::text('updated_at',(!empty($plan->updated_at)?$plan->updated_at->format('F d, Y h:ia'):''),['class'=>'form-control','placeholder'=>'Enter Text','disabled'=>'disabled'])}}
                    </div>
                    <div class="col-lg-6"></div>
                </div>
                <div class="row py-2">
                    <div class="col-lg-12 text-center">
                        <a href="{{url('/plans/'.$plan->id.'/edit')}}" class="btn btn-warning btn-lg"><i class="fas fa-edit fa-lg fa-fw"></i>Edit</a>
                        {!! Form::open(['action' => ['PlansController@destroy', $plan->id], 'method' => 'POST', 'class'=>'rowdelete d-inline']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{ Form::button('<i class="fas fa-trash-alt fa-lg fa-fw"></i>Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-lg'] )  }}
                            {{ csrf_field() }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('vendor/bootbox/bootbox.js')}}"></script>
<script>
(function ($) {
    "use strict";
    $(".rowdelete").on("submit", function(e){
        e.preventDefault();
        var that = this;
        bootbox.confirm({
            title: "<i class=\"fas fa-trash-alt fa-lg fa-fw text-danger\"></i>Delete Row",
            message: "Are you sure you want to continue?",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class="fas fa-ban fa-fw"></i>Cancel',
                    className: 'btn-default'
                },
                confirm: {
                    label: '<i class="far fa-check-circle fa-fw"></i>Accept',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if(result){that.submit()}
            }
        });
    });
}(jQuery));
</script>
@endsection
