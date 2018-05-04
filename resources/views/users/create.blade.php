@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Users</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/users')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        <div class="box-body">
            {{ Form::open(array('url' => 'users')) }}
                <div class="form-group">
                    {{Form::label('name','Name')}}
                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{Form::text('email','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    @foreach ($roles as $role)
                        {{ Form::checkbox('roles[]',  $role->id ) }}
                        {{ Form::label($role->name, ucfirst($role->name)) }}           
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
                {{Form::submit('Save',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
