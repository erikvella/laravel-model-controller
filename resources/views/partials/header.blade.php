<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'mieifilm' ? 'active' : '' }}"
                        href="{{ route('mieifilm') }}">I miei film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'migliorifilm' ? 'active' : '' }}"
                        href="{{ route('migliorifilm') }}">I migliori film</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
