<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="//proxima-medical.rs/wp-content/uploads/2016/12/StarIco-1.png" type="image/x-icon">

    <title>ProximaLab</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/bootstrap-4.0.0-beta-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/open-iconic/font/css/open-iconic-bootstrap.css">
    <link rel="stylesheet" href="/css/app.css">

    <style>
        th a {
            display: block;
        }
    </style>

</head>

<body>

@if(session()->has('message'))
    <div class="flash flash-success">
        {{session()->get('message')}}
    </div>
@endif

@include('operator.partials.navbar')

<div class="container-fluid">
    <div class="row">
        @include('operator.partials.sidebar')

        @yield('content')
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<script src="/bootstrap-4.0.0-beta-dist/js/bootstrap.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        $('#flash-message').fadeOut(7000);
    });
</script>

<script type="text/javascript">
    var e = document.getElementById("client");

    function addPlaceholder() {
        var target = document.getElementById("verifiedDevice");

        target.removeAttribute("disabled");
    }

    e.addEventListener("input", addPlaceholder, false);
</script>

<script type="text/javascript">
    function updateTransition() {
        var el = document.querySelector(".flash");

        if (el){
            el.className = "flash flash-success flash-hide"
            return el;
        } else {
            window.clearInterval(intervalID);
        }
    }

    var intervalID = window.setInterval(updateTransition, 2000);
</script>

</body>
</html>
