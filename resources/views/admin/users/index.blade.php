@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th class="text-center">
                        Image
                    </th>
                    <th class="text-center">
                        Name
                    </th>
                    <th class="text-center">
                        Permissions
                    </th>
                    <th class="text-center">
                        Status
                    </th>
                    <th class="text-center">
                        Action
                    </th>
                </thead>

                <tbody>
                    @if($users->count() > 0)
                        @foreach($users as $user)
                            <tr class="text-center">
                                <td>
                                    {{--  <img src="{{ asset($user->profile->avatar) }}" alt="" height="60px" width="60px" style="border-radius: 50%">  --}}
                                </td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    @if($user->admin)
                                        <a href="{{ route('users.not.admin',['id' => $user->id]) }}" class="btn btn-xs btn-danger">Remove Permission</a>
                                    @else
                                        <a href="{{ route('users.admin',['id' => $user->id]) }}" class="btn btn-xs btn-success">Make Admin</a>
                                    @endif
                                </td>
                                <td>
                                    <span style="color:blue">{{ $user->status }}</span>
                                </td>
                                <td>
                                    @if(Auth::id() !== $user->id)

                                        <a href="{{ route('users.delete',['id' => $user->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                        <a href="{{ route('users.activated',['id' => $user->id]) }}" class="btn btn-xs btn-primary">Activated</a>
                                        <a href="{{ route('users.banned',['id' => $user->id]) }}" class="btn btn-xs btn-warning">Banned</a>

                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <tr>
                            <th colspan="5" class="text-center">No Users</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>


@stop

