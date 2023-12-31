@extends('admin.layout.app')
@section('content')
    <!--main content start-->
    <section id="main-content">

        <section class="wrapper">
            <!-- page start-->
            <div class="tab-pane" id="chartjs">
                <div class="row">
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Doughnut
                            </header>
                            <div class="panel-body text-center">
                                <canvas id="doughnut" height="300" width="400"></canvas>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Line
                            </header>
                            <div class="panel-body text-center">
                                <canvas id="line" height="300" width="450"></canvas>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Radar
                            </header>
                            <div class="panel-body text-center">
                                <canvas id="radar" height="300" width="400"></canvas>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Polar Area
                            </header>
                            <div class="panel-body text-center">
                                <canvas id="polarArea" height="300" width="400"></canvas>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Bar
                            </header>
                            <div class="panel-body text-center">
                                <canvas id="bar" height="300" width="500"></canvas>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                                Pie
                            </header>
                            <div class="panel-body text-center">
                                <canvas id="pie" height="300" width="400"></canvas>
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
    <!-- script for this page only-->
    <script src="{{asset('admin/js/all-chartjs.js')}}"></script>
@endsection
