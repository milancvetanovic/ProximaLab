@extends('operator.layouts.master')

@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

    <h1>Edit Measuring Device</h1>

    <hr/>

    <form action="/operator/measuring_devices/{{ $measuring_device->id }}" method="post">
        <input type="hidden" name="_method" value="patch">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="manufacturer">Manufacturer</label>
            <input type="text" name="manufacturer" id="manufacturer" class="form-control" value="{{ $measuring_device->manufacturer }}">
        </div>

        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" id="model" class="form-control" value="{{ $measuring_device->model }}">
        </div>

        <div class="form-group">
            <label for="serial">Serial Number</label>
            <input type="text" name="serial" id="serial" class="form-control" value="{{ $measuring_device->serial }}">
        </div>

        <button type="submit" class="btn btn-success">Edit Device</button>
    </form>
    </main>
@endsection
