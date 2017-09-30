@extends('operator.layouts.master')

@section('content')

    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        <h1>Dashboard</h1>

        @include('operator.partials.labelSection')

        <h2>Clients</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($clients as $client)
                    <tr>
                        <td><a href="/operator/clients/{{ $client->id }}">{{ $i }}</a></td>
                        <td><a href="/operator/clients/{{ $client->id }}">{{ $client->name }}</a></td>
                        <td><a href="/operator/clients/{{ $client->id }}">{{ $client->email }}</a></td>
                        <td><a href="/operator/clients/{{ $client->id }}">{{ $client->address}}</a></td>
                    </tr>
                    <?php $i = $i + 1; ?>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pt-3">
            <form action="/operator/clients/create" method="get">
            <button type="submit" class="btn btn-success" id="edit-button">
                Add New Client
            </button>
            </form>
        </div>
    </main>
@endsection