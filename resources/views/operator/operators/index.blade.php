@extends('operator.layouts.master')

@section('content')

    <main class="col-sm-9 col-md-9 pt-3" role="main">
        <h1>Dashboard</h1>

        @include('operator.partials.labelSection')

        <h2>Operators</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th># of Verifications</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($operators as $operator)
                    <tr>
                        <td>{{ $i }}</td>
                        <td><a href="/operator/operators/{{ $operator->id }}">{{ $operator->name }}</a></td>
                        <td>{{ $operator->email }}</td>
                        <td>{{ $operator->verifications->count() }}</td>
                    </tr>
                    <?php $i = $i + 1; ?>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pt-3">
            <button type="button" class="btn btn-success" id="add-button" data-toggle="modal" data-target="#addOperatorModal">
                Add New Operator
            </button>
        </div>
    </main>
    @include('operator.modals.addOperator')
@endsection