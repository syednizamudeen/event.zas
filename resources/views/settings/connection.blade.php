@extends('layouts.home')
@section('content')

<section>
    <div class="container">
        @include('settings.partials.profilecard')
        <div class="row">
            <div class="col-md-3 ">
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
                                    @foreach ($socialconnections as $socialconnection)
                                    <div class="form-group row">
                                        {{Form::label('socialconnection['.$socialconnection['id'].']',$socialconnection['name'], ['class' => 'col-4 col-form-label', 'for' => 'socialconnection['.$socialconnection['id'].']'])}}
                                        <div class="col-8">
                                        {{Form::text('socialconnection['.$socialconnection['id'].']',array_key_exists('link',$socialconnection)?$socialconnection['link']['link']:'',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                        {{Form::hidden('socialconnection_hidden['.$socialconnection['id'].']',array_key_exists('link',$socialconnection)?$socialconnection['link']['id']:'')}}
                                    </div>
                                    @endforeach
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            {{Form::hidden('updatesetting','connection')}}
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