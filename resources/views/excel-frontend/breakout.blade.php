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
                    url : '{{ route('frontend.breakout-post') }}',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                },
                columns : [
                    { title: 'Saham', data: 'saham', name: 'saham', defaultContent: '-'},
                    { title: 'Date Time', data: 'datetime', name: 'datetime', defaultContent: '-', class: 'text-center'},
                    { title: 'Ranking Volume', data: 'ranking_volume', name: 'ranking_volume', defaultContent: '-', class: 'text-center' },
                    { title: 'Close', data: 'close', name: 'close', defaultContent: '-', class: 'text-center'},
                    { title: 'Change', data: 'change', name: 'change', defaultContent: '-', class: 'text-center' },
                    { title: 'Buy Volume', data: 'buy_volume', name: 'buy_volume', searchable: false, orderable: false, class: 'text-center'},
                    { title: 'Sell Volume', data: 'sell_volume', name: 'sell_volume', searchable: false, orderable: false, class: 'text-center'},
                    { title: 'Today Volume', data: 'today_volume', name: 'today_volume', defaultContent: '-', class: 'text-center' },
                    { title: 'Average Volume', data: 'average_volume', name: 'average_volume', defaultContent: '-', class: 'text-center' },

                ],
                bInfo: false,
                pagingType: 'simple',
            });
        });
    </script>
@endsection
