<nav id="sidebar" class="bg-primary text-white p-3">
    <a href="" class="d-flex align-items-center mb-3 text-white text-decoration-none">
        <span class="fs-5 fw-bold">{{ config('app.name') }}</span>
    </a>
    <!-- <hr class="text-secondary"> -->

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href=""
               class="nav-link sidebar-link text-white {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('student-page') }}"
               class="nav-link sidebar-link text-white {{ request()->routeIs('users.*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Students
            </a>
        </li>

        {{-- Collapsible submenu example --}}
        <li class="nav-item">
            <a href="#settingsSubmenu" data-bs-toggle="collapse"
               class="nav-link sidebar-link text-white d-flex justify-content-between align-items-center {{ request()->routeIs('settings.*') ? 'active' : '' }}">
                <span><i class="bi bi-gear me-2"></i>Users</span>
                <i class="bi bi-chevron-down small"></i>
            </a>
            <div class="collapse" id="settingsSubmenu">
                <ul class="nav flex-column ms-3">
                    <li><a href="" class="nav-link text-white-50">Profile</a></li>
                    <li><a href="" class="nav-link text-white-50">Security</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>