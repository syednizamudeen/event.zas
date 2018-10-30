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
                        <a href="{{url('/services')}}" class="btn btn-primary btn-lg float-right"><i class="fas fa-long-arrow-alt-left fa-lg fa-fw"></i>Back</a>
                    </div>
                </div>
                {!! Form::open(['action' => ['ServicesController@update', $service->id], 'method' => 'POST']) !!}
                    <div class="form-group row">
                        <div class="col-lg-6">
                            {{Form::label('name','Service Name')}}
                            {{Form::text('name',$service->name,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-12 text-center">
                            {{ Form::button('<i class="fas fa-edit fa-lg fa-fw"></i>Update', ['class' => 'btn btn-warning btn-lg', 'type' => 'submit']) }}
                        </div>
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{ csrf_field() }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
