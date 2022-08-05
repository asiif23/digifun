<!DOCTYPE html>
<html lang="en">

<head>
    <title>Digifun Festival 2022</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/web/images/x-icon/01.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
    @yield('css')
</head>

<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


@include('layouts.web.navbar')
@yield('content')
@include('layouts.web.footer')


    <script src="{{ asset('assets/web/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/web/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/circularProgressBar.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/web/js/functions.js') }}"></script>
</body>

</html>