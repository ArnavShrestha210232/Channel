@extends('user.layout.app')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"
        integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
    <section class="page-title" style="{{ asset('user/background-image:url(images/background/2.png)') }}">
        <div class="container">
            <div class="content">
                <h1>Gallery</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('main') }}">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="gallery-us-area pt-30 pb-70">
        <div class="container gallery mt-5 ">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter">
                        <button data-name="*" class="btn active ">All</button>
                        <button data-name=".photo" class="btn ">Photos</button>
                        <button data-name=".video" class="btn ">Videos</button>

                    </div>
                </div>
            </div>

            <div class="grid">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-sm-6 mb-3 grid-item grid-sizer photo ">
                        <div class="h-product-item">
                            <div class="h-product-thumb">
                                <a href="{{ asset('user/images/gallery/img-5.jpg') }}" class="fancybox"
                                    data-fancybox="gallery1"><img src="{{ asset('user/images/gallery/img-5.jpg') }}"
                                        alt=""></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-sm-6 mb-3 grid-item grid-sizer photo">
                        <div class="h-product-item">
                            <div class="h-product-thumb">
                                <a href="{{ asset('user/images/gallery/img-1.jpg') }}" class="fancybox"
                                    data-fancybox="gallery1"><img src="{{ asset('user/images/gallery/img-1.jpg') }}"
                                        alt=""></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-sm-6 mb-3 grid-item grid-sizer photo">
                        <div class="h-product-item">
                            <div class="h-product-thumb">
                                <a href="{{ asset('user/images/gallery/img-2.jpg') }}" class="fancybox"
                                    data-fancybox="gallery1"><img src="{{ asset('userimages/gallery/img-2.jpg') }}"
                                        alt=""></a>
                            </div>

                        </div>
                    </div>



                </div>


            </div>

        </div>
    </section>
@endsection
@section('js')
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
    <script src="{{ asset('user/js/map-script.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            layoutMode: 'fitRows',
            getSortData: {
                name: function(element) {
                    return $(element).text();
                }
            }
        });
        $('.filter button').on("click", function() {
            var value = $(this).attr('data-name');
            $grid.isotope({
                filter: value
            });
            $('.filter button').removeClass('active');
            $(this).addClass('active');
        })
        $('.sort button').on("click", function() {
            var value = $(this).attr('data-name');
            $grid.isotope({
                sortBy: value
            });
            $('.sort button').removeClass('active');
            $(this).addClass('active');
        })
    </script>
    <!--End Google Map APi-->
@endsection
