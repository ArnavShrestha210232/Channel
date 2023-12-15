@extends('user.layout.app')
@section('content')
    <section class="page-title" style="background-image:url(images/background/2.png)">
        <div class="container">
            <div class="content">
                <h1>Contact <span>us</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('main') }}">Home</a></li>
                    <li>contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">

        <div class="container">
            <div class="inner-container">
                <h2>Contact Us or make appointment <br> with <span>our consultan</span></h2>
                <div class="row clearfix">

                    <!-- Info Column -->
                    <div class="info-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="text">Please contact us using the information below.</div>
                            <ul class="list-style-five">
                                <li><span class="icon fa fa-building"></span> New Baneshwar, Opposite to Eyeplex Mall</li>

                                <li><span class="icon fa fa-fax"></span> 9841450575</li>
                                <li><span class="icon fa fa-envelope-o"></span>info@channelintledu.com</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="post" action="" id="contact-form">

                                    <div class="form-group">
                                        <input type="text" name="firstname" value="" placeholder="Full name"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="email" value="" placeholder="Email" required>
                                    </div>

                                    <div class="form-group">
                                        <select class="custom-select-box">
                                            <option>Select topic</option>
                                            <option>Topic One</option>
                                            <option>Topic Two</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="message" placeholder="write.."></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="theme-btn">Submit</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Team Page Section -->

    <section class="map-area pt-5">
        <div class="auto-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1671.9760071667881!2d85.33628744069844!3d27.693565441117396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb196b2d517fc9%3A0xa18a073e7e4d36ca!2sChannel%20International%20Education%20Consultant%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1672133507714!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
@section('js')
<!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
    <script src="{{asset('user/js/map-script.js')}}"></script>
    <!--End Google Map APi-->
    
@endsection
