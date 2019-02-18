@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Subscribers
                </th>
                </thead>

                <tbody>
                @foreach($subsribes as $subsribe)
                    <tr>
                        <td>
                            {{ $subsribe->email }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
