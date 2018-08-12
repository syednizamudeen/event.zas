@extends('layouts.home')
@section('content')
<link rel="stylesheet" href="{{asset('vendor/select2/dist/css/select2.css')}}">
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
                                    <div class="form-group row">
                                        {{Form::label('name', 'Name', ['class' => 'col-4 col-form-label', 'for' => 'name'])}}
                                        <div class="col-8">
                                            {{Form::text('name',$vendor->user->name,['class'=>'form-control','placeholder'=>'Enter Text', 'disabled'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        @php($serviceidselected = [])
                                        @foreach($vendor->vendorservice as $service)
                                            @php($serviceidselected[] = $service->service->id) 
                                        @endforeach
                                        {{Form::label('services','Services Provided', ['class' => 'col-4 col-form-label', 'for' => 'services'])}}
                                        <div class="col-8">
                                            {{Form::select('services[]',$services, $serviceidselected,['class'=>'form-control select2','multiple'=>'multiple','style'=>'width:100%','required'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{Form::label('companyregno','Company Reg. No.', ['class' => 'col-4 col-form-label', 'for' => 'companyregno'])}}
                                        <div class="col-8">
                                            {{Form::text('companyregno',$vendor->companyregno,['class'=>'form-control','placeholder'=>'Enter Text','required'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{Form::label('address','Address', ['class' => 'col-4 col-form-label', 'for' => 'address'])}}
                                        <div class="col-8">
                                            {{Form::textarea('address',$vendor->address,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{Form::label('country','Country', ['class' => 'col-4 col-form-label', 'for' => 'country'])}}
                                        <div class="col-8">
                                            {{Form::select('country',$countries, $vendor->country->id,['class'=>'form-control'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{Form::label('postalcode','Postal Code', ['class' => 'col-4 col-form-label', 'for' => 'postalcode'])}}
                                        <div class="col-8">
                                            {{Form::number('postalcode',$vendor->postalcode,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{Form::label('contact','Contact(Office) No.', ['class' => 'col-4 col-form-label', 'for' => 'contact'])}}
                                        <div class="col-8">
                                            {{Form::text('contact',$vendor->contactno,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{Form::label('website','Website', ['class' => 'col-4 col-form-label', 'for' => 'website'])}}
                                        <div class="col-8">
                                            {{Form::text('website',$vendor->website,['class'=>'form-control','placeholder'=>'Enter Text'])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            {{Form::hidden('updatesetting','profile')}}
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
<script src="{{asset('vendor/select2/dist/js/select2.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>    
@endsection