@extends('operator.layouts.master')

@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

        @include('partials.errors')

        <h1>Create New Client</h1>

        <form action="/operator/clients" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-4">
                    <label for="manufacturer">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="{{ Faker\Factory::create()->name }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="model">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="{{ Faker\Factory::create()->email }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="model">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label for="serial">Address</label>
                </div>

                <div class="col-md-4">
                    <textarea name="address" id="address" cols="45" rows="5"></textarea>
                </div>
            </div>

            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </form>
    </main>
@endsection
