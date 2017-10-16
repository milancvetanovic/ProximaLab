@extends('operator.layouts.master')

@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

        <h1>Operator</h1>

        <div class="container">
            <p>Name: <b>{{ $operator->name }}</b></p>
            <p>Email: <b>{{ $operator->email }}</b></p>
            <p>Number of verifications: <b>{{ $operator->verifications->count() }}</b></p>
            <div class="row">
                <div class="col-sm-2">
                    <form action="/operator/operators/{{ $operator->id }}/edit" method="get">
                    <button  type="submit" class="btn btn-outline-success" id="edit-button">
                        Edit
                    </button>
                    </form>
                </div>
                <div class="col-sm-2 mr-auto">
                    <form action="/operator/operators/{{ $operator->id }}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}

                        <button type="submit" class="btn btn-outline-danger">Delete Operator</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
