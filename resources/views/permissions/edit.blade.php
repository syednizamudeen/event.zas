@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Edit {{$permission->name}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/permissions')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}
            <div class="box-body">                
                <div class="form-group">
                    {{Form::label('name','Permission Name')}}
                    {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>            
            </div>
            <div class="box-footer clearfix">
                {{ Form::button('<i class="fas fa-save fa-lg fa-fw"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary pull-right'] )  }}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
