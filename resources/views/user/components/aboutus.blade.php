@extends('user.layout.app')
@section('content')
    <section class="page-title" style="background-image:url(images/background/2.png)">
        <div class="container">
            <div class="content">
                <h1>About <span>Us</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('main')}}">Home</a></li>
                    <li>Pages</li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">Channel International Education Consultant </div>
                            <h2>We are here to help you <br>Study <span>abrod</span></h2>
                        </div>

                        <div class="text">
                            <p>Channel International Education Consultant Pvt. Ltd is one of the leading educational
                                consultants, acknowledge for providing best guidance and counselling to the students. You
                                can study abroad in best educational hubs of
                                the world, including UK, USA, Australia, Canada, Denmark with us. As education is the main
                                catalyst in deciding the career of a student, we leave no stone unturned in ensuring that
                                you make the right decision.</p>
                            <p>Our company aims at providing a one stop solution for any candidate right from understanding
                                their requirements by having detailed discussions with the students along with their
                                parents. Our assistance starts right from
                                application preparations, documentations, visas and preparing them for their new life
                                abroad.</p>
                        </div>
                        <!-- <div class="row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list-style-one">
                                            <li>Praesent feugiat sem mattis.</li>
                                        </ul>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list-style-one">
                                            <li>A wonderful serenity.</li>
                                        </ul>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list-style-one">
                                            <li>Premium services beyond you.</li>
                                        </ul>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list-style-one">
                                            <li>Set a link back to this photo.</li>
                                        </ul>
                                    </div>
                                </div> -->

                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!--Video Box-->
                        <div class="img-box">
                            <figure class="image">
                                <img src="{{asset('user/images/about-img.png')}}" alt="">
                            </figure>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->


    <!-- Why Choose US -->
    <section class="services-section-five">
        <div class="container">
            <div class="sec-title centered">

                <h2>Why Choose<br><span> Channel International Education Consultant </span></h2>
            </div>
            <div class="row clearfix">

                <!-- Services Block Six -->
                <div class="services-block-six col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <i class="fa-solid fa-ban"></i>
                        </div>
                        <h6>No obligation for you</h6>
                        <div class="text">We provide complementary advice on higher education abroad – you are under no
                            obligation to apply through us, you are in full control of your decision.</div>
                    </div>
                </div>

                <!-- Services Block Six -->
                <div class="services-block-six col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h6>Receive personal attention</h6>
                        <div class="text">At Channel International Education Consultant, we strive to give wholehearted
                            personal attention to every single student in friendly manner.
                        </div>
                    </div>
                </div>

                <!-- Services Block Six -->
                <div class="services-block-six col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">

                            <i class="fa-brands fa-gratipay"></i>
                        </div>
                        <h6>We are caring & focused</h6>
                        <div class="text">We are highly clinical to take care of your problems and remain focused until we
                            can find the right solution.</div>
                    </div>
                </div>

                <!-- Services Block Six -->
                <div class="services-block-six col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <h6>We are trained professionals</h6>
                        <div class="text">We have a team of trained professional that you can rely on and trust. With us,
                            you will get services from the best in the industry. </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
