@extends('admin.layout.app')
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
                <aside class="profile-nav col-lg-3">
                    <section class="panel">
                        <div class="user-heading round">
                            <a href="#">
                                <img src="img/profile-avatar.jpg" alt="">
                            </a>
                            <h1>Jonathan Smith</h1>
                            <p>jsmith@flatlab.com</p>
                        </div>

                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="profile.html"> <i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="profile-activity.html"> <i class="fa fa-calendar"></i> Recent Activity <span
                                        class="label label-danger pull-right r-activity">9</span></a></li>
                            <li><a href="profile-edit.html"> <i class="fa fa-edit"></i> Edit profile</a></li>
                        </ul>

                    </section>
                </aside>
                <aside class="profile-info col-lg-9">
                    <section class="panel">
                        <form>
                            <textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
                        </form>
                        <footer class="panel-footer">
                            <button class="btn btn-danger pull-right">Post</button>
                            <ul class="nav nav-pills">
                                <li>
                                    <a href="#"><i class="fa fa-map-marker"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-camera"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class=" fa fa-film"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-microphone"></i></a>
                                </li>
                            </ul>
                        </footer>
                    </section>
                    <section class="panel">
                        <div class="bio-graph-heading">
                            Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac
                            magna metus.
                        </div>
                        <div class="panel-body bio-graph-info">
                            <h1>Bio Graph</h1>
                            <div class="row">
                                <div class="bio-row">
                                    <p><span>First Name </span>: Jonathan</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Last Name </span>: Smith</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Country </span>: Australia</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Birthday</span>: 13 July 1983</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Occupation </span>: UI Designer</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Email </span>: jsmith@flatlab.com</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Mobile </span>: (12) 03 4567890</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Phone </span>: 88 (02) 123456</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="bio-chart">
                                            <input class="knob" data-width="100" data-height="100"
                                                data-displayPrevious=true data-thickness=".2" value="35"
                                                data-fgColor="#e06b7d" data-bgColor="#e8e8e8">
                                        </div>
                                        <div class="bio-desk">
                                            <h4 class="red">Envato Website</h4>
                                            <p>Started : 15 July</p>
                                            <p>Deadline : 15 August</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="bio-chart">
                                            <input class="knob" data-width="100" data-height="100"
                                                data-displayPrevious=true data-thickness=".2" value="63"
                                                data-fgColor="#4CC5CD" data-bgColor="#e8e8e8">
                                        </div>
                                        <div class="bio-desk">
                                            <h4 class="terques">ThemeForest CMS </h4>
                                            <p>Started : 15 July</p>
                                            <p>Deadline : 15 August</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="bio-chart">
                                            <input class="knob" data-width="100" data-height="100"
                                                data-displayPrevious=true data-thickness=".2" value="75"
                                                data-fgColor="#96be4b" data-bgColor="#e8e8e8">
                                        </div>
                                        <div class="bio-desk">
                                            <h4 class="green">VectorLab Portfolio</h4>
                                            <p>Started : 15 July</p>
                                            <p>Deadline : 15 August</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="bio-chart">
                                            <input class="knob" data-width="100" data-height="100"
                                                data-displayPrevious=true data-thickness=".2" value="50"
                                                data-fgColor="#cba4db" data-bgColor="#e8e8e8">
                                        </div>
                                        <div class="bio-desk">
                                            <h4 class="purple">Adobe Muse Template</h4>
                                            <p>Started : 15 July</p>
                                            <p>Deadline : 15 August</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
@endsection
@section('js')
    <script>
        //knob
        $(".knob").knob();
    </script>
@endsection
