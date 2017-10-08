@extends('operator.layouts.master')

<?php ?>

@section('content')

    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        <h1>Dashboard</h1>

        @include('operator.partials.labelSection')

        <h2>Verifications</h2>
        <div class="table-responsive">
            <table class="table">
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
                    <tr class="@if($verification->status)
                            table-success @else table-danger
                        @endif">
                        <td>{{ $i }}</td>
                        <td>{{ $verification->verified_device->generic_name }}</td>
                        <td>{{ $verification->verified_device->manufacturer }}</td>
                        <td>{{ $verification->verified_device->model }}</td>
                        <td>{{ $verification->verified_device->serial }}</td>
                        <td>{{$verification->dateOfVerification}}</td>
                        <td>{{$verification->user->name}}</td>
                        <td class="text-center"><a href="{{ Storage::disk('public')->url($verification->testReport) }}" target="_blank" rel="noopener" style="color: #212529">
                                <span class="oi oi-file" title="file" aria-hidden="true"></span>
                            </a></td>
                    </tr>
                    <?php $i = $i + 1; ?>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pt-3">
            <form action="/operator/verifications/create" method="get">
                <button type="submit" class="btn btn-success" id="edit-button">
                    Add New Verification
                </button>
            </form>
        </div>
    </main>
    @include('operator.modals.addVerification')
@endsection