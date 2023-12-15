@extends('admin/layout/app')
@push('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Basic
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-remove"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div id="gmap_basic" class="gmaps"></div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Markers
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-remove"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div id="gmap_marker" class="gmaps"></div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Geolocation
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-remove"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div id="gmap_geo" class="gmaps"></div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Polylines
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-remove"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div id="gmap_polylines" class="gmaps"></div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Geocoding
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-remove"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    <input type="text" id="gmap_geocoding_address" class=" form-control"
                                        placeholder="Address..." />
                                </div>
                                <input type="button" id="gmap_geocoding_btn" class="btn" value="Search" />
                            </form>
                            <br>
                            <div id="gmap_geocoding" class="gmaps"></div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
@endsection
@section('js')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.js"></script>

    <script src="js/gmaps-scripts.js"></script>

    <script>
        jQuery(document).ready(function() {
            GoogleMaps.init();
        });
    </script>
@endsection
