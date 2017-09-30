<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="#">
        <img src="//proxima-medical.rs/wp-content/uploads/2016/12/StarIco-1.png" width="30" height="30" class="d-inline-block align-top" alt="">
        ProximaLab
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/operator/verifications">Verifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/operator/clients">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/operator/operators">Operators</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/operator/measuring_devices">Measuring Devices</a>
            </li>
        </ul>
        <div class="nav-item">
            <a href="/logout" class="nav-link">{{ auth()->user()->name }}</a>
        </div>
    </div>
</nav>