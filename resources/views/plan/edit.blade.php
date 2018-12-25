@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="{{asset('vendor/select2/dist/css/select2.css')}}">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="py-5 mt-5">
                <div class="row pb-2">
                    <div class="col-lg-6">
                        <h2>{{$title}}</h2>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{url('/plans')}}" class="btn btn-primary btn-lg float-right"><i class="fas fa-long-arrow-alt-left fa-lg fa-fw"></i>Back</a>
                    </div>
                </div>
                {!! Form::open(['action' => ['PlansController@update', $plan->id], 'method' => 'POST']) !!}
                    <div class="form-group row">
                        <div class="col-lg-6">
                            {{Form::label('name','Plan Name')}}
                            {{Form::text('name',$plan->name,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                        </div>
                        <div class="col-lg-6">
                            {{Form::label('amount','Amount')}}
                            {{Form::text('amount',$plan->amount,['class'=>'form-control','placeholder'=>'Enter Value'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            {{Form::label('country_id','Country')}}
                            {{Form::select('country_id',$countries, $plan->country_id,['class'=>'form-control select2','style'=>'width:100%','placeholder' => '--Select--'])}}
                        </div>
                        <div class="col-lg-6">
                            {{Form::label('type_id','Type')}}
                            {{Form::select('type_id',$types, $plan->type_id,['class'=>'form-control select2','style'=>'width:100%','placeholder' => '--Select--'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            {{Form::label('duration_id','Duration')}}
                            {{Form::select('duration_id',$durations, $plan->duration_id,['class'=>'form-control select2','style'=>'width:100%','placeholder' => '--Select--'])}}
                        </div>
                        <div class="col-lg-6">
                            {{Form::label('expire_at','Expire At')}}
                            {{Form::date('expire_at', date('Y-m-d', strtotime($plan->expire_at)),['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-12 text-center">
                            {{ Form::button('<i class="fas fa-edit fa-lg fa-fw"></i>Update', ['class' => 'btn btn-warning btn-lg', 'type' => 'submit']) }}
                        </div>
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{ csrf_field() }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script src="{{asset('vendor/select2/dist/js/select2.js')}}"></script>
<script>
$(document).ready(function () {
    $('.select2').select2();
});
</script>
@endsection
