<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jan 2019 05:29:03 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{ asset('admin/img/favicon.html') }}">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('admin/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet"
        type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.css') }}" type="text/css">

    <!--right slidebar-->
    <link href="{{ asset('admin/css/slidebars.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet" />
    @stack('css')


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="container">
        @include('admin.include.header')
        @include('admin.include.leftsidebar')
        @yield('content')
        {{-- @include('admin.include.rightsidebar') --}}
        @include('admin.include.footer')
    </section>

    <script src="{{ asset('admin/js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.nicescroll.js" type="text/javascript') }}"></script>
    <script src="{{ asset('admin/js/jquery.sparkline.js" type="text/javascript') }}"></script>
    <script src="{{ asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ asset('admin/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('admin/js/respond.min.js') }}"></script>

    <!--right slidebar-->
    <script src="{{ asset('admin/js/slidebars.min.js') }}"></script>

    <!--common script for all pages-->
    <script src="{{ asset('admin/js/common-scripts.js') }}"></script>

    <!--script for this page-->
    <script src="{{ asset('admin/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('admin/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('admin/js/count.js') }}"></script>

    <script>
        //owl carousel

        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                autoPlay: true

            });
        });

        //custom select box

        $(function() {
            $('select.styled').customSelect();
        });

        $(window).on("resize", function() {
            var owl = $("#owl-demo").data("owlCarousel");
            owl.reinit();
        });
    </script>
    @yield('js')

</body>

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jan 2019 05:29:54 GMT -->

</html>
