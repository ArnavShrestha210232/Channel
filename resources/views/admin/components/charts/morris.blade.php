@extends('admin.layout.app')
@section('content')
    <!--main content start-->
    <section id="main-content">

        <section class="wrapper site-min-height">
            <!-- page start-->
            <div id="morris">
                <div class="row">
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Jaguar 'E' Type vehicles in the UK
                            </header>
                            <div class="panel-body">
                                <div id="hero-graph" class="graph"></div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                iPhone CPU benchmarks
                            </header>
                            <div class="panel-body">
                                <div id="hero-bar" class="graph"></div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Quarterly Apple iOS device unit sales
                            </header>
                            <div class="panel-body">
                                <div id="hero-area" class="graph"></div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Donut flavours
                            </header>
                            <div class="panel-body">
                                <div id="hero-donut" class="graph"></div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
@endsection
@section('js')
    <script src="assets/morris.js-0.4.3/morris.min.js" type="text/javascript"></script>
    <script src="assets/morris.js-0.4.3/raphael-min.js" type="text/javascript"></script>
    <!-- script for this page only-->
    <script src="js/morris-script.js"></script>
@endsection
