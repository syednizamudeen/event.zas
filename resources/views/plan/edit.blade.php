@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/plans')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        <div class="box-body">
            {!! Form::open(['action' => ['PlansController@update', $plan->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name','Plan Name')}}
                    {{Form::text('name',$plan->name,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('amount','Amount')}}
                    {{Form::text('amount',$plan->amount,['class'=>'form-control','placeholder'=>'Enter Value'])}}
                </div>
                <div class="form-group">
                    {{Form::label('country_id','Country')}}
                    {{Form::select('country_id',$countries, $plan->country_id,['class'=>'form-control select2','style'=>'width:100%','placeholder' => '--Select--'])}}
                </div>
                <div class="form-group">
                    {{Form::label('type_id','Type')}}
                    {{Form::select('type_id',$types, $plan->type_id,['class'=>'form-control select2','style'=>'width:100%','placeholder' => '--Select--'])}}
                </div>
                <div class="form-group">
                    {{Form::label('duration_id','Duration')}}
                    {{Form::select('duration_id',$durations, $plan->duration_id,['class'=>'form-control select2','style'=>'width:100%','placeholder' => '--Select--'])}}
                </div>
                <div class="form-group">
                    {{Form::label('expire_at','Expire At')}}
                    {{Form::date('expire_at', date('Y-m-d', strtotime($plan->expire_at)),['class'=>'form-control'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Save',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
