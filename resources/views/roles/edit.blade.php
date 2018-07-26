@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Role: {{$role->name}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/roles')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
        <div class="box-body">            
            <div class="form-group">
                {{Form::label('name','Role Name')}}
                {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Text'])}}
            </div>
            <div class="form-group">
                <h5><b>Assign Permissions</b></h5>
                @foreach ($permissions as $permission)
                <div class="form-check col-lg-3">               
                    {{Form::checkbox('permissions[]',  $permission->id, $role->permissions, ['class'=>'form-check-input'] ) }}
                    {{Form::label($permission->name, ucfirst($permission->name)) }}
                </div>
                @endforeach
            </div>
        </div>
        <div class="box-footer clearfix">
            {{ Form::button('<i class="fas fa-save fa-lg fa-fw"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary pull-right'] )  }}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
