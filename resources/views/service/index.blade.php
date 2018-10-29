@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="py-5 mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2>{{$title}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-lg-6">
                        <a href="{{url('/services/create')}}" class="btn btn-info btn-lg"><i class="fas fa-plus fa-lg fa-fw"></i>Create</a>
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-default btn-lg float-right"><i class="fas fa-long-arrow-alt-left fa-lg fa-fw"></i>Back</button>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                            <tr>
                                <th scope="row">{{$service->id}}</th>
                                <td><a href="{{url('/services/'.$service->id)}}">{{$service->name}}</a></td>
                                <td>
                                    <a href="{{url('/services/'.$service->id.'/edit')}}" class="btn btn-link text-warning rowedit"><i class="fas fa-edit fa-lg fa-fw"></i></a> <button class="btn btn-link text-danger rowdelete"><i class="fas fa-trash-alt fa-lg fa-fw"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="lead">Showing {{$services->firstItem()}} to {{$services->lastItem()}} of {{$services->total()}} records</p>
                    </div>
                    <div class="col-lg-6">
                            {{$services->links()}}
                        <nav aria-label="Pagination alignment">
                            <ul class="pagination pagination-lg justify-content-end">
                                <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                                <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('vendor/bootbox/bootbox.js')}}"></script>
<script>
    (function ($) {
        "use strict";
        $("table").on("click", ".rowdelete", function(){
            bootbox.confirm({
                title: "<i class=\"fas fa-trash-alt fa-lg fa-fw text-danger\"></i>Delete Row",
                message: "Are you sure you want to continue?",
                closeButton: false,
                buttons: {
                    cancel: {
                        label: '<i class="fas fa-ban fa-fw"></i>Cancel',
                        className: 'btn-default'
                    },
                    confirm: {
                        label: '<i class="far fa-check-circle fa-fw"></i>Accept',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    console.log('This was logged in the callback: ' + result);
                }
            });
        });
    }(jQuery));
</script>



    {{-- <div class="box box-default">
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
    </div> --}}
@endsection
