<nav class="navbar navbar-expand-sm bg-dark">
    <a class="navbar-brand" href="/" style="color:white;">PADP721</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item nav-link" style="color:white;">
            I Putu Angga Darma Putra - 1705551054
        </li>
        @if (Auth::check())
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white;">Halo, {{ Auth::user()->name }}!</a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="logout" class="dropdown-item">Logout</a>
            </div>
        </li>
        @else
            @unless (Request::is('login') || Request::is('daftar'))
                <script>window.location = "login";</script>
            @endunless
        @endif
    </ul>
</nav>