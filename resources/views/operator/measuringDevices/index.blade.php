@extends('operator.layouts.master')


@section('content')

    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

        <h1>Dashboard</h1>

        @include('operator.partials.labelSection')

        <h2>Measuring Devices</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Manufacturer</th>
                    <th>Model</th>
                    <th>Serial Number</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($measuringDevices as $device)
                    <tr>
                        <th><a href="/operator/measuring_devices/{{$device->id}}">{{ $i }}</a></th>
                        <th><a href="/operator/measuring_devices/{{$device->id}}">{{ $device->manufacturer }}</a></th>
                        <th><a href="/operator/measuring_devices/{{$device->id}}">{{ $device->model }}</a></th>
                        <th><a href="/operator/measuring_devices/{{$device->id}}">{{ $device->serial }}</a></th>
                    </tr>
                    <?php $i = $i + 1; ?>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pt-3">
            <button type="button" class="btn btn-success" id="add-button" data-toggle="modal" data-target="#addMeasuringDeviceModal">
                Add New Device
            </button>
        </div>
    </main>
    @include('operator.modals.addMeasuringDevice')
@endsection