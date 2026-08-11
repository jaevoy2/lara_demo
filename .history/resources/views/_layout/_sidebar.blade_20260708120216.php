<nav id="sidebar" class="bg-dark text-white p-3">
    <a href="{{ url('/') }}" class="d-flex align-items-center mb-3 text-white text-decoration-none">
        <span class="fs-5 fw-bold">{{ config('app.name') }}</span>
    </a>
    <hr class="text-secondary">

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}"
               class="nav-link sidebar-link text-white {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('users.index') }}"
               class="nav-link sidebar-link text-white {{ request()->routeIs('users.*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Users
            </a>
        </li>

        {{-- Collapsible submenu example --}}
        <li class="nav-item">
            <a href="#settingsSubmenu" data-bs-toggle="collapse"
               class="nav-link sidebar-link text-white d-flex justify-content-between align-items-center {{ request()->routeIs('settings.*') ? 'active' : '' }}">
                <span><i class="bi bi-gear me-2"></i> Settings</span>
                <i class="bi bi-chevron-down small"></i>
            </a>
            <div class="collapse {{ request()->routeIs('settings.*') ? 'show' : '' }}" id="settingsSubmenu">
                <ul class="nav flex-column ms-3">
                    <li><a href="{{ route('settings.profile') }}" class="nav-link text-white-50">Profile</a></li>
                    <li><a href="{{ route('settings.security') }}" class="nav-link text-white-50">Security</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>