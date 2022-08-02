<!-- Fixed navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
    {{-- <img src="img/seterum.png"> --}}
    <a class="navbar-brand" href="#"></a>
    <!-- Navbar brand yo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="container collapse navbar-collapse justify-content-center" id="navbarTop" style="font-size: 16px;">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a> </li>
            <li class="nav-item"><a class="nav-link {{ ($active === "control") ? 'active' : '' }}" href="/control">Control</a> </li>
            <li class="nav-item"><a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a> </li>
        </ul>
    </div>
    </div>
</nav>