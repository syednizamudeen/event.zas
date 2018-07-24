@extends('layouts.backend')
@section('content')
    <link rel="stylesheet" href="{{asset('vendor/select2/dist/css/select2.css')}}">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/plans')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        <div class="box-body">
            {!! Form::open(['action' => 'PlansController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name','Plan Name')}}
                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('amount','Amount')}}
                    {{Form::text('amount','',['class'=>'form-control','placeholder'=>'Enter Value'])}}
                </div>
                <div class="form-group">
                    {{Form::label('country_id','Country')}}
                    {{Form::select('country_id',$countries, '',['class'=>'form-control select2','style'=>'width:100%','placeholder' => '--Select--'])}}
                </div>
                <div class="form-group">
                    {{Form::label('type_id','Type')}}
                    {{Form::select('type_id',$types, '',['class'=>'form-control select2','style'=>'width:100%','placeholder' => '--Select--'])}}
                </div>
                <div class="form-group">
                    {{Form::label('duration_id','Duration')}}
                    {{Form::select('duration_id',$durations, '',['class'=>'form-control select2','style'=>'width:100%','placeholder' => '--Select--'])}}
                </div>
                <div class="form-group">
                    {{Form::label('expire_at','Expire At')}}
                    {{Form::date('expire_at', \Carbon\Carbon::now(),['class'=>'form-control'])}}
                </div>
                {{Form::submit('Save',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
    <script src="{{asset('vendor/select2/dist/js/select2.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endsection
