<nav class="navbar navbar-light bg-white border-bottom px-3">
    <button class="btn btn-outline-secondary d-lg-none" id="sidebarToggle">
        <i class="bi bi-list"></i>
    </button>

    <div class="ms-auto dropdown">
        <a href="#"
           class="d-flex align-items-center text-decoration-none text-dark dropdown-toggle"
           data-bs-toggle="dropdown">

            @if (auth()->user()?->avatar)
                <img src=""
                     alt="{{ auth()->user()->name }}"
                     class="rounded-circle me-2"
                     width="32" height="32"
                     style="object-fit: cover;">
            @else
                <i class="bi bi-person-circle fs-4 me-2"></i>
            @endif

            <span>{{ auth()->user()->name ?? 'Guest' }}</span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>