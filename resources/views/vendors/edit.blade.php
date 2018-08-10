@extends('layouts.backend')
@section('content')
    <link rel="stylesheet" href="{{asset('vendor/select2/dist/css/select2.css')}}">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/vendors')}}" class="btn btn-sm btn-default"><i class="fa fa-undo fa-fw"></i>Go Back</a>
            </div>
        </div>
        {!! Form::open(['action' => ['VendorsController@update', $vendor->id], 'method' => 'POST']) !!}
            <div class="box-body">            
                <div class="form-group">
                    {{Form::label('name','Name')}}
                    {{Form::text('name',$vendor->user->name,['class'=>'form-control','placeholder'=>'Enter Text','disabled'])}}
                </div>
                <div class="form-group">
                    @php($serviceidselected = [])
                    @foreach($vendor->vendorservice as $service)
                        @php($serviceidselected[] = $service->service->id) 
                    @endforeach
                    {{Form::label('services','Services Provided')}}
                    {{Form::select('services[]',$services, $serviceidselected,['class'=>'form-control select2','multiple'=>'multiple','style'=>'width:100%','required'])}}
                </div>                                    
                <div class="form-group">
                    {{Form::label('companyregno','Company Reg. No.')}}
                    {{Form::text('companyregno',$vendor->companyregno,['class'=>'form-control','placeholder'=>'Enter Text','required'])}}
                </div>
                <div class="form-group">
                    {{Form::label('address','Address')}}
                    {{Form::textarea('address',$vendor->address,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('country','Country')}}
                    {{Form::select('country',$countries, $vendor->country->id,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('postalcode','Postal Code')}}
                    {{Form::number('postalcode',$vendor->postalcode,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('contact','Contact(Office) No.')}}
                    {{Form::text('contact',$vendor->contactno,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('website','Website')}}
                    {{Form::text('website',$vendor->website,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                </div>
            </div>
            <div class="box-footer clearfix">
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Save',['class'=>'btn btn-primary pull-right'])}}
            </div>
        {!! Form::close() !!}
    </div>
    <script src="{{asset('vendor/select2/dist/js/select2.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endsection
