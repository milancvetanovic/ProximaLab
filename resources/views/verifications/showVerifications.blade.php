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
                            <td>{{ $verification->verified_device->generic_name }}</td>
                            <td>{{ $verification->verified_device->manufacturer }}</td>
                            <td>{{ $verification->verified_device->model }}</td>
                            <td>{{ $verification->verified_device->serial }}</td>
                            <td>{{$verification->dateOfVerification}}</td>
                            <td>{{$verification->user->name}}</td>
                            <td>{{$verification->testReport}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="col-4">

            </div>

@endsection
