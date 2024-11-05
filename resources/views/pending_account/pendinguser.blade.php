<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Skellup - Account Pending</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/pages/error/style-maintanence.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

</head>

<body class="maintanence text-center">

    <div class="container-fluid maintanence-content">
        <div class="">
            <div class="">
                <img alt="logo" class="logo" height="200px" width="300px"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Logo_Rasmi_UMT.png/1200px-Logo_Rasmi_UMT.png">
            </div>
            <h1 class="error-title text-black">Holla, {{ $user->name }}</h1>
            <p class="error-text">Welcome to UMT Weather System.</p>
            <p class="text">You will be able to access UMT Weather System <br /> once UMT Admin approved your account.
            </p>
            <p class="text">Thank you.</p>
            @if (Auth::user() != null)
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="background-color: #ffcc00; color:black;" class="btn ">
                        {{ __('Go To Login') }}
                    </button>
                </form>
            @else
                <form action="{{ route('mainpage') }}">

                    <button type="submit" style="background-color: #ffcc00; color:black;" class="btn ">
                        {{ __('Go To Login') }}
                    </button>
                </form>
            @endif
        </div>
    </div>


</body>
