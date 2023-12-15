@extends('user.layout.app')
@section('content')
    <section class="page-title" style="background-image:url(images/background/2.png)">
        <div class="container">
            <div class="content">
                <h1>IELTS</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('main') }}">Home</a></li>
                    <li>Pages</li>
                    <li>IELTS</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <div class="sidebar-page-container">
        <div class="container">
            <div class="row clearfix">

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="blog-cat">
                                <li><a href="{{ route('abroad') }}">Australia</a></li>
                                <li><a href="{{route('abroad')}}">Canada</a></li>
                                <li><a href="{{route('abroad')}}">United Kingdom</a></li>
                                <li><a href="{{route('abroad')}}">USA</a></li>
                                <li><a href="{{route('abroad')}}">Denmark</a></li>
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

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="services-single">
                        <h4>IELTS Class</h4>
                        <div class="text">
                            <p>IELTS is an English language exam that must be taken by foreign applicants who want to study
                                or work in a country where English is the primary language of communication. The UK,
                                Australia, New Zealand, the United States,
                                and Canada are the most common nations where IELTS is recognised for university
                                applications. The exam primarily assesses the test taker's ability to communicate in the
                                four core English language abilities of hearing,
                                reading, speaking, and writing.</p>
                            <p>You may be aware that you need to get a specific IELTS score in order to pursue your
                                employment or school goals, and you may be working toward that objective by preparing for
                                the exam. But, have you considered some of the
                                additional benefits of studying even more for the IELTS Academic test in order to boost your
                                results? Here are our top five picks!</p>
                        </div>
                        <ul class="list-style-four">
                            <li>You will receive a globally recognised certification</li>
                            <li>You will enhance your command of the English language</li>
                            <li>You will have a better understanding of the English that you require.</li>
                            <li>Because you'll have a clear objective, you'll be inspired to study harder.</li>
                        </ul>

                        <!--Services Info Tabs-->
                        <div class="Services-info-tabs pt-5">
                            <h4>IELTS Preparation</h4>
                            <!--Service Tabs-->
                            <div class="service-tabs tabs-box">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-audit" class="tab-btn active-btn">Speaking</li>
                                    <li data-tab="#prod-strategy" class="tab-btn">Reading</li>
                                    <li data-tab="#prod-sustainability" class="tab-btn">Writing</li>
                                    <li data-tab="#listening" class="tab-btn"> Listening</li>
                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-audit">
                                        <div class="content">
                                            <div class="text">
                                                <p>The Speaking test will evaluate your ability to communicate in English.
                                                    The test will run between 11 and 14 minutes and will consist of you
                                                    discussing a variety of themes with an IELTS examiner. </p>
                                                <p>It is preferable to practise a little bit every day and gradually enhance
                                                    your skills than to speak your original language the entire week until
                                                    your IELTS lesson. On test day, most IELTS students need
                                                    10-15 minutes to 'warm-up' and perform to the best of their abilities.
                                                    The examiner will assess you on how well you can express your ideas and
                                                    opinions. Speak clearly and at a natural pace. If you
                                                    speak too quickly, you may make mistakes or pronounce words incorrectly.
                                                    It is better to use simple, commonly used vocabulary and to use it
                                                    correctly than to use advanced vocabulary that you are
                                                    unsure about.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="prod-strategy">
                                        <div class="content">
                                            <div class="text">
                                                <p>Choose a variety of texts and alternate between studying and reading for
                                                    enjoyment. Spend 20-30 minutes every day reading various texts, such as
                                                    newspaper stories, blogs, books, and textbook activities.
                                                    While reading, experiment with different approaches such as skimming and
                                                    scanning the text rapidly, answering questions in detail, and
                                                    summarising the major points. Choose areas of interest, but
                                                    also attempt to study books on a variety of topics, as IELTS subjects
                                                    are drawn from a wide range of disciplines. Examine your comprehension.
                                                    As you develop and get faster, you can reduce the time
                                                    limit. Read aloud to your friends or to yourself. This will improve your
                                                    pronunciation and fluency. It will also boost your self-esteem.
                                                    Familiarise yourself with the format of the exam and the length
                                                    of each section. Ensure to practise answering each sort of question in
                                                    the reading examination. </p>

                                            </div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="prod-sustainability">
                                        <div class="content">
                                            <div class="text">
                                                <p>It's a good idea to look at newspapers or short articles in
                                                    general-interest publications on a variety of subjects to study
                                                    high-quality writing styles in diverse formats. Underlining relevant
                                                    vocabulary
                                                    items, underlining and highlighting grammar structures, underlining
                                                    linking devices within sentence paragraphs, and applying what you have
                                                    learnt to your own writing can be helpful. </p>

                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab-->
                                    <div class="tab" id="listening">
                                        <div class="content">
                                            <div class="text">
                                                <p>The purpose of the IELTS Listening part is to assess your listening
                                                    abilities. Various listening exercises and listening to broad listening
                                                    resources are effective to improve your listening abilities.
                                                    Section 3 is nearly often concerned with education. For instance, pupils
                                                    and a tutor discussing an assignment. Learn as much as you can about
                                                    university studies. This will help you comprehend the
                                                    section better. Plan your listening activities and check them off as you
                                                    finish them. Listen to something a few times at different speeds. Don't
                                                    get bogged down in the details; instead, concentrate
                                                    on the big picture. Take notes as you listen, and then go back to see
                                                    what expressions or cues in the audio helped you understand the message.
                                                    You have 30 seconds after each section to double-check
                                                    your answers. It is critical to double-check spelling, plurals, and word
                                                    forms. Keep in mind that only accurately written responses will earn you
                                                    points. Make an educated assumption, as your goal
                                                    should be to have no blank places on your response sheet. Make a
                                                    listening routine for yourself and stick to it. Every day, listen to
                                                    something new. Choose from a variety of sources, such as elllo.org.
                                                    Understanding spoken English from around the world will be easier with a
                                                    diversity of accents and dialects.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
