@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
            <a href="{{url('/countries/'.$country->id.'/edit')}}" class="btn btn-sm btn-warning"><i class="fa fa-edit fa-fw"></i>Edit</a>
            <a href="{{url('/countries')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        <div class="box-body">
            Country details comes here!
            <p class="text-info">{{$country->name}}</p>
            <small>{{$country->created_at}}</small>            
        </div>
        <div class="box-footer">
            {!! Form::open(['action' => ['CountriesController@destroy', $country->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
