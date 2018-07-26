@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/services/create')}}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Create</a>
            </div>
        </div>        
        @if(count($services)>0)
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                @foreach($services as $service)
                    <tr>
                        <td><a href="{{url('/services/'.$service->id)}}">{{$service->name}}</a></td>
                        <td>
                            <a href="{{url('/services/'.$service->id.'/edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a> {!! Form::open(['action' => ['ServicesController@destroy', $service->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
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
                    Showing {{$services->firstItem()}} to {{$services->lastItem()}} of {{$services->total()}} records.
                </div>
                <div class="pull-right">
                    {{$services->links()}}
                </div>
            </div>                
        @else
            <div class="box-body">
                <p>No record(s) found.</p>
            </div>
        @endif
    </div>
@endsection
