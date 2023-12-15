@extends('user.layout.app')
@section('content')
    <section class="page-title" style="background-image:url(images/background/2.png)">
        <div class="container">
            <div class="content">
                <h1>Message from <span>CEO</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('main') }}">Home</a></li>
                    <li>Pages</li>
                    <li>Message from CEO</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="message-details-section">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-4">
                    <div class="featured-imagebox featured-imagebox-team featured-imagebox-team-details">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('user/images/students/images.png') }}" alt="image">
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 ttm-team-member-single-content-area">
                    <div class="ttm-team-member-content">
                        <div class="main-title">
                            <h2>Message From CEO</h2>
                            <h3 class="title">Dear students and Parents,</h3>
                        </div>
                        <div class="desc">
                            <p>Currently, many students are aiming for abroad among them Australia is one of the top most
                                choice. Nowadays, Australia is becoming more and more popular education destination country.
                                Our School is providing this opportunity
                                by helping these students by teaching English Language as well as assisting them to search
                                the best English Language schools, Technical Colleges and Universities in Australia for
                                their further study. However, I would
                                like to mention that without the knowledge of English Language the life in Australia is
                                almost impossible. Also, you have to be more disciplined, more punctual and obedient in your
                                study as well as work to be a successful
                                in Australia. You have to follow every rules and regulation strictly there.</p>

                            <p>So, if you are considering for Australia, be prepared for all of this. It is seen that
                                students who have studied language well for more than 1 year in Nepal and have got the basic
                                information about English education system,
                                culture, tradition, have done well and their future will be secure. So, I request all the
                                students to collect much information about English education system and their culture and
                                tradition before going.</p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- row end-->
        </div>
    </section>
@endsection
