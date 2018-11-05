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
                        <a href="{{url('/configurations')}}" class="btn btn-primary btn-lg float-right"><i class="fas fa-long-arrow-alt-left fa-lg fa-fw"></i>Back</a>
                    </div>
                </div>
                {!! Form::open(['action' => 'ConfigurationsController@store', 'method' => 'POST']) !!}
                    <div class="form-group row">
                        <div class="col-lg-6">
                            {{Form::label('name','Name')}}
                            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                        </div>
                        <div class="col-lg-6">
                            {{Form::label('value','Value')}}
                            {{Form::text('value','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            {{Form::label('section','Section')}}
                            {{Form::text('section','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                        </div>
                        <div class="col-lg-6">
                            {{Form::label('type','Type')}}
                            {{Form::text('type','',['class'=>'form-control','placeholder'=>'Enter Number'])}}
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-12 text-center">
                            {{ Form::button('<i class="far fa-save fa-lg fa-fw"></i>Save', ['class' => 'btn btn-success btn-lg', 'type' => 'submit']) }}
                        </div>
                    </div>
                    {{ csrf_field() }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
