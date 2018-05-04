@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Role: {{$role->name}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/services')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        <div class="box-body">
            {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
                <div class="form-group">
                    {{Form::label('name','Role Name')}}
                    {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    <h5><b>Assign Permissions</b></h5>
                    @foreach ($permissions as $permission)                
                        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                        {{Form::label($permission->name, ucfirst($permission->name)) }}
                    @endforeach
                </div>
                {{Form::submit('Save',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
