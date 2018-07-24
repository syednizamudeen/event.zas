@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/countries')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        <div class="box-body">
            {!! Form::open(['action' => 'CountriesController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name','Country Name')}}
                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('iso','ISO')}}
                    {{Form::text('iso','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('currencycode','Currency Code')}}
                    {{Form::text('currencycode','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('currencyname','Currency Name')}}
                    {{Form::text('currencyname','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('currencysymbol','Currency Symbol')}}
                    {{Form::text('currencysymbol','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('taxname','Tax Name')}}
                    {{Form::text('taxname','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('taxcode','Tax Code')}}
                    {{Form::text('taxcode','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('taxrate','Tax Rate')}}
                    {{Form::text('taxrate','',['class'=>'form-control','placeholder'=>'Enter Value'])}}
                </div>
                <div class="form-group">
                    {{Form::label('countrycode','Calling Code')}}
                    {{Form::text('countrycode','',['class'=>'form-control','placeholder'=>'Enter Value'])}}
                </div>
                {{Form::submit('Save',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
