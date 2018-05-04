@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Roles</h3>
            <div class="box-tools pull-right">
                <a href="{{ URL::to('roles/create') }}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Create</a>
                <a href="{{ route('users.index') }}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Users</a>
                <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Permissions</a>
            </div>
        </div>        
        @if(count($roles)>0)
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Role</th>
                        <th>Permissions</th>
                        <th></th>
                        <th></th>
                    </tr>
                @foreach($roles as $role)
                    <tr>
                        <td><a href="{{url('/roles/'.$role->id)}}">{{$role->name}}</a></td>
                        <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>
                        <td><a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
            <div class="box-footer clearfix">
                <div class="pull-left">
                    {{-- Showing {{$services->firstItem()}} to {{$services->lastItem()}} of {{$services->total()}} records. --}}
                </div>
                <div class="pull-right">
                    {{-- {{$services->links()}} --}}
                </div>
            </div>                
        @else
            <div class="box-body">
                <p>No record(s) found.</p>
            </div>
        @endif
    </div>
@endsection
