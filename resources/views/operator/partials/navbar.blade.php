<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">ProximaLab</a>
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