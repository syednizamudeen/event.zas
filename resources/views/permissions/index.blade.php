@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{ URL::to('permissions/create') }}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Create</a>
                <a href="{{ route('users.index') }}" class="btn btn-sm btn-default"><i class="fas fa-users fa-fw"></i> Users</a>
                <a href="{{ route('roles.index') }}" class="btn btn-sm btn-default"><i class="fas fa-key fa-fw"></i> Roles</a>
            </div>
        </div>        
        @if(count($permissions)>0)
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Permissions</th>
                        <th></th>
                        <th></th>
                    </tr>
                @foreach($permissions as $permission)
                    <tr>
                        <td><a href="{{url('/permissions/'.$permission->id)}}">{{$permission->name}}</a></td>
                        <td><a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
            <div class="box-footer clearfix">
                <div class="pull-left">
                    Showing {{$permissions->firstItem()}} to {{$permissions->lastItem()}} of {{$permissions->total()}} records.
                </div>
                <div class="pull-right">
                    {{$permissions->links()}}
                </div>
            </div>                
        @else
            <div class="box-body">
                <p>No record(s) found.</p>
            </div>
        @endif
    </div>
@endsection
