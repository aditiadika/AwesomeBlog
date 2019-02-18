@extends('layouts.app')


@section('content')
    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Import Boom
        </div>
        <div class="panel-body">
            <form action="{{ route('upload.boom') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Boom</label>
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Import
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="panel panel-default">
        <div class="panel-heading">
            <form action="{{ route('delete.boom') }}" method="post">
                {{ csrf_field() }}
                <button class="btn btn-xs btn-danger">
                    Delete
                </button>
            </form>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-hover table-striped w100" cellspacing="0" id="datatable"></table>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                    method: 'POST',
                    url : '{{ route('frontend.boom-post') }}',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                },
                columns : [
                    { title: 'Saham', data: 'saham', name: 'saham', defaultContent: '-', class: 'text-center'},
                    { title: 'Date Time', data: 'datetime', name: 'datetime', defaultContent: '-', class: 'text-center'},
                    { title: 'Close', data: 'close', name: 'close', defaultContent: '-', class: 'text-center'},
                    { title: 'Change', data: 'change', name: 'change', defaultContent: '-', class: 'text-center' },
                    { title: 'Volume', data: 'volume', name: 'volume', class: 'text-center'},
                    { title: 'Break', data: 'break', name: 'break', class: 'text-center'},
                    { title: 'Resistance Level', data: 'resistance_level', name: 'resistance_level', defaultContent: '-', class: 'text-center' },
                    { title: 'Secure', data: 'secure', name: 'secure', defaultContent: '-', class: 'text-center'},
                ],
                bInfo: false,
                pagingType: 'simple',
            });
        });
    </script>
@endsection

