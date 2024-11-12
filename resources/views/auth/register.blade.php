<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>UMT Weather Station Kenyir - Register</title>
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
            margin-top: 3em;
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
        input[type="password"],
        select {
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
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <center>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Logo_Rasmi_UMT.png/1200px-Logo_Rasmi_UMT.png"
                    alt="logo"height="auto" width="30%">
            </center>
            <h2 class="title">UMT Stesen Penyelidikan Alami Kenyir</h2>
            <p class="subtitle">Already have an account? <a href="{{ URL::to('login') }}"> Sign In</a></p>

            <p class="or"><span>or</span></p>

            <div class="email-login">
                <label for="name"> <b>Name</b></label>
                <input type="text" placeholder="Enter Email" name="name" required>
                <label for="email"> <b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <label for="confirmed"><b>Confirm Password</b></label>
                <input type="password" placeholder="Enter Confirm Password" name="confirmed" required>
                <label for="user_type"><b>User Type</b></label>
                <select name="user_type" id="user_type">
                    <option value="" disabled selected>Select User Type</option>
                    <option value="Student">Student</option>
                    <option value="Researcher">Researcher</option>
                    <option value="Staff">Staff</option>
                </select>
            </div>
            <button class="cta-btn" type="submit">Register</button>
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
                            <p class="signup-link">Already have an account? <a href="{{ URL::to('login') }}">Log in</a>
                            </p>
                            <div class="card-title">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            {{$error->email}}
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- searching area -->
                        </div>
                            <form class="text-left" method="POST" action="{{ route('registeruser') }}">
                                @csrf
                                <div class="form">
                                    <div id="username-field" class="field-wrapper input">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <input id="name" name="name" type="text" class="form-control"
                                            placeholder="Name" class="@error('name') is-invalid @enderror">
                                        @error('name')
                                            <div class="alert alert-danger">Please enter you name</div>
                                        @enderror
                                    </div>
                                    <div id="email-field" class="field-wrapper input">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-at-sign">
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                        </svg>
                                        <input id="email" name="email" type="email" value=""
                                            placeholder="Email" required class="@error('email') is-invalid @enderror">
                                        @error('email')
                                            <div class="alert alert-danger">Email must be unique</div>
                                        @enderror
                                    </div>
                                    <div id="password-field" class="field-wrapper input mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-lock">
                                            <rect x="3" y="11" width="18" height="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                        <input id="password" name="password" type="password" value=""
                                            placeholder="Password" required>
                                    </div>
                                    <div id="password_confirmation-field" class="field-wrapper input mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-lock">
                                            <rect x="3" y="11" width="18" height="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                        <input id="password_confirmation" name="confirmed" type="password"
                                            value="" placeholder="Confirm Password" required
                                            class="@error('confirmed') is-invalid @enderror">
                                        @error('confirmed')
                                            <div class="alert alert-danger">Must be same with Password</div>
                                        @enderror
                                    </div>
                                    <div id="user_type-field" class="field-wrapper input mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <label for="user_type" class="form-label ml-5">User Type</label>
                                        <select name="user_type" id="user_type" class="form-select"
                                            class="@error('user_type') is-invalid @enderror">
                                            <option value="" disabled selected>Select User Type</option>
                                            <option value="Student">Student</option>
                                            <option value="Researcher">Researcher</option>
                                            <option value="Staff">Staff</option>
                                        </select>
                                        @error('user_type')
                                            <div class="alert alert-danger">Please Select User Type</div>
                                        @enderror
                                    </div>
                                    <div class="field-wrapper terms_condition">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                            <input type="checkbox" class="new-control-input" required name="term" class="@error('term') is-invalid @enderror">
                                            <span class="new-control-indicator"></span><span>I agree to the <a
                                                    href="javascript:void(0);"> terms and conditions </a></span>
                                        </label>
                                        @error('term')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
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
                                            <button type="submit" class="btn btn-primary" value="">Get
                                                Started!</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <img src="{{ asset('assets/assets/auth/weatherstation.png') }}" alt="logo" height="auto" width="auto">
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
