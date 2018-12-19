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
                        <!--<button class="btn btn-default btn-lg float-right"><i class="fas fa-long-arrow-alt-left fa-lg fa-fw"></i>Back</button>-->
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                            <tr>
                                <th scope="row">{{$service->id}}</th>
                                <td><a href="{{url('/services/'.$service->id)}}">{{$service->name}}</a></td>
                                <td>{{(!empty($service->created_at)?$service->created_at->diffForHumans():'')}}</td>
                                <td>{{(!empty($service->updated_at)?$service->updated_at->diffForHumans():'')}}</td>
                                <td class="row mx-0">
                                    <a href="{{url('/services/'.$service->id.'/edit')}}" class="btn btn-link text-warning text-right col-6 rowedit"><i class="fas fa-edit fa-lg fa-fw"></i></a>
                                    {!! Form::open(['action' => ['ServicesController@destroy', $service->id], 'method' => 'POST', 'class'=>'rowdelete col-6']) !!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{ Form::button('<i class="fas fa-trash-alt fa-lg fa-fw"></i>', ['type' => 'submit', 'class' => 'btn btn-link text-danger'] )  }}
                                        {{ csrf_field() }}
                                    {!! Form::close() !!}
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
                        <nav aria-label="Pagination alignment">
                            {{$services->links("pagination::bootstrap-4")}}
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
    $("table").on("submit", ".rowdelete", function(e){
        e.preventDefault();
        var that = this;
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
                if(result){that.submit()}
            }
        });
    });
}(jQuery));
</script>
@endsection
