@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{ URL::to('roles/create') }}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Create</a>
                <a href="{{ route('users.index') }}" class="btn btn-sm btn-default"><i class="fas fa-users fa-fw"></i> Users</a>
                <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-default"><i class="fas fa-lock fa-fw"></i> Permissions</a>
            </div>
        </div>        
        @if(count($roles)>0)
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Role</th>
                        <th width="60%">Permissions</th>
                        <th></th>
                    </tr>
                @foreach($roles as $role)
                    <tr>
                        <td><a href="{{url('/roles/'.$role->id)}}">{{$role->name}}</a></td>
                        <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>
                        <td>
                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a> {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'class'=>'pull-right' ]) !!}
                                {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger'] )  }}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
            <div class="box-footer clearfix">
                <div class="pull-left">
                    Showing {{$roles->firstItem()}} to {{$roles->lastItem()}} of {{$roles->total()}} records.
                </div>
                <div class="pull-right">
                    {{$roles->links()}}
                </div>
            </div>                
        @else
            <div class="box-body">
                <p>No record(s) found.</p>
            </div>
        @endif
    </div>
@endsection
