@extends('admin.layout.app')
@push('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('admincss/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admincss/style-responsive.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <div class="row">
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="panel-group" id="accordion1">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion1_1" data-parent="#accordion1" data-toggle="collapse"
                                                class="accordion-toggle">
                                                1. Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse  in" id="accordion1_1">
                                        <div class="panel-body">
                                            <p> Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book. It has survived not only five centuries, but also
                                                the leap into electronic typesetting, remaining essentially unchanged.</p>
                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type specimen book. It has survived not only five centuries, but also the
                                                leap into electronic typesetting, remaining essentially unchanged.</p>
                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type specimen book. It has survived not only five centuries, but also the
                                                leap into electronic typesetting, remaining essentially unchanged.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion1_2" data-parent="#accordion1" data-toggle="collapse"
                                                class="accordion-toggle">
                                                2. It is a long established fact that a reader will be distracted ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion1_2">
                                        <div class="panel-body">
                                            There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                            middle of text.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion1_3" data-parent="#accordion1" data-toggle="collapse"
                                                class="accordion-toggle">
                                                3. Contrary to popular belief, Lorem Ipsum is not simply random text?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion1_3">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor brunch.
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor, sunt aliqua put
                                            a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                            anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                            ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                            them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel ">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion1_4" data-parent="#accordion1" data-toggle="collapse"
                                                class="accordion-toggle">
                                                4. Various versions have evolved over the years, sometimes by accident?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion1_4">
                                        <div class="panel-body">
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                            'Content here, content here', making it look like readable English. Many desktop
                                            publishing packages and web page editors now use Lorem Ipsum as their default
                                            model text,
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion1_5" data-parent="#accordion1" data-toggle="collapse"
                                                class="accordion-toggle">
                                                5. The standard chunk of Lorem Ipsum used ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion1_5">
                                        <div class="panel-body">
                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                            in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                            old. Richard
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion1_6" data-parent="#accordion1" data-toggle="collapse"
                                                class="accordion-toggle">
                                                6. All the Lorem Ipsum generators on the Internet tend ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion1_6">
                                        <div class="panel-body">
                                            There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                            middle of text.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion1_7" data-parent="#accordion1" data-toggle="collapse"
                                                class="accordion-toggle">
                                                7. There are many variations of passages of Lorem Ipsum available ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion1_7">
                                        <div class="panel-body">
                                            the majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable. If you are going to
                                            use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion1_8" data-parent="#accordion1" data-toggle="collapse"
                                                class="accordion-toggle">
                                                8. passages of Lorem Ipsum available ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion1_8">
                                        <div class="panel-body">
                                            the majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable. If you are going to
                                            use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_2">
                            <div class="panel-group" id="accordion2">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion2_1" data-parent="#accordion2" data-toggle="collapse"
                                                class="accordion-toggle">
                                                1. Reprehenderit enim eiusmod high life accusamury ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse  in" id="accordion2_1">
                                        <div class="panel-body">
                                            <p>
                                                life accusamus terry richardson ad squid. Lorem officia aute, non cupidatat
                                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                Lorem tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                                synth nesciunt you probably haven't heard of the.
                                            </p>
                                            <p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion2_2" data-parent="#accordion2" data-toggle="collapse"
                                                class="accordion-toggle">
                                                2. life accusamus terry richardson ad squid. ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion2_2">
                                        <div class="panel-body">
                                            <p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic.
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion2_3" data-parent="#accordion2" data-toggle="collapse"
                                                class="accordion-toggle">
                                                3. Quinoa nesciunt laborum eiusmod moon tempor ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion2_3">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor brunch.
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor, sunt aliqua put
                                            a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                            anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                            ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                            them accusamus labore sustainable VHS.
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor brunch.
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor, sunt aliqua put
                                            a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                            anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                            ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                            them accusamus labore sustainable VHS.
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor brunch.
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor, sunt aliqua put
                                            a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                            anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                            ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                            them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion2_4" data-parent="#accordion2" data-toggle="collapse"
                                                class="accordion-toggle">
                                                4. Anim pariatur cliche reprehenderit?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion2_4">
                                        <div class="panel-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book. It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion2_5" data-parent="#accordion2" data-toggle="collapse"
                                                class="accordion-toggle">
                                                5. Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion2_5">
                                        <div class="panel-body">
                                            Lorem officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                            nesciunt laborum eiusmod. Brunch Lorem tempor, sunt aliqua put a bird on it
                                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                                            vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                            labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane" id="tab_3">
                            <div class="panel-group" id="accordion3">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion3_1" data-parent="#accordion3" data-toggle="collapse"
                                                class="accordion-toggle">
                                                1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse  in" id="accordion3_1">
                                        <div class="panel-body">
                                            <p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                shoreditch et.
                                            </p>
                                            <p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                shoreditch et.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion3_2" data-parent="#accordion3" data-toggle="collapse"
                                                class="accordion-toggle">
                                                2. Anim pariatur cliche reprehenderit, enim eiusmod high ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion3_2">
                                        <div class="panel-body">
                                            Truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor, sunt aliqua put a
                                            bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor brunch.
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor, sunt aliqua put
                                            a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                            anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                            ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                            them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion3_3" data-parent="#accordion3" data-toggle="collapse"
                                                class="accordion-toggle">
                                                3. Laborum eiusmod. Brunch dsfsdff moon tempor ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion3_3">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor brunch.
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor, sunt aliqua put
                                            a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                            anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                            ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                            them accusamus labore sustainable VHS.
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor brunch.
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor, sunt aliqua put
                                            a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                            anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                            ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                            them accusamus labore sustainable VHS.
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Lorem officia aute, non cupidatat skateboard dolor brunch.
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch Lorem tempor, sunt aliqua put
                                            a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                            anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                            ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                            them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion3_4" data-parent="#accordion3" data-toggle="collapse"
                                                class="accordion-toggle">
                                                4. Non Sumon skateboard dolor Lorem ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion3_4">
                                        <div class="panel-body">
                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                            in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                            old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                            Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                            Lorem Ipsum passage, and going through the cites of the word in classical
                                            literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                            1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                            Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                                            ethics, very popular
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion3_5" data-parent="#accordion3" data-toggle="collapse"
                                                class="accordion-toggle">
                                                5. Contrary to popular belief, Lorem Ipsum is not simply random text.?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion3_5">
                                        <div class="panel-body">
                                            It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                            'Content here, content here', making it look like readable English. Many desktop
                                            publishing packages and web page editors now use Lorem Ipsum as their default
                                            model text, and a search for 'lorem
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accordion3_6" data-parent="#accordion3" data-toggle="collapse"
                                                class="accordion-toggle">
                                                6. The standard chunk of Lorem Ipsum used since the ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="accordion3_6">
                                        <div class="panel-body">
                                            ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                            in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                            old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                            Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                            Lorem Ipsum passage, and going through the cites of the word in classical
                                            literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                            1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                            Evil) by Cicero, written in 45
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="vertical-menu">
                        <li class="active">
                            <a href="#tab_1" data-toggle="tab">
                                <i class="fa fa-bullhorn"></i>
                                General Questions
                            </a>
                        </li>
                        <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-bolt"></i> Lorem Ipsum is simply
                                dummy</a></li>
                        <li><a href="#tab_3" data-toggle="tab"><i class="fa fa-briefcase"></i> Contrary to popular
                                belief</a></li>
                        <li><a href="#tab_1" data-toggle="tab"><i class="fa fa-bookmark"></i> standard chunk of Lorem
                            </a></li>
                        <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-exclamation-circle"></i> Why Chose
                                Flatlab</a></li>
                        <li><a href="#tab_3" data-toggle="tab"><i class="fa fa-plus"></i> Other Questions</a></li>
                    </ul>
                </div>

            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
@endsection
