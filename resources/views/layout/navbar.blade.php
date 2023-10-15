<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ([
                    'courts.index' => 'Courts',
                ] as $route => $title)
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is($route) ? 'active' : '' }}"
                            @if (Route::is($route))
                                aria-current="page"
                            @endif
                            href="{{ route($route) }}">{{ $title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>