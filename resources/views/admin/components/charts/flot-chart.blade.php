@extends('admin.layout.app')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="flot-chart">
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Tracking Chart
                            </header>
                            <div class="panel-body">
                                <div id="chart-1" class="chart"></div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Selection Chart
                            </header>
                            <div class="panel-body">
                                <div id="chart-2" class="chart"></div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Live Chart
                            </header>
                            <div class="panel-body">
                                <div id="chart-3" class="chart"></div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Support Chart
                            </header>
                            <div class="panel-body">
                                <div id="chart-4" class="chart"></div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Bar Chat
                            </header>
                            <div class="panel-body">
                                <div id="chart-5" style="height:350px;"></div>
                                <div class="btn-toolbar">
                                    <div class="btn-group stackControls">
                                        <input type="button" class="btn btn-info" value="With stacking" />
                                        <input type="button" class="btn btn-danger" value="Without stacking" />
                                    </div>
                                    <div class="space5"></div>
                                    <div class="btn-group graphControls">
                                        <input type="button" class="btn" value="Bars" />
                                        <input type="button" class="btn" value="Lines" />
                                        <input type="button" class="btn" value="Lines with steps" />

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Pie Chart
                            </header>
                            <div class="panel-body">
                                <div id="graph1" class="chart"></div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Pie Chart
                            </header>
                            <div class="panel-body">
                                <div id="graph2" class="chart"></div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Pie Chart
                            </header>
                            <div class="panel-body">
                                <div id="graph3" class="chart"></div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Donut Chart
                            </header>
                            <div class="panel-body">
                                <div id="donut" class="chart"></div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </div>
        </section>
    </section>
    <!--main content end-->
@endsection
@section('js')
    <script src="{{ asset('admin/assets/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/assets/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/assets/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/assets/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('admin/assets/flot/jquery.flot.crosshair.js') }}"></script>




    <!--common script for all pages-->
    <script src="{{ asset('admin/js/common-scripts.js') }}"></script>

    <!--script for this page only-->
    <script src="{{ asset('admin/js/flot-chart.js') }}"></script>
@endsection
