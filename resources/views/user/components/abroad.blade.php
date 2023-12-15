@extends('user.layout.app')
@section('content')
    <section class="page-title" style="background-image:url(images/background/2.png)">
        <div class="container">
            <div class="content">
                <h1>Study in <span>Australia</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('main') }}">Home</a></li>
                    <li>Pages</li>
                    <li>Study in Australia</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <div class="sidebar-page-container abroad">
        <div class="container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('user/images/aboad.jpg') }}" alt="" />
                            </div>
                            <div class="lower-content">

                                <h4>Australia</h4>
                                <div class="text">
                                    <p>Australia is an island nation that is located in the southern part of the Pacific
                                        Ocean. Australia is located to the southeast of the mainland Asian continent and to
                                        the southwest of North America</p>
                                    <p>The climate varies widely due to its large geographical size, but by far the largest
                                        part of Australia is desert or semi-arid. Only the south-east and south-west corners
                                        have a temperate climate and moderately fertile
                                        soil. The northern part of the country has a tropical climate, varied between
                                        tropical rainforests, grasslands and part desert.</p>
                                </div>

                                <h4>Why Study in Australia</h4>
                                <div class="text">
                                    <p>Australia is an island nation that is located in the southern part of the Pacific
                                        Ocean. Australia is located to the southeast of the mainland Asian continent and to
                                        the southwest of North America</p>
                                    <p>The climate varies widely due to its large geographical size, but by far the largest
                                        part of Australia is desert or semi-arid. Only the south-east and south-west corners
                                        have a temperate climate and moderately fertile
                                        soil. The northern part of the country has a tropical climate, varied between
                                        tropical rainforests, grasslands and part desert.</p>
                                </div>
                                <!-- Faq Section -->
                                <section class="faq-section">
                                    <div class="container">
                                        <div class="row clearfix">

                                            <!-- Faq Column -->
                                            <div class="faq-column col-lg-12 col-md-12 col-sm-12">
                                                <div class="inner-column">
                                                    <div class="sec-title1">
                                                        <h4>Frequently asked <span>question</span></h4>
                                                    </div>

                                                    <!--Accordion Box-->
                                                    <ul class="accordion-box">

                                                        <!--Block-->
                                                        <li class="accordion block">
                                                            <div class="acc-btn active">
                                                                <div class="icon-outer"><span
                                                                        class="icon icon-plus fa fa-arrow-right"></span>
                                                                    <span class="icon icon-minus fa fa-arrow-down"></span>
                                                                </div> <span
                                                                    class="icon-inner flaticon-pie-chart-3"></span>Why Study
                                                                in Australia?
                                                                <span class="arrow fa fa-angle-right"></span>
                                                            </div>
                                                            <div class="acc-content current">
                                                                <div class="content">
                                                                    <p>Every student is picky when choosing their course,
                                                                        especially if it involves relocating to a completely
                                                                        different country. Each student has a different
                                                                        reason for choosing Australia
                                                                        as their study destination.</p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <!--Block-->
                                                        <li class="accordion block">
                                                            <div class="acc-btn">
                                                                <div class="icon-outer"><span
                                                                        class="icon icon-plus fa fa-arrow-right"></span>
                                                                    <span class="icon icon-minus fa fa-arrow-down"></span>
                                                                </div> <span
                                                                    class="icon-inner flaticon-up-arrow-1"></span>How much
                                                                will it
                                                                cost?
                                                                <span class="arrow fa fa-angle-right"></span>
                                                            </div>
                                                            <div class="acc-content">
                                                                <div class="content">
                                                                    <p>Australia is cheaper for international students than
                                                                        the USA and UK. The Federal University of Australia
                                                                        is considered the cheapest university in Australia
                                                                        for international students.
                                                                        The courses can never be inexpensive, but there is
                                                                        no place for any worries as there are grants and
                                                                        scholarships in several forms to help you study your
                                                                        dream course in your preferred
                                                                        university or college.</p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="accordion block">
                                                            <div class="acc-btn">
                                                                <div class="icon-outer"><span
                                                                        class="icon icon-plus fa fa-arrow-right"></span>
                                                                    <span class="icon icon-minus fa fa-arrow-down"></span>
                                                                </div> <span
                                                                    class="icon-inner flaticon-pyramid-scheme"></span>What
                                                                are the
                                                                requirements to study in Australia? <span
                                                                    class="arrow fa fa-angle-right"></span>
                                                            </div>
                                                            <div class="acc-content">
                                                                <div class="content">
                                                                    <p>Diploma Programs: Apart from a minimum of 60% in
                                                                        grade 12, you will need a score of at least 5.5 in
                                                                        IELTS. The TOEFL internet score should be 55, and
                                                                        the PTE score should be between
                                                                        42 and 49. Remember that these tests should be taken
                                                                        not more than two years before your course
                                                                        commencement. Bachelor’s Programs: To do a
                                                                        Bachelor’s degree in Australia, you
                                                                        require at least 65% in your grade 12. In addition,
                                                                        the IELTS score should be at least 6.0, the TOEFL
                                                                        score should be 65, and the PTE score should be
                                                                        between 50 and 57. Master’s
                                                                        Programs: A 3-year degree from a recognised
                                                                        university is enough for most universities. However,
                                                                        specific courses and universities demand a
                                                                        qualification equivalent to an Australian
                                                                        Bachelor’s degree. The IELTS, TOEFL, and PTE scores
                                                                        should be 6.5, 79, and 58-64, respectively. Doctoral
                                                                        Programs: A three to four year Bachelor’s degree and
                                                                        a two year Master’s
                                                                        degree are essential for doing a Doctoral degree in
                                                                        Australia. Added to it, a minimum IELTS score of 6.5
                                                                        is also required.</p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>

                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </section>
                                <!-- End Faq Section -->

                            </div>
                        </div>



                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">



                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title-two">
                                <h4>Language Preparation</h4>
                            </div>
                            <ul class="blog-cat-two">
                                <li><a href="{{ route('language') }}">IELTS </a></li>
                                <li><a href="{{ route('language') }}">PTE</a></li>

                            </ul>
                        </div>
                        <!-- Contact Widget-->
                        <div class="sidebar-widget contact-widget">
                            <div class="sidebar-title">
                                <h4>Contact</h4>
                            </div>
                            <ul>
                                <li><span class="icon flaticon-map-1"></span> New Baneshwar, Opposite to Eyeplex Mall</li>
                                <li><span class="icon flaticon-phone-receiver"></span>9841450575</li>
                                <li><span class="icon flaticon-comment"></span>info@channelintledu.com</li>
                            </ul>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>
@endsection
