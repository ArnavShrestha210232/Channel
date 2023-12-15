 @extends('user.layout.app')
 @section('content')
     <!--Main Slider-->
     <section class="main-slider style-four">
         <div class="main-slider-carousel owl-carousel owl-theme">

             <div class="slide" style="background-image:url(user/images/background/slider-3.png)">
                 <div class="container">
                     <div class="content">
                         <div class="title">We hope success</div>
                         <h1>We build your <br> best Career</h1>

                         <div class="link-box">
                             <a href="#" class="theme-btn btn-style-twelve">Apply Online<span
                                     class="fa fa-angle-right"></span></a>

                         </div>
                     </div>
                 </div>
             </div>
             <div class="slide" style="background-image:url(user/images/background/slider-4.png)">
                 <div class="container">
                     <div class="content">
                         <div class="title text-white">We hope success</div>
                         <h1 class="text-white">We build your <br> best Career</h1>

                         <div class="link-box">
                             <a href="#" class="theme-btn btn-style-twelve">Apply Online<span
                                     class="fa fa-angle-right"></span></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--End Main Slider-->



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
                                 <img src="{{ asset('user/images/about-img.png') }}" alt="">
                             </figure>

                         </div>


                     </div>
                 </div>

             </div>
         </div>
     </section>
     <!-- End About Section -->

     <!-- <section class="divider-area">
                                                        <div class="container">
                                                            <div class="row divider-row">
                                                                <div class="col-md-6">
                                                                    <div class="divider-img">
                                                                        <img src="./images/background/illustrator.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                               
                                                    <div class="sec-title">
                                                        <div class="title">Channel International Education Consultant </div>
                                                        <h2>We are here to help you <br>Study <span>abrod</span></h2>
                                                    </div>
                                                </div>
                                                </div>
                                                </div>
                                                </section> -->

     <section class="blog-left-img-section">
         <div class="container">
             <!-- Sec Title -->
             <div class="sec-title centered">
                 <div class="title">Our Blog</div>
                 <h2>Check Our New Blog <span> Post </span></h2>
             </div>
             <!-- row -->
             <div class="row">
                 <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                     <!-- featured-imagebox-post -->
                     <div
                         class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
                         <div class="col-lg-5 col-md-12 col-sm-6 ttm-featured-img-left">
                             <div class="featured-thumbnail">
                                 <img class="img-fluid" src="{{ asset('user/images/gallery/img-4.jpg') }}" alt="image">
                             </div>
                         </div>
                         <div class="col-lg-7 col-md-12 col-sm-6 featured-content featured-content-post">
                             <div class="post-meta">
                                 <span class="ttm-meta-line"><i class="fa fa-calendar"></i>January 16, 2022</span>
                             </div>
                             <div class="post-title featured-title">
                                 <h5><a href="blog-detail.html">Successful Growth In Business 2022</a></h5>
                             </div>
                             <div class="featured-desc ttm-box-desc">
                                 <p>Mauris id enim id purus ornare tincidunt. Aenean vel consequat risus.Proin viverra nisi
                                     at nisl impe...</p>
                             </div>

                         </div>
                     </div>
                     <!-- featured-imagebox-post end-->
                 </div>
                 <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                     <!-- featured-imagebox-post -->
                     <div
                         class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
                         <div class="col-lg-5 col-md-12 col-sm-6 ttm-featured-img-left">
                             <div class="featured-thumbnail">
                                 <img class="img-fluid" src="{{ asset('user/images/gallery/img-2.jpg') }}" alt="image">
                             </div>
                         </div>
                         <div class="col-lg-7 col-md-12 col-sm-6 featured-content featured-content-post">
                             <div class="post-meta">
                                 <span class="ttm-meta-line"><i class="fa fa-calendar"></i>January 16, 2022</span>
                             </div>
                             <div class="post-title featured-title">
                                 <h5><a href="blog-detail.html">Successful Growth In Business 2022</a></h5>
                             </div>
                             <div class="featured-desc ttm-box-desc">
                                 <p>Mauris id enim id purus ornare tincidunt. Aenean vel consequat risus.Proin viverra nisi
                                     at nisl impe...</p>
                             </div>

                         </div>
                     </div>
                     <!-- featured-imagebox-post end-->
                 </div>
                 <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                     <!-- featured-imagebox-post -->
                     <div
                         class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
                         <div class="col-lg-5 col-md-12 col-sm-6 ttm-featured-img-left">
                             <div class="featured-thumbnail">
                                 <img class="img-fluid" src="{{ asset('user/images/gallery/img-3.jpg') }}" alt="image">
                             </div>
                         </div>
                         <div class="col-lg-7 col-md-12 col-sm-6 featured-content featured-content-post">
                             <div class="post-meta">
                                 <span class="ttm-meta-line"><i class="fa fa-calendar"></i>January 16, 2022</span>
                             </div>
                             <div class="post-title featured-title">
                                 <h5><a href="blog-detail.html">Successful Growth In Business 2022</a></h5>
                             </div>
                             <div class="featured-desc ttm-box-desc">
                                 <p>Mauris id enim id purus ornare tincidunt. Aenean vel consequat risus.Proin viverra nisi
                                     at nisl impe...</p>
                             </div>

                         </div>
                     </div>
                     <!-- featured-imagebox-post end-->
                 </div>
                 <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                     <!-- featured-imagebox-post -->
                     <div
                         class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
                         <div class="col-lg-5 col-md-12 col-sm-6 ttm-featured-img-left">
                             <div class="featured-thumbnail">
                                 <img class="img-fluid" src="{{ asset('user/images/gallery/img-1.jpg') }}"
                                     alt="image">
                             </div>
                         </div>
                         <div class="col-lg-7 col-md-12 col-sm-6 featured-content featured-content-post">
                             <div class="post-meta">
                                 <span class="ttm-meta-line"><i class="fa fa-calendar"></i>January 16, 2022</span>
                             </div>
                             <div class="post-title featured-title">
                                 <h5><a href="blog-detail.html">Successful Growth In Business 2022</a></h5>
                             </div>
                             <div class="featured-desc ttm-box-desc">
                                 <p>Mauris id enim id purus ornare tincidunt. Aenean vel consequat risus.Proin viverra nisi
                                     at nisl impe...</p>
                             </div>

                         </div>
                     </div>
                     <!-- featured-imagebox-post end-->
                 </div>


             </div>
             <!-- row end-->
         </div>
     </section>

     <!-- Counter Section -->
     <section class="counter-section" style="background-image:url(images/background/6.jpg)">
         <div class="container">
             <!-- Fact Counter -->
             <div class="fact-counter style-three">
                 <div class="row clearfix">

                     <!--Column-->
                     <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                         <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                             <div class="icon-box">
                                 <span class="icon flaticon-student"></span>
                             </div>
                             <div class="count-outer count-box">
                                 <span class="count-text" data-speed="3000ms" data-stop="1200">0</span>+
                                 <div class="counter-title">PTE Graduates</div>
                             </div>
                         </div>
                     </div>

                     <!--Column-->
                     <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                         <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                             <div class="icon-box">
                                 <span class="icon flaticon-collaboration"></span>
                             </div>
                             <div class="count-outer count-box">
                                 <span class="count-text" data-speed="2000" data-stop="195">0</span>+
                                 <div class="counter-title">Admission Guidance</div>
                             </div>
                         </div>
                     </div>

                     <!--Column-->
                     <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                         <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                             <div class="icon-box">
                                 <span class="icon flaticon-hand-shake-1"></span>
                             </div>
                             <div class="count-outer count-box">
                                 <span class="count-text" data-speed="2000" data-stop="850">0</span>+
                                 <div class="counter-title">Happy Students</div>
                             </div>
                         </div>
                     </div>

                     <!--Column-->
                     <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                         <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                             <div class="icon-box">
                                 <span class="icon flaticon-stopwatch"></span>
                             </div>
                             <div class="count-outer count-box">
                                 <span class="count-text" data-speed="1500" data-stop="26">0</span>+
                                 <div class="counter-title">Years Experience</div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

         </div>
     </section>
     <!-- Counter Section -->


     <!-- Services Section Six -->
     <section class="services-section-six">
         <div class="container">
             <!-- Sec Title -->
             <div class="sec-title centered">
                 <div class="title">Steps for processing</div>
                 <h2>Simple and Easy <br> Work <span> process </span></h2>
             </div>

             <div class="outer-container">
                 <div class="row clearfix">

                     <!-- Services Block Nine -->
                     <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                         <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                             <div class="icon-outer">
                                 <div class="service-number">1</div>
                                 <div class="icon-box">
                                     <i class="fa-regular fa-pen-to-square"></i>
                                 </div>
                             </div>
                             <div class="lower-box">
                                 <h6>Admission Guidance</h6>


                             </div>
                         </div>
                     </div>

                     <!-- Services Block Nine -->
                     <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                         <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                             <div class="icon-outer">
                                 <div class="service-number">2</div>
                                 <div class="icon-box">
                                     <i class="fa-solid fa-share-from-square"></i>
                                 </div>
                             </div>
                             <div class="lower-box">
                                 <h6>Application Submit</h6>


                             </div>
                         </div>
                     </div>

                     <!-- Services Block Nine -->
                     <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                         <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                             <div class="icon-outer">
                                 <div class="service-number">3</div>
                                 <div class="icon-box">
                                     <span class="icon flaticon-target"></span>
                                 </div>
                             </div>
                             <div class="lower-box">
                                 <h6>Acceptance Letter</h6>

                                 layout <i class="fa-brands fa-cc-visa"></i>
                             </div>
                         </div>
                         <div class="lower-box">
                             <h6>Visa Process</h6>


                         </div>
                     </div>
                 </div>

             </div>
         </div>
         </div>
     </section>
     <!-- End Services Section Six -->


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
                         layout <div class="icon-box">
                             <i class="fa-solid fa-school"></i>
                         </div>
                         <h6>Career Counselling</h6>
                         <div class="text">Career decisions can be difficult. If you are an enrolled student, career
                             counseling is available to help you discover your academic goals.</div>
                     </div>
                 </div>

                 <!-- Services Block -->
                 <div class="services-block-three style-two col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                         <div class="icon-box">
                             <i class="fa-solid fa-users"></i>
                         </div>
                         <h6>Admission Counselling</h6>
                         layout <div class="text">Choosing a subject to study in a new country can be daunting because
                             there are
                             so many quality options and great places to live.</div>
                     </div>
                 </div>

                 <!-- Services Block -->
                 <div class="services-block-three style-two col-lg-4 col-md-12 col-sm-12">
                     <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                         <div class="icon-box">
                             <i class="fa-solid fa-building-columns"></i>
                         </div>
                         <h6>Courses and College change</h6>
                         <div class="text">Australian Government has strict guidelines for you to follow. If you have a
                             student visa, you must meet certain requirements.</div>
                     </div>
                 </div>
                 <!-- Services Block -->
                 <div class="services-block-three style-two col-lg-4 col-md-12 col-sm-12">
                     <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                         <div class="icon-box">
                             <span class="icon flaticon-student"></span>
                         </div>
                         <h6>srcScholarship</h6>
                         <div class="text">There are many grants and scholarships available to help you financially with
                             your studies in Australia. </div>
                     </div>
                 </div>
                 <!-- Services Block -->
                 <div class="services-block-three style-two col-lg-4 col-md-12 col-sm-12">
                     <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                         <div class="icon-box">
                             <i class="fa-solid fa-user-tie"></i>
                         </div>
                         <h6>Professional Year</h6>
                         <div class="text">This Program is a practical journey from university to employment to ensures
                             that international graduates are ready for work.</div>
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

     <section class="blog-grid-section ">
         <div class="container ">

             <!-- Sec Title -->
             <div class="sec-title centered ">
                 <div class="title ">Study Abroad</div>
                 <h2>Select The <span>Country</span></h2>
             </div>
             <div class="blog-carousel owl-carousel owl-theme ">



                 <!-- News Block Three -->
                 <div class="news-block-three ">
                     <div class="inner-box wow fadeInLeft " data-wow-delay="0ms " data-wow-duration="1500ms ">
                         <div class="image ">
                             <img src="{{ asset('user/images/flags/australia.png') }}" alt=" " />

                         </div>
                         <div class="lower-content ">
                             <h4><a href="abroad-detail.html">Australia</a></h4>
                             <p>Australia is an island nation that is located in the southern part of the Pacific Ocean.
                                 Australia is located to the southeast of the mainland Asian continent and to the southwest
                                 of North America</p>
                             <a href="abroad-detail.html" class="theme-btn btn-style-twelve ">Read More<span
                                     class="fa fa-angle-right "></span></a>
                         </div>
                     </div>
                 </div>
                 <!-- News Block Three -->
                 <div class="news-block-three ">
                     <div class="inner-box wow fadeInLeft " data-wow-delay="0ms " data-wow-duration="1500ms ">
                         <div class="image ">
                             <img src="{{ asset('images/flags/sewden.png') }}" alt=" " />

                         </div>
                         <div class="lower-content ">

                             <h4><a href="abroad-detail.html">Sweden</a></h4>
                             <p>To study in Japan Bachelor degree or Master degree,Japanese language courses are very
                                 important be it for your study or day to day life in Japan.</p>
                             <a href="abroad-detail.html" class="theme-btn btn-style-twelve ">Read More<span
                                     class="fa fa-angle-right "></span></a>
                         </div>
                     </div>
                 </div>
                 <!-- News Block Three -->
                 <div class="news-block-three ">
                     <div class="inner-box wow fadeInLeft " data-wow-delay="0ms " data-wow-duration="1500ms ">
                         <div class="image ">
                             <img src="{{ asset('user/images/flags/usa.png') }}" alt=" " />

                         </div>
                         <div class="lower-content ">
                             <h4><a href="abroad-detail.html">USA</a></h4>
                             <p>If you plan to study abroad, let me tell you that the USA is one of the best destinations
                                 ever. With the most number of globally ranked universities globally, </p>
                             <a href="abroad-detail.html" class="theme-btn btn-style-twelve ">Read More<span
                                     class="fa fa-angle-right "></span></a>
                         </div>
                     </div>
                 </div>
                 <!-- News Block Three -->
                 <div class="news-block-three ">
                     <div class="inner-box wow fadeInLeft " data-wow-delay="0ms " data-wow-duration="1500ms ">
                         <div class="image ">
                             <img src="{{ asset('user/images/flags/canada.png') }}" alt=" " />

                         </div>
                         <div class="lower-content ">

                             <h4><a href="abroad-detail.html">Canada</a></h4>
                             <p>Canada is one of the favoured countries by Nepalese students as their study abroad
                                 destination. It is home to a bunch of top-rated universities and colleges..</p>
                             <a href="abroad-detail.html" class="theme-btn btn-style-twelve ">Read More<span
                                     class="fa fa-angle-right "></span></a>
                         </div>
                     </div>
                 </div>
                 <!-- News Block Three -->
                 <div class="news-block-three ">
                     <div class="inner-box wow fadeInLeft " data-wow-delay="0ms " data-wow-duration="1500ms ">
                         <div class="image ">
                             <img src="{{ asset('user/images/flags/uk.png') }}" alt=" " />

                         </div>
                         <div class="lower-content ">
                             <h4><a href="abroad-detail.html">UK</a></h4>
                             <p>The UK is home to three of the top 10 universities globally and has been attracting
                                 international students for so long. A degree from the UK has high regards all over the
                                 world</p>
                             <a href="abroad-detail.html" class="theme-btn btn-style-twelve ">Read More<span
                                     class="fa fa-angle-right "></span></a>
                         </div>
                     </div>
                 </div>


                 <!-- News Block Three -->
                 <div class="news-block-three ">
                     <div class="inner-box wow fadeInLeft " data-wow-delay="0ms " data-wow-duration="1500ms ">
                         <div class="image ">
                             <img src="{{ asset('user/images/flags/portugal.png') }}" alt=" " />

                         </div>
                         <div class="lower-content ">

                             <h4><a href="abroad-detail.html">Portugal</a></h4>
                             <p>To study in Japan Bachelor degree or Master degree,Japanese language courses are very
                                 important be it for your study or day to day life in Japan.</p>
                             <a href="abroad-detail.html" class="theme-btn btn-style-twelve ">Read More<span
                                     class="fa fa-angle-right "></span></a>
                         </div>
                     </div>
                 </div>

             </div>

         </div>
     </section>
     <!-- End Blog Grid Section -->
     <!-- Testimonial Section Three -->
     <section class="testimonial-section-three ">
         <div class="container ">
             <!-- Sec Title Two -->

             <div class="sec-title centered ">
                 <div class="title ">Testimonial</div>
                 <h2>What our Student think <span>About Us</span></h2>
             </div>
             <div class="two-item-carousel owl-carousel owl-theme ">

                 <!-- Testimonial Block Four -->
                 <div class="testimonial-block-four ">
                     <div class="inner-box ">
                         <div class="quote-icon flaticon-double-quotes "></div>
                         <div class="image-outer ">
                             <div class="image ">
                                 <img src="{{ asset('user/images/students/images.png') }}" alt=" " />
                             </div>
                         </div>
                         <div class="text "> I feel very fortunate to have an opportunity to study in Australia.Channel
                             provided me with the best possible study options with the consideration of my capability and
                             interest.</div>
                         <h5>Manish Parajuli</h5>
                         <div class="designation ">Student</div>
                     </div>
                 </div>

                 <!-- Testimonial Block Four -->
                 <div class="testimonial-block-four ">
                     <div class="inner-box ">
                         <div class="quote-icon flaticon-double-quotes "></div>
                         <div class="image-outer ">
                             <div class="image ">
                                 <img src="{{ asset('user/images/students/images.png') }} " alt=" " />
                             </div>
                         </div>
                         <div class="text ">“It was a wonderful experience from the Bright FullMoon consultants, they
                             helped me a lot on my study program in Australia. Channel gave me the right counseling, helped
                             me to select a great university, and on my visa process.
                             ”
                         </div>
                         <h5>Hari Acharya</h5>
                         <div class="designation ">Student</div>
                     </div>
                 </div>

                 <!-- Testimonial Block Four -->
                 <div class="testimonial-block-four ">
                     <div class="inner-box ">
                         <div class="quote-icon flaticon-double-quotes "></div>
                         <div class="image-outer ">
                             <div class="image ">
                                 <img src="{{ asset('user/images/students/images.png') }}" alt=" " />
                             </div>
                         </div>
                         <div class="text ">“I would give a 5-star rating to Channel Consultants and will encourage all my
                             friends and those who are reading this review to approach channel if you have plans to study
                             aboard.”</div>
                         <h5>Lachhuman Budhathoki</h5>
                         <div class="designation ">Student</div>
                     </div>
                 </div>

                 <!-- Testimonial Block Four -->
                 <div class="testimonial-block-four ">
                     <div class="inner-box ">
                         <div class="quote-icon flaticon-double-quotes "></div>
                         <div class="image-outer ">
                             <div class="image ">
                                 <img src="{{ asset('user/images/students/images.png') }}" alt=" " />
                             </div>
                         </div>
                         <div class="text ">I had an Excellent experience! Got my visa without much efforts from my side.
                             Channel Consultants took care of it all. Very friendly staff who are very much accessible and
                             who were spontaneous in responding to my queries.
                         </div>
                         <h5>Karan Thapa</h5>
                         <div class="designation ">Student</div>
                     </div>
                 </div>
             </div>

         </div>
     </section>
     <!-- End Testimonial Section Three -->

     <!--Start Client Section -->

     <section class="sponsors-section">
         <div class="container">

             <div class="carousel-outer">
                 <!--Sponsors Slider-->
                 <ul class="sponsors-carousel owl-carousel owl-theme">
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/1.png') }}" alt=""></a>
                         </div>
                     </li>
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/2.png') }}" alt=""></a>
                         </div>
                     </li>
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/3.png') }}" alt=""></a>
                         </div>
                     </li>
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/4.png') }}" alt=""></a>
                         </div>
                     </li>
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/5.png') }}" alt=""></a>
                         </div>
                     </li>
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/6.png') }}" alt=""></a>
                         </div>
                     </li>
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/1.png') }}" alt=""></a>
                         </div>
                     </li>
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/2.png') }}" alt=""></a>
                         </div>
                     </li>
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/3.png') }}" alt=""></a>
                         </div>
                     </li>
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/4.png') }}" alt=""></a>
                         </div>
                     </li>
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/5.png') }}" alt=""></a>
                         </div>
                     </li>
                     <li>
                         <div class="image-box">
                             <a href="#"><img src="{{ asset('user/images/clients/6.png') }}" alt=""></a>
                         </div>
                     </li>
                 </ul>
             </div>

         </div>
     </section>

     <!--End Client Setion-->
 @endsection
