@extends('layouts.backend')
@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
            <div class="box-tools pull-right">
                <a href="{{ route('users.create') }}" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i>Create</a>
                <a href="{{ route('roles.index') }}" class="btn btn-sm btn-default"><i class="fas fa-key fa-fw"></i> Roles</a>
                <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-default"><i class="fas fa-lock fa-fw"></i> Permissions</a>
                    
            </div>
        </div>        
        @if(count($users)>0)
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date/Time Added</th>
                        <th>User Roles</th>
                        <th></th>
                        <th></th>
                    </tr>
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{url('/users/'.$user->id)}}">{{$user->name}}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if (!empty($user->created_at))
                            {{ $user->created_at->format('F d, Y h:ia') }}
                            @endif
                        </td>
                        <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>
                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
            <div class="box-footer clearfix">
                <div class="pull-left">
                    Showing {{$users->firstItem()}} to {{$users->lastItem()}} of {{$users->total()}} records.
                </div>
                <div class="pull-right">
                    {{$users->links()}}
                </div>
            </div>                
        @else
            <div class="box-body">
                <p>No record(s) found.</p>
            </div>
        @endif
    </div>
@endsection
