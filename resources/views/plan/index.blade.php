@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{url('/plans/create')}}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Create</a>
            </div>
        </div>        
        @if(count($plans)>0)
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Currency</th>
                        <th>Type</th>
                        <th>Duration</th>
                        <th>Expire At</th>
                        <th></th>
                    </tr>
                @foreach($plans as $plan)
                    <tr>
                        <td><a href="{{url('/plans/'.$plan->id)}}">{{$plan->name}}</a></td>
                        <td>{{$plan->amount}}</td>
                        <td>{{$plan->country->currencysymbol}}</td>
                        <td>{{$plan->type->name}}</td>
                        <td>{{$plan->duration->name}}</td>
                        <td>{{$plan->expire_at}}</td>
                        <td>
                            <a href="{{url('/plans/'.$plan->id.'/edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a> {!! Form::open(['action' => ['PlansController@destroy', $plan->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
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
                    Showing {{$plans->firstItem()}} to {{$plans->lastItem()}} of {{$plans->total()}} records.
                </div>
                <div class="pull-right">
                    {{$plans->links()}}
                </div>
            </div>                
        @else
            <div class="box-body">
                <p>No record(s) found.</p>
            </div>
        @endif
    </div>
@endsection
