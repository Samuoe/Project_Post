<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">The Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li>
                    <a class="nav-link" href="{{ route('article.index') }}">Tutti gli articoli</a>
                </li>
                @auth
                    <li>
                        <a class="nav-link" href="{{ route('article.create') }}">Inserisci un articolo</a>
                    </li>
                    @if (Auth::user()->is_admin)
                        <li>
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                        </li>
                    @endif
                    @if (Auth::user()->is_revisor)
                        <li>
                            <a class="nav-link" href="{{ route('revisor.dashboard') }}">Dashboard del revisore</a>
                        </li>
                    @endif
                    @if (Auth::user()->is_writer)
                        <li>
                            <a class="nav-link" href="{{ route('writer.dashboard') }}">Dashboard del redattore</a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Benvenut* {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">

                                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                    @csrf
                                    <button type="submit" class="btn nav-link">Logout</button>
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('careers') }}">Lavora con noi</a>
                            </li>
                        </ul>
                    </li>
                @endauth
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Benvenuto Ospite
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('register') }}" class="dropdown-item">Registrati</a></li>
                            <li><a href="{{ route('login') }}" class="dropdown-item">Accedi</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
            <form class="d-flex" action="{{ route('article.search') }}" method="GET">
                <input class="form-control me-2" type="search" placeholder="Cosa stai cercando?" aria-label="Search"
                    name="query">
                <button class="btn btn-outline-info" type="submit">Cerca</button>
            </form>
        </div>
    </div>
</nav>
