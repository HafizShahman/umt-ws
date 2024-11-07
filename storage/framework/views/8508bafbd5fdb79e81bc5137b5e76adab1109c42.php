<div class="header-container">
    <header class="header navbar navbar-expand-sm">

        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg></a>

        <div class="nav-logo align-self-center">
            <a class="navbar-brand" href="#"><img alt="logo"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEZ52mSH4rbv350MGSXPMRRqlNCPDDnlcyxQ&s"> <span
                    class="navbar-brand-name">UMT Weather Station</span></a>
        </div>

        <ul class="navbar-item flex-row mr-auto">
            <li class="nav-item align-self-center search-animated">

            </li>
        </ul>

        <ul class="navbar-item flex-row nav-dropdowns">
            <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <div class="media-body align-self-center">
                            <h6><?php echo e(Auth::user()->name); ?></h6>
                            
                        </div>
                        <?php
                            $user = DB::table('users')
                                ->where('id', Auth::user()->id)
                                ->latest('id')
                                ->first();
                        ?>
                        <?php if(isset($user->profile_photo_path)): ?>
                            <img src="<?php echo e(asset($user->profile_photo_path)); ?>" class="img-fluid" alt="admin-profile">
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/assets/img/90x90.jpg')); ?>" class="img-fluid"
                                alt="admin-profile">
                        <?php endif; ?>
                        
                    </div>
                </a>

                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="dropdown-item">
                        <a href="<?php echo e(route('profile')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg> <span> Profile</span>
                        </a>
                    </div>
                    
                    <div class="dropdown-item">
                        <a href="<?php echo e(route('logout')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg> <span>Log Out</span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
<?php /**PATH /var/www/html/umt-ws/resources/views/general/inc/nav.blade.php ENDPATH**/ ?>