@extends('layouts.home')
@section('content')

<section>
    <div class="container">
        @include('settings.partials.profilecard')
        <div class="row">
            <div class="col-md-3">
                @include('settings.partials.leftmenu')
           </div>
           <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>{{$title}}</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::open(['action' => ['SettingsController@update', $user->id], 'method' => 'POST']) !!}
                                    <div class="form-group row">
                                        {{Form::label('name', 'Name', ['class' => 'col-4 col-form-label', 'for' => 'name'])}}
                                        <div class="col-8">
                                            {{Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Enter Text', 'required' => 'required'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{Form::label('email', 'Email', ['class' => 'col-4 col-form-label', 'for' => 'email'])}} 
                                        <div class="col-8">
                                            {{Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'Enter Text', 'required' => 'required','readonly'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{Form::label('password', 'Password', ['class' => 'col-4 col-form-label', 'for' => 'password'])}} 
                                        <div class="col-8">
                                            {{Form::password('password',['class'=>'form-control','placeholder'=>'Enter Current Password'])}}
                                            <small id="passwordHelp" class="form-text text-muted">Password update feature yet to implement.</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            {{Form::hidden('updatesetting','account')}}
                                            {{Form::hidden('_method','PUT')}}
                                            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section>      
@endsection