<div class="navbar d-flex justify-content-end align-items-center px-2 text-secondary">

    <!-- User Dropdown -->
    <div class="navbar-1">
        <ul class="nav">
            <li class="nav-item">
                <div class="dropdown p-2 d-flex justify-content-center align-items-center">
                    <a class="nav-link text-black btn dropdown-toggle p-2 d-flex" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user() }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end p-0" style="border: none;">
                        <a class="dropdown-item admin-nav p-2" href="" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <svg class="ms-3" xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
                            Logout
                        </a>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</div>