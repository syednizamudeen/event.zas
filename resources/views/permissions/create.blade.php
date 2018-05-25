@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Permissions</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/permissions')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        <div class="box-body">
            {{ Form::open(array('url' => 'permissions')) }}
                <div class="form-group">
                    {{Form::label('name','Service Name')}}
                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    @if(!$roles->isEmpty())
                        <h4>Assign Permission to Roles</h4>                
                        @foreach ($roles as $role) 
                            {{ Form::checkbox('roles[]',  $role->id ) }}
                            {{ Form::label($role->name, ucfirst($role->name)) }}
                        @endforeach
                    @endif
                </div>
                {{Form::submit('Save',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
