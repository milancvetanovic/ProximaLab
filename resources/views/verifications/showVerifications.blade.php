@extends('layouts.master')

@section('content')
            <div class="col-8">
                <table class="table">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Generic name</th>
                            <th>Manufacturer</th>
                            <th>Model</th>
                            <th>Serial Number</th>
                            <th>Date of Verification</th>
                            <th>Operator</th>
                            <th>Test Report</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($verifications as $verification)
                        <tr>
                            <th>#</th>
                            <th>{{ $verification->verified_device->generic_name }}</th>
                            <th>{{ $verification->verified_device->manufacturer }}</th>
                            <th>{{ $verification->verified_device->model }}</th>
                            <th>{{ $verification->verified_device->serial }}</th>
                            <th>{{ $verification->dateOfVerification}}</th>
                            <th>{{ $verification->user->name}}</th>
                            <th>{{ $verification->testReport}}</th>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="col-4">

            </div>

@endsection
