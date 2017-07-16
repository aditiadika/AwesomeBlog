@extends('layouts.app')


@section('content')
    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Blog Settings Page
        </div>
        <div class="panel-body">
            <form action="{{ route('setting.update') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Site name</label>
                    <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" value="{{ $settings->address }}" name="address" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="name">Contact Number</label>
                    <input type="text" value="{{ $settings->contact_number }}" name="contact_number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Contact Email</label>
                    <input type="text" value="{{ $settings->contact_email }}" name="contact_email" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update Site Setting
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

