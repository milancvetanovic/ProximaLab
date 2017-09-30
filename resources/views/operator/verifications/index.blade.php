@extends('operator.layouts.master')

@section('content')

    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        <h1>Dashboard</h1>

        @include('operator.partials.labelSection')

        <h2>Verifications</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Generic Name</th>
                    <th>Manufacturer</th>
                    <th>Model</th>
                    <th>Serial</th>
                    <th>Date of verification</th>
                    <th>Operator</th>
                    <th>Test Report</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($verifications as $verification)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $verification->verified_device->generic_name }}</td>
                        <td>{{ $verification->verified_device->manufacturer }}</td>
                        <td>{{ $verification->verified_device->model }}</td>
                        <td>{{ $verification->verified_device->serial }}</td>
                        <td>{{$verification->dateOfVerification}}</td>
                        <td>{{$verification->user->name}}</td>
                        <td>{{$verification->testReport}}</td>
                    </tr>
                    <?php $i = $i + 1; ?>
                @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <button type="button" class="btn btn-success" id="add-button" data-toggle="modal" data-target="#addVerificationModal">
                Add New Verification
            </button>
        </div>
    </main>
    @include('operator.modals.addVerification')
@endsection