@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/services/create')}}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Create</a>
            </div>
        </div>
        <div class="box-body">
            List of Service(s) comes here!
            @if(count($services)>0)
                <ul>
                @foreach($services as $service)
                <li><a href="{{url('/services/'.$service->id)}}">{{$service->name}}</a></li>
                @endforeach
                </ul>
                {{$services->links()}}
            @else
                <p>No record(s) found.</p>
            @endif
        </div>
    </div>
@endsection
