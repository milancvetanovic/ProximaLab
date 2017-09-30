@extends('operator.layouts.master')

@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

        <h1>Operator</h1>

        <div class="container">
            <p>Name: <b>{{ $client->name }}</b></p>
            <p>Email: <b>{{ $client->email }}</b></p>
            <p>Address: <b>{{ $client->address }}</b></p>
            <div class="row">
                <div class="col-sm-2">
                    <form action="/operator/clients/{{ $client->id }}/edit" method="get">
                        <button  type="submit" class="btn btn-outline-success" id="edit-button">
                            Edit
                        </button>
                    </form>
                </div>
                <div class="col-sm-2 ml-auto">
                    <form action="/operator/clients/{{ $client->id }}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}

                        <button type="submit" class="btn btn-outline-danger">Delete Client</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
