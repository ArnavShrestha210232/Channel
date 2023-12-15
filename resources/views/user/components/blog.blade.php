@extends('user.layout.app')
@section('content')
    <section class="page-title" style="background-image:url(images/background/2.png)">
        <div class="container">
            <div class="content">
                <h1>Our <span>Blog</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('main') }}">Home</a></li>
                    <li>Pages</li>
                    <li>Our Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="blog-left-img-section bg-img3">
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
                    <div class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
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
                    <div class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
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
                    <div class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
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
                                <h5><a href="{{ route('blog') }}">Successful Growth In Business 2022</a></h5>
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
                    <div class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
                        <div class="col-lg-5 col-md-12 col-sm-6 ttm-featured-img-left">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('user/images/gallery/img-1.jpg') }}" alt="image">
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
@endsection
