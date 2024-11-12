{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
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
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <center>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Logo_Rasmi_UMT.png/1200px-Logo_Rasmi_UMT.png"
                    alt="logo"height="auto" width="30%">
            </center>
            <h2 class="title">UMT Stesen Penyelidikan Alami Kenyir</h2>
            <p class="subtitle">Forget Password</p>
            <p class="subtitle">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>


            <div class="email-login">
                <label for="email"> <b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" :value="old('email')" required
                    autofocus>
            </div>
            <button class="cta-btn" type="submit">Email Password Reset Link</button>
        </form>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/assets/js/authentication/form-1.js') }}"></script>

</body>

</html>
