@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Edit {{$user->name}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/users')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}
            <div class="box-body">                
                <div class="form-group">
                    {{Form::label('name','Name')}}
                    {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{Form::text('email',null,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    @foreach ($roles as $role)
                    <div class="form-check col-lg-3">
                        {{ Form::checkbox('roles[]',  $role->id, $user->roles, ['class'=>'form-check-input'] ) }}
                        {{ Form::label($role->name, ucfirst($role->name)) }}
                    </div>          
                    @endforeach
                </div>
                <div class="form-group">
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password', ['class' => 'form-control','placeholder'=>'Enter Text']) }}
                </div>            
                <div class="form-group">
                    {{ Form::label('password', 'Confirm Password') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control','placeholder'=>'Enter Text']) }}
                </div>           
            </div>
            <div class="box-footer clearfix">
                {{ Form::button('<i class="fas fa-save fa-lg fa-fw"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary pull-right'] )  }}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
