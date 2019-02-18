@extends('master-upload')

@section('master-content')
    <table class="table table-bordered table-hover table-striped w100" cellspacing="0" id="datatable"></table>
@endsection

@section('footer')
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
