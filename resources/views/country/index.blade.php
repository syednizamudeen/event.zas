@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/countries/create')}}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Create</a>
            </div>
        </div>        
        @if(count($countries)>0)
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>ISO</th>
                        <th>Currency Code</th>
                        <th>Currency Name</th>
                        <th>Currency Symbol</th>
                        <th>Tax Name</th>
                        <th>Tax Code</th>
                        <th>Tax Rate (%)</th>
                        <th>Calling Code</th>
                        <th></th>
                        <th></th>
                    </tr>
                @foreach($countries as $country)
                    <tr>
                        <td><a href="{{url('/countries/'.$country->id)}}">{{$country->name}}</a></td>
                        <td>{{$country->iso}}</td>
                        <td>{{$country->currencycode}}</td>
                        <td>{{$country->currencyname}}</td>
                        <td>{{$country->currencysymbol}}</td>
                        <td>{{$country->taxname}}</td>
                        <td>{{$country->taxcode}}</td>
                        <td>{{$country->taxrate}}</td>
                        <td>{{$country->countrycode}}</td>
                        <td><a href="{{url('/countries/'.$country->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a></td>
                        <td>
                            {!! Form::open(['action' => ['CountriesController@destroy', $country->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
            <div class="box-footer clearfix">
                <div class="pull-left">
                    Showing {{$countries->firstItem()}} to {{$countries->lastItem()}} of {{$countries->total()}} records.
                </div>
                <div class="pull-right">
                    {{$countries->links()}}
                </div>
            </div>                
        @else
            <div class="box-body">
                <p>No record(s) found.</p>
            </div>
        @endif
    </div>
@endsection
