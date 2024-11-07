<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEZ52mSH4rbv350MGSXPMRRqlNCPDDnlcyxQ&s"
                    class="navbar-logo" alt="logo">
            </li>
            <li class="nav-item theme-text">
                <p>UMT Weather Station</p>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="topAccordion">

            <li
                class="menu single-menu  {{ Request::routeIs('userdashboard' || 'superadminmainboard') ? 'active' : '' }}">
                @if (Auth::user()->role_id == 1)
                    <a href="{{ route('superadminmainboard') }}">
                    @else
                        <a href="{{ route('umtadmindashboard') }}">
                @endif
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    <span>Dashboard</span>
                </div>
                </a>
            </li>
            @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 4)
                <li class="menu single-menu  {{ Request::routeIs('userdashboard') ? 'active' : '' }}">
                    <a href="{{ route('userdashboard') }}">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-clipboard">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                </path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span>Graph Table</span>
                        </div>
                    </a>
                </li>
            @endif
            @if (Auth::user()->role_id == 1)
                <li class="menu single-menu  {{ Request::routeIs('superadminuser_list') ? 'active' : '' }}">
                    <a href="{{ route('superadminuser_list') }}">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-clipboard">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                </path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span>User List</span>
                        </div>
                    </a>
                </li>
            @endif

            {{-- table --}}
            {{-- <li class="menu single-menu {{ Request::routeIs('profile') ? 'active' : '' }} ">
                <a href="#tables" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-layout">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <line x1="9" y1="21" x2="9" y2="9"></line>
                        </svg>
                        <span>Tables</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="tables" data-parent="#topAccordion">
                    <li class=" {{ Request::routeIs('profile') ? 'active' : '' }}">
                        <a href="{{ route('profile') }}"> Update Table Form </a>
                    </li>
                </ul>
            </li> --}}

        </ul>
    </nav>
</div>
