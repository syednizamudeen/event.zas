@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/services')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        <div class="box-body">
            {!! Form::open(['action' => ['ServicesController@update', $service->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name','Service Name')}}
                    {{Form::text('name',$service->name,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Save',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
