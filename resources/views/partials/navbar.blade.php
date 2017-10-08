<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="#">
        <img src="//proxima-medical.rs/wp-content/uploads/2016/12/StarIco-1.png" width="30" height="30" class="d-inline-block align-top" alt="">
        ProximaLab
    </a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/verifications">Verifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/myDevices">My Devices</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0 pr-5">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        @if(auth()->check())
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ auth()->user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a href="/logout" class="dropdown-item">Logout</a>
            </div>
            @else
                <div class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                </div>
        @endif

        </div>
    </div>
</nav>