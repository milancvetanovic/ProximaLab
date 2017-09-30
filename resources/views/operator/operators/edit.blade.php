@extends('operator.layouts.master')

@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

        <h1>Edit Operator</h1>

        <hr/>

        <form action="/operator/operators/{{ $operator->id }}" method="post">
            <input type="hidden" name="_method" value="patch">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $operator->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ $operator->email }}">
            </div>

            <button type="submit" class="btn btn-success">Edit Operator</button>
        </form>
    </main>
@endsection
