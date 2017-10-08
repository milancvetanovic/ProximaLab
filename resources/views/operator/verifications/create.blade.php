@extends('operator.layouts.master')

@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

        @include('partials.errors')

        <h1>Create New Verification</h1>

        <form action="/operator/verifications" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-md-4">
                    <label for="client">Client</label>
                    <select class="form-control" id="client" name="client">
                        @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="model">Verified Device</label>
                    <select name="verifiedDevice" id="verifiedDevice" class="form-control" disabled></select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="measuringDevice">Measuring Device</label>
                    <select class="form-control" id="measuringDevice" name="measuringDevice">
                        @foreach($measuringDevices as $measuringDevice)
                            <option value="{{ $measuringDevice->id }}">{{ $measuringDevice->model }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="1">Pass</option>
                        <option value="0">Fail</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="dateOfVerification">Date of Verification</label>
                    <input type="date" class="form-control" name="dateOfVerification" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                </div>
            </div>

        <div class="form-group">
            <div class="col-md-4">
                <label for="report">Report</label>
                <input type="file" class="form-control-file" id="report" name="report" accept="application/pdf">
            </div>
        </div>

            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </form>
    </main>
@endsection

