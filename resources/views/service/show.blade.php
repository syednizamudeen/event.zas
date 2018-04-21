@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
            <a href="{{url('/services/'.$service->id.'/edit')}}" class="btn btn-sm btn-warning"><i class="fa fa-edit fa-fw"></i>Edit</a>
            <a href="{{url('/services')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        <div class="box-body">
            Service details comes here!
            <p class="text-info">{{$service->name}}</p>
            <small>{{$service->created_at}}</small>            
        </div>
        <div class="box-footer">
            {!! Form::open(['action' => ['ServicesController@destroy', $service->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
