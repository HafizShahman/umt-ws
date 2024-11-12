<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>UMT Weather Station Kenyir - Login</title>
    <link rel="icon" type="image/x-icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Logo_Rasmi_UMT.png/1200px-Logo_Rasmi_UMT.png" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <style>
        body {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: URL({{ asset('assets/assets/auth/weatherstation.png') }});

        }

        body {
            background-color: rgb(228, 229, 247);
        }

        .social-login img {
            width: 24px;
        }

        a {
            text-decoration: none;
        }

        .card {
            font-family: sans-serif;
            width: 300px;
            margin-left: auto;
            margin-right: 30%;
            margin-top: 5em;
            margin-bottom: 3em;
            border-radius: 10px;
            background-color: #ffff;
            padding: 1.8rem;
            box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            font-weight: bold;
            margin: 0;
        }

        .subtitle {
            text-align: center;
            font-weight: bold;
        }

        .btn-text {
            margin: 0;
        }

        .or {
            text-align: center;
            font-weight: bold;
            border-bottom: 2px solid rgb(245 239 239);
            line-height: 0.1em;
            margin: 25px 0;
        }

        .or span {
            background: #fff;
            padding: 0 10px;
        }

        .email-login {
            display: flex;
            flex-direction: column;
        }

        .email-login label {
            color: rgb(170 166 166);
        }

        input[type="text"],
        input[type="password"] {
            padding: 15px 20px;
            margin-top: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }

        .cta-btn {
            background-color: rgb(69, 69, 185);
            color: white;
            padding: 18px 20px;
            margin-top: 10px;
            margin-bottom: 20px;
            width: 100%;
            border-radius: 10px;
            border: none;
        }

        .forget-pass {
            text-align: center;
            display: block;
        }
    </style>
</head>

<body class="form">

    <div class="card">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <center>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Logo_Rasmi_UMT.png/1200px-Logo_Rasmi_UMT.png"
                    alt="logo"height="auto" width="30%">
            </center>
            <h2 class="title">UMT Stesen Penyelidikan Alami Kenyir</h2>
            <p class="subtitle">Don't have an account? <a href="{{ URL::to('register') }}"> Sign Up</a></p>

            <p class="or"><span>or</span></p>

            <div class="email-login">
                <label for="email"> <b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
            </div>
            <button class="cta-btn" type="submit">Log In</button>
            <a class="forget-pass" href="{{ route('password.request') }}">Forgot password?</a>
        </form>
    </div>

    {{-- <div class="form-container">
        <div class="card">
            <div class="form-form">
                <div class="form-form-wrap">
                    <div class="form-container">
                        <div class="form-content">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Logo_Rasmi_UMT.png/1200px-Logo_Rasmi_UMT.png"
                                alt="logo"height="auto" width="30%">
                            <h1 class=""><span class="brand-name">UMT Stesen Penyelidikan Alami Kenyir</span></h1>
                            <p class="signup-link">New Here? <a href="{{ URL::to('register') }}">Create an account</a>
                            </p>
                            <form class="text-left" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form">
                                    @if (session('status'))
                                        <div>
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                        <div>
                                            <div>{{ __('Whoops! Something went wrong.') }}</div>
                                            <div>{{ __('Wrong email or password') }}</div>

                                        </div>
                                    @endif
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
                                            <rect x="3" y="11" width="18" height="11" rx="2"
                                                ry="2">
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
                                            <button type="submit" class="btn btn-primary" value="">Log
                                                In</button>
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
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="forgot-pass-link">Forgot
                                                Password?</a>
                                        @endif
                                    </div>

                                </div>
                            </form>
                            <p class="terms-conditions">© 2020 All Rights Reserved. <a
                                    href="https://revenuediscovery.com">Revenue Discovery</a> is a
                                product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a
                                    href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <img src="{{ asset('assets/assets/auth/weatherstation.png') }}" alt="logo" height="auto"
                width="auto">
        </div>
    </div> --}}


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/assets/js/authentication/form-1.js') }}"></script>

</body>

</html>
