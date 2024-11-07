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
                class="menu single-menu  <?php echo e(Request::routeIs('userdashboard' || 'superadminmainboard') ? 'active' : ''); ?>">
                <?php if(Auth::user()->role_id == 1): ?>
                    <a href="<?php echo e(route('superadminmainboard')); ?>">
                    <?php else: ?>
                        <a href="<?php echo e(route('umtadmindashboard')); ?>">
                <?php endif; ?>
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
            <?php if(Auth::user()->role_id == 3 || Auth::user()->role_id == 4): ?>
                <li class="menu single-menu  <?php echo e(Request::routeIs('userdashboard') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('userdashboard')); ?>">
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
            <?php endif; ?>
            <?php if(Auth::user()->role_id == 1): ?>
                <li class="menu single-menu  <?php echo e(Request::routeIs('superadminuser_list') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('superadminuser_list')); ?>">
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
            <?php endif; ?>

            
            

        </ul>
    </nav>
</div>
<?php /**PATH /var/www/html/umt-ws/resources/views/general/inc/topbar.blade.php ENDPATH**/ ?>