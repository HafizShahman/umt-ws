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

            <li class="menu single-menu">
                @if (Auth::user()->role_id == 1)
                    <a href="{{ route('superadmindashboard') }}">
                @endif
                @if (Auth::user()->role_id == 2)
                    <a href="{{ route('umtdashboard') }}">
                @endif
                @if (Auth::user()->role_id == 3)
                    <a href="{{ route('user1dashboard') }}">
                @endif
                @if (Auth::user()->role_id == 4)
                    <a href="{{ route('user2dashboard') }}">
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
            <li class="menu single-menu">
                @if (Auth::user()->role_id == 1)
                    <a href="{{ route('superadminchart') }}">
                @endif
                @if (Auth::user()->role_id == 2)
                    <a href="{{ route('umtadminchart') }}">
                @endif
                @if (Auth::user()->role_id == 3)
                    <a href="{{ route('uochart') }}">
                @endif
                @if (Auth::user()->role_id == 4)
                    <a href="{{ route('utchart') }}">
                @endif
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-bar-chart">
                        <line x1="12" y1="20" x2="12" y2="10"></line>
                        <line x1="18" y1="20" x2="18" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="16"></line>
                    </svg>
                    <span>Chart</span>
                </div>
                </a>
            </li>
            @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::user()->role_id == 4)
                <li class="menu single-menu">
                    @if (Auth::user()->role_id == 1)
                        <a href="{{ route('superadmintable') }}">
                    @endif
                    @if (Auth::user()->role_id == 2)
                        <a href="{{ route('umttable') }}">
                    @endif
                    @if (Auth::user()->role_id == 4)
                        <a href="{{ route('uttable') }}">
                    @endif
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-clipboard">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                            </path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        <span>Table</span>
                    </div>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>
