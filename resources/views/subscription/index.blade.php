@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/subscriptions/create')}}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Create</a>
            </div>
        </div>        
        @if(count($subscriptions)>0)
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <th></th>
                        <th></th>
                    </tr>
                @foreach($subscriptions as $subscription)
                    <tr>
                        <td><a href="{{url('/subscriptions/'.$subscription->id)}}">{{$subscription->name}}</a></td>
                        <td><a href="{{url('/subscriptions/'.$subscription->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a></td>
                        <td>
                            {!! Form::open(['action' => ['SubscriptionsController@destroy', $subscription->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
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
                    Showing {{$subscriptions->firstItem()}} to {{$subscriptions->lastItem()}} of {{$subscriptions->total()}} records.
                </div>
                <div class="pull-right">
                    {{$subscriptions->links()}}
                </div>
            </div>                
        @else
            <div class="box-body">
                <p>No record(s) found.</p>
            </div>
        @endif
    </div>
@endsection
