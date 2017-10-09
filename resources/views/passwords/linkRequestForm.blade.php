<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password - ProximaLab</title>
    <link rel="shortcut icon" href="//proxima-medical.rs/wp-content/uploads/2016/12/StarIco-1.png" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/bootstrap-4.0.0-beta-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<div class="container" id="main">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-8">
            <div class="col-md-8">
                @if(session()->has('message'))
                    <div class="alert alert-success">{{session()->get('message')}}</div>
                @endif
                <img src="/images/proximaLogo.png" alt="logo" width="360">
                <h1 id="registerHeader">Reset Password</h1>
            </div>

            <form class="form-horizontal" role="form" action="/password/email" method="POST">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="email" class="col-md-8">Email</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="e.g., {{Faker\Factory::create()->email}}">
                    </div>
                </div>

                @include('partials.errors')

                <div class="col-md-8">
                    <button type="submit" class="btn btn-success" style="cursor: pointer">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="/bootstrap-4.0.0-beta-dist/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>

