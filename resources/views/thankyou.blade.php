<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>KPJ Damansara Feedback Rating</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://afeld.github.io/emoji-css/emoji.css'>
    <link rel="shortcut icon" href="https://www.kpjhealth.com.my/media/kpj-logo.png">
    <!-- Bootstrap -->
    <link href="{{ asset('landingpage/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('landingpage/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('landingpage/css/tiny-slider.css') }}" />
    <!-- Main Css -->
    <link href="{{ asset('landingpage/css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('landingpage/css/colors/default.css') }}" rel="stylesheet" id="color-opt">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div> -->
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    @include('sweetalert::alert')

    <!-- Hero Start -->
    <section class="bg-half-260 bg-white d-table w-100" style="background: url({{ asset('landingpage/images/bg1.png')}}) center center;background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;">
        {{-- <div class="bg-overlay" style="background-color: rgb(60 72 88 / 18%);"></div> --}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img height="100" width="600" style="width:350px, left:40% !important" src="https://media.kpjhealth.com.my/media/hospital/hosp-5/setting/1635323584_e286416a5a8cdb9d8518.png" alt="logo" class="logo">
                    <form action="" class="rating-wrapper">
                        <div class="card text-center">
                            <div class="card-header">
                                Thank You For Your Feedback!
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">We always do our best!</h5>
                                <p class="card-text">Have a nice days!</p>
                                <a href="{{route('mainpage')}}" class="btn btn-primary">Redirect To Main Page</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->
</body>


{{-- javascript --}}
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="sweetalert2.all.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
<script>
    setTimeout(function() {
        window.location.href = '/';
    }, 5000);

</script>

</html>
