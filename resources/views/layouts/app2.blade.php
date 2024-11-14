<!DOCTYPE html>
<html lang="en">

@include('general.inc.header')

<body class="sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('general.inc.nav')
    <!--  END NAVBAR  -->

    <!--  BEGIN TOPBAR  -->
    @include('general.inc.topbar')
    <!--  END TOPBAR  -->
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container position-relative" id="container">

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                @yield('content')

            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    @include('general.inc.js')
</body>

</html>
