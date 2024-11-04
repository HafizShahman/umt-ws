<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>KPJ Rating System - Login</title>
    <link rel="icon" type="image/x-icon" href="https://www.kpjhealth.com.my/media/kpj-logo.png" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/assets/css/plugins.css" rel="stylesheet')); ?>" type="text/css" />
    <link href="<?php echo e(asset('assets/assets/css/authentication/form-1.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/assets/css/forms/theme-checkbox-radio.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/assets/css/forms/switches.css')); ?>">
</head>

<body class="form">


    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEZ52mSH4rbv350MGSXPMRRqlNCPDDnlcyxQ&s"
                            alt="logo">
                        <h1 class="">Log In to <a href="<?php echo e(route('mainpage')); ?>"><span class="brand-name">UMT
                                    Weather Station Kenyir</span></a></h1>
                        <p class="signup-link">New Here? <a href="<?php echo e(URL::to('register')); ?>">Create an account</a></p>
                        <form class="text-left" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form">
                                <?php if(session('status')): ?>
                                    <div>
                                        <?php echo e(session('status')); ?>

                                    </div>
                                <?php endif; ?>

                                <?php if($errors->any()): ?>
                                    <div>
                                        <div><?php echo e(__('Whoops! Something went wrong.')); ?></div>
                                        <div><?php echo e(__('Wrong email or password')); ?></div>

                                    </div>
                                <?php endif; ?>
                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="email" name="email" type="email" class="form-control"
                                        placeholder="Email">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2">
                                        </rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control"
                                        placeholder="Password">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Show Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                                    </div>

                                </div>

                                <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                            <input type="checkbox" class="new-control-input" name="remember">
                                            <span class="new-control-indicator"></span>Keep me logged in
                                        </label>
                                    </div>
                                </div>

                                <div class="field-wrapper">
                                    <?php if(Route::has('password.request')): ?>
                                        <a href="<?php echo e(route('password.request')); ?>" class="forgot-pass-link">Forgot
                                            Password?</a>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </form>
                        

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEZ52mSH4rbv350MGSXPMRRqlNCPDDnlcyxQ&s"
                alt="logo" height="auto" width="50%" style="margin-left: 25%; margin-top: 20%;">
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(asset('assets/assets/js/libs/jquery-3.1.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bootstrap/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(asset('assets/assets/js/authentication/form-1.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\umt\resources\views/auth/login.blade.php ENDPATH**/ ?>