<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Channel International Education Consultant</title>
    <!-- Stylesheets -->
    <link href="{{ asset('user/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/custom.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('user/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('user/images/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('css')

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        @include('user.include.header')
        @yield('content')
        @include('user.include.footer')
    </div>
    <script src="{{ asset('user/js/jquery.js') }}"></script>
    <script src="{{ asset('user/js/popper.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('user/js/appear.js') }}"></script>
    <script src="{{ asset('user/js/owl.js') }}"></script>
    <script src="{{ asset('user/js/wow.js') }}"></script>
    <script src="{{ asset('user/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>
    <!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
    <script src="{{ asset('user/js/map-script.js') }}"></script>
    <!--End Google Map APi-->
    @yield('js')
</body>

</html>
