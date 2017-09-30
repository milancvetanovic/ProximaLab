@extends('operator.layouts.master')

@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

        <h1>Measuring Device</h1>

        <div class="container">
            <p>Manufacturer: <b>{{ $measuring_device->manufacturer }}</b></p>
            <p>Model: <b>{{ $measuring_device->model }}</b></p>
            <p>Serial Number: <b>{{ $measuring_device->serial }}</b></p>
            <div class="row">
                <div class="col-sm-2">
                    <button type="button" class="btn btn-outline-success" id="add-button" data-toggle="modal" data-target="#editMeasuringDeviceModal">
                        Edit
                    </button>
                </div>
                <div class="col-sm-2 ml-auto">
                    <form action="/operator/measuring_devices/{{ $measuring_device->id }}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}

                        <button type="submit" class="btn btn-outline-danger">Delete Device</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@include('operator.modals.editMeasuringDevice')
@endsection
