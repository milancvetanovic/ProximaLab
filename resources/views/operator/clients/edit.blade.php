@extends('operator.layouts.master')

@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        @include('partials.errors')

        <h1>Edit Client's details</h1>

        <form action="/operator/clients/{{ $client->id }}" method="post">
            <input type="hidden" name="_method" value="patch">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-4">
                    <label for="manufacturer">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $client->name }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="model">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ $client->email }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="serial">Address</label>
                </div>

                <div class="col-md-4">
                    <textarea name="address" id="address" cols="45" rows="5">{{ $client->address }}</textarea>
                </div>
            </div>

            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Edit</button>
            </div>
        </form>
    </main>
@endsection
