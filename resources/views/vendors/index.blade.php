@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <!--<a href="{{url('/vendors/create')}}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Create</a>-->
            </div>
        </div>        
        @if(count($vendors)>0)
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Vendor Name</th>
                        <th>Services</th>
                        <th>Email</th>
                        <th>Registered Since</th>
                        <th>Reg. No.</th>
                        <th>Address</th>
                        <th>Country</th>
                        <th>Postal Code</th>
                        <th>Contact No</th>
                        <th>Website</th>
                        <th>Default Currency</th>
                        <th></th>
                    </tr>
                @foreach($vendors as $vendor)
                    <tr>
                        <td>{{$vendor->user->name}}</td>
                        <td>
                            @foreach($vendor->vendorservice as $service)
                            {{$service->service->name}}, 
                            @endforeach
                        </td>
                        <td>{{$vendor->user->email}}</td>
                        <td>{{$vendor->user->created_at}}</td>
                        <td>{{$vendor->companyregno}}</td>
                        <td>{{$vendor->address}}</td>
                        <td>{{$vendor->country->name}}</td>
                        <td>{{$vendor->postalcode}}</td>
                        <td>{{$vendor->contactno}}</td>
                        <td>{{$vendor->website}}</td>
                        <td>{{$vendor->country->currencyname}}</td>
                        <td>
                            <a href="{{url('/vendors/'.$vendor->id.'/edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a> {!! Form::open(['action' => ['VendorsController@destroy', $vendor->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
                            {{Form::hidden('_method','DELETE')}}
                                {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger'] )  }}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
            <div class="box-footer clearfix">
                <div class="pull-left">
                    Showing {{$vendors->firstItem()}} to {{$vendors->lastItem()}} of {{$vendors->total()}} records.
                </div>
                <div class="pull-right">
                    {{$vendors->links()}}
                </div>
            </div>                
        @else
            <div class="box-body">
                <p>No record(s) found.</p>
            </div>
        @endif
    </div>
@endsection
