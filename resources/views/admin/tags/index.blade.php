@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Tags Name
                </th>
                <th>
                    Editing
                </th>
                <th>
                    Deleting
                </th>
                </thead>

                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td>
                            {{ $tag->tag }}
                        </td>
                        <td>
                            <a href="{{ route('tags.edit', ['id' => $tag->id]) }}" class="btn btn-xs btn-info">
                                Edit
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('tags.delete', ['id' => $tag->id]) }}" class="btn btn-xs btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@stop

