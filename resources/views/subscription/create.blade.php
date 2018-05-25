@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/subscriptions')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        <div class="box-body">
            {!! Form::open(['action' => 'SubscriptionsController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name','Subscription Name')}}
                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('amount','Subscription Amount')}}
                    {{Form::text('amount','',['class'=>'form-control','placeholder'=>'Enter Value'])}}
                </div>
                {{Form::submit('Save',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
