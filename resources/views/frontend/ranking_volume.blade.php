@extends('layouts.frontend')

@section('content')
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Ranking Volume</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <section class="sample-text-area" style="background-color: ghostwhite">
        <div class="container box_1170">
            <a href="/" class="btn btn-primary">Back</a>
            <table class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" cellspacing="0" id="datatable"></table>
        </div>
    </section>
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
                paging:false,
                order: [2, 'asc']
            });
        });
    </script>
@endsection
