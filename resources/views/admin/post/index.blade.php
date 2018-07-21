@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Image
                </th>
                <th>
                    Title
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Trash
                </th>
                </thead>

                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td><img src="{{ $post->featured  }}" alt="{{ $post->title }}" width="100px" height="50px"></td>

                        <td>{{ $post->title }}</td>

                        <td>

                            <a href="{{route('post.edit', ['$id' => $post->id])}}" class="btn btn-xs btn-info">Edit</a>

                        </td>

                        <td>

                            <a href="{{route('post.delete', ['$id' => $post->id])}}" class="btn btn-xs btn-danger">Trashed</a>

                        </td>

                        {{--QUERY DELETE PERMANENT--}}
                        {{--<td>--}}

                            {{--<a href="{{route('post.kill', ['$id' => $post->id])}}" class="btn btn-danger">Kill</a>--}}

                        {{--</td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
            <nav aria-label="Page navigation" class="text-center">
                <ul class="pagination">
                    <li>{!! $posts->render() !!}</li>
                </ul>
            </nav>
        </div>
    </div>
@stop

