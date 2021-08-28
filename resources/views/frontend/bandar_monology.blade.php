@extends('layouts.frontend')

@section('content')
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Bandarmology</h2>
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
                    url : '{{ route('frontend.trend-reversal-post') }}',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                },
                columns : [
                    { title: 'Saham', data: 'saham', name: 'saham', defaultContent: '-', class: 'text-center'},
                    { title: 'Date Time', data: 'datetime', name: 'datetime', defaultContent: '-', class: 'text-center'},
                    { title: 'Close', data: 'close', name: 'close', defaultContent: '-', class: 'text-center'},
                    { title: 'Change', data: 'change', name: 'change', defaultContent: '-', class: 'text-center' },
                    { title: 'Volume', data: 'volume', name: 'volume', searchable: false, orderable: false, class: 'text-center'},
                    { title: 'Condition', data: 'condition', name: 'condition', searchable: false, orderable: false, class: 'text-center'},
                    { title: 'Bandarmology', data: 'bandarmology', name: 'bandarmology', defaultContent: '-', class: 'text-center' },
                ],
                bInfo: false,
                paging:false,
                order: [6, 'asc']
            });
        });
    </script>
@endsection
