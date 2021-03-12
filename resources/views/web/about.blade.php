@extends('template.tmpl-web')

@section('title', 'About')

@push('head')
 <style type="text/css">
    .challange_text_inner {
        max-width: 1160px;
        float: inherit;
        text-align: justify;
        margin: auto;
    }
 </style>
@endpush

@section('content')

	<!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h2>About Us</h2>
                <p>Get to know us</p>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->
    
    <!--================Challange Area =================-->
    <section class="challange_area p_100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="challange_text_inner">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt="">
                            <h6>Discover the features</h6>
                            <h2>We don’t hide, we stand tall in front of chalenge</h2>
                        </div>
                        <p>Mighty Magic Digital Pvt. Ltd. is the entertaining platform build in India. Our main hosting is being done from Ahmedabad, Gujarat. Introducing new talent is the idea of our company. Mighty Magic invites developed, semi- develop and row- develop projects from you people linked with entertainment field.

                        Entertainment is an activity that holds the attention and interest of the viewers, or give pleasure and relaxation from this hectic life. If you are thinking of web series, short feature films, music videos, entertainment news, documentary films, brand boosting corporate piece of advertisement or digital marketing, we are here to help you every step of the way. 

                        If you’re looking for support for your latest project, you probably want that support to be something you can rely upon. Mighty Magic Digital Pvt. Ltd. is a professional service provider that takes all the stress away and consistently delivers results on time and in budget. </p>
                        <!-- <div class="c_video">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=62QYQE6k7tg"><img src="img/icon/video-icon.png" alt="">See how we work </a>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="col-lg-6 challange_img">
                    <div class="challange_img_inner">
                        <img class="img-fluid" src="img/popup-photo.jpg" alt="">
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--================End Challange Area =================--> 
    <br><br>
    <!--================We Are Company Area =================-->
    <section class="we_company_area">
        <div class="container">
            <div class="row company_inner">
                <div class="col-lg-6">
                    <div class="left_company_text">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt="">
                            <!-- <h6>Discover the features</h6> -->
                            <!-- <h2>We are a <span>Gibraltar</span> based Company</h2> -->
                        </div>
                        <p style="text-align: justify; margin-top: -48px;">We are one of the best in the industry for our wide range of design & execution services. The Name Mighty Magic Digital stands for creativity, conceptualization, and execution of projects. We tailor a one-stop solution for the range of services that are made as per your requirements in all aspects in the areas such as Web solutions, Graphics designing, Web Series and Serials. If you are planning to create a concise, hard-hitting videos for social media channels, brand-boosting corporate piece, advertisements, documentary film, web-series or short-feature film, we are here to guide you at every step of the way. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="company_skill">
                        <!-- <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellente sque sit am et tellus blandit. Etiam nec odio vestibul.</p> -->
                        <div class="our_skill_inner">
                            <div class="single_skill">
                                <h3>Film Making & OTT Platform</h3>
                                <div class="progress" data-value="70">
                                    <div class="progress-bar">
                                        <div class="progress_parcent"><span class="counter">90</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_skill">
                                <h3>Graphics Design & Creative Development </h3>
                                <div class="progress" data-value="90">
                                    <div class="progress-bar">
                                        <div class="progress_parcent"><span class="counter">90</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_skill">
                                <h3>SEO & Social Media Marketing </h3>
                                <div class="progress" data-value="85">
                                    <div class="progress-bar">
                                        <div class="progress_parcent"><span class="counter">85</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_skill">
                                <h3>Web Solutions </h3>
                                <div class="progress" data-value="90">
                                    <div class="progress-bar">
                                        <div class="progress_parcent"><span class="counter">90</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_skill">
                                <h3>Illustrator </h3>
                                <div class="progress" data-value="75">
                                    <div class="progress-bar">
                                        <div class="progress_parcent"><span class="counter">80</span>%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End We Are Company Area =================-->
    
    @include('template.web-inc.team-people')

@endsection


@push('footer')
@endpush