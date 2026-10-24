<nav class="navbar">
    <div class="navbar-inner">
        <a href="{{ url('/') }}" class="navbar-brand">📚 Bibliotheque</a>

        <a href="{{ url('/') }}" class="nav-link">Accueil</a>

        @auth
            <a href="{{ route('auteurs.index') }}" class="nav-link">Auteurs</a>
            <a href="{{ route('livres.index') }}" class="nav-link">Livres</a>
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>

            <div class="navbar-right">
                <a href="{{ route('profile.edit') }}" class="nav-link {{ request()->routeIs('profile.*') ? 'active' : '' }}">{{ Auth::user()->name }}</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link">Logout</button>
                </form>
            </div>
        @else
            <div class="navbar-right">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </div>
        @endauth
    </div>
</nav>
