@extends('user.layout.app')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="{{ asset('background-image:url(user/images/background/2.png)') }}">
        <div class="container">
            <div class="content">
                <h1>Services</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('main') }}">Home</a></li>
                    <li>Pages</li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- Services Section Three-->
    <section class="services-section-three">
        <div class="container">
            <!-- Sec Title -->
            <div class="sec-title centered ">
                <div class="title ">OUR DEDICATED SERVICES</div>
                <h2>Learn some of Our <span>Service</span></h2>
            </div>
            <div class="row clearfix pt-5">

                <!-- Services Block -->
                <div class="services-block-three style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <i class="fa-solid fa-school"></i>
                        </div>
                        <h6>Career Counselling</h6>
                        <div class="text">Career decisions can be difficult. If you are an enrolled student,
                            career counseling is available to help you discover your academic goals.</div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block-three style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h6>Admission Counselling</h6>
                        <div class="text">Choosing a subject to study in a new country can be daunting because
                            there are so many quality options and great places to live.</div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block-three style-two col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <i class="fa-solid fa-building-columns"></i>
                        </div>
                        <h6>Courses and College change</h6>
                        <div class="text">Australian Government has strict guidelines for you to follow. If you
                            have a student visa, you must meet certain requirements.</div>
                    </div>
                </div>
                <!-- Services Block -->
                <div class="services-block-three style-two col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-student"></span>
                        </div>
                        <h6>Scholarship</h6>
                        <div class="text">There are many grants and scholarships available to help you
                            financially with your studies in Australia. </div>
                    </div>
                </div>
                <!-- Services Block -->
                <div class="services-block-three style-two col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <h6>Professional Year</h6>
                        <div class="text">This Program is a practical journey from university to employment to
                            ensures that international graduates are ready for work.</div>
                    </div>
                </div>
                <!-- Services Block -->
                <div class="services-block-three style-two col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <i class="fa-brands fa-cc-visa"></i>
                        </div>
                        <h6>Visa Assistance</h6>
                        <div class="text">All students receive free visa counseling, visa file preparation & mock
                            training for visa interviews from our visa counselors.</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Grid Section -->
@endsection
