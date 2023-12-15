@extends('user.layout.app')
@section('content')
    <section class="page-title" style="{{ asset('background-image:url(user/images/background/2.png)') }}">
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


    <!--Sidebar Page Container-->
    <div class="sidebar-page-container bg-img3 ">
        <div class="container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('userimages/gallery/img-5.jpg') }}" alt="" />
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="fa fa-calendar"></span>Jan 16, 2022</li>
                                    <li><span class="fa fa-user"></span>By Admin</li>


                                </ul>
                                <h4>Successful Growth In Business 2022</h4>
                                <div class="text">
                                    <p>The man, who is in a stable condition in hospital, has "potentially life-changing
                                        injuries" after the overnight attack in Garvagh, County Londonderry. He was shot in
                                        the arms and legs."What sort of men would think
                                        it is accepttable to subject a young girl to this level of brutality and violence?
                                        "Every child has the right to feel safe and protected in their own home - how is
                                        this poor child going to sleep tonight or in
                                        coming nights? What are the long term effects on her going to be?" "It's quite
                                        obvious the hypocrites who carried out this dreadful attack don't care at all about
                                        the children in their community. I wonder how
                                        they would feel if their own child witnessed such a level of violence? "There is
                                        absolutely no justification for an attack like this in our communities and we must
                                        all work together to bring those responsible
                                        to justice and to stop this from happening to another child.</p>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!-- Popular Post Widget-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title-two">
                                <h4>Recent News</h4>
                            </div>

                            <article class="post">
                                <figure class="post-thumb"><img src="{{ asset('user/images/gallery/img-2.jpg') }}"
                                        alt=""><a href="{{ route('blogdetail') }}" class="overlay-box"><span
                                            class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="{{ route('blogdetail') }}">Successful Growth In Business
                                        2022</a></div>
                                <div class="post-info">Jan 25, 2022</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><img src="{{ asset('user/images/gallery/img-4.jpg') }}"
                                        alt=""><a href="{{ route('blogdetail') }}" class="overlay-box"><span
                                            class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="{{ route('blogdetail') }}">Successful Growth In Business
                                        2022</a></div>
                                <div class="post-info">Jan 26, 2022</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><img src="{{ asset('userimages/gallery/img-3.jpg') }}"
                                        alt=""><a href="{{ route('blogdetail') }}" class="overlay-box"><span
                                            class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="{{ route('blogdetail') }}">Successful Growth In Business
                                        2022</a></div>
                                <div class="post-info">Jan 25, 2022</div>
                            </article>

                        </div>


                    </aside>
                </div>

            </div>
        </div>
    </div>
@endsection
