@extends('template.tmpl-web')

@section('title', 'About')

@push('head')
 <style type="text/css">
     
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
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. </p>
                        <div class="c_video">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=62QYQE6k7tg"><img src="img/icon/video-icon.png" alt="">See how we work </a>
                        </div>
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
    
    <!--================Testimonials Slider Area =================-->
    <section class="testimonials_area">
        <div class="container">
            <div class="testimonials_slider owl-carousel">
                <div class="item">
                    <div class="testi_item">
                        <h3>“Simply professionals”</h3>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <div class="d-flex">
                                <img class="rounded-circle" src="img/testimonials/testi-1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Maria Smith</h4>
                                <h5>CEO Enterprise</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <h3>“They are the best”</h3>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <div class="d-flex">
                                <img class="rounded-circle" src="img/testimonials/testi-2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Chriss Turner</h4>
                                <h5>CEO Enterprise</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <h3>“We just love them”</h3>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <div class="d-flex">
                                <img class="rounded-circle" src="img/testimonials/testi-3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Julie Smart</h4>
                                <h5>CEO Enterprise</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <h3>“Simply professionals”</h3>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <div class="d-flex">
                                <img class="rounded-circle" src="img/testimonials/testi-1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Maria Smith</h4>
                                <h5>CEO Enterprise</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Testimonials Slider Area =================-->
    
    <!--================We Are Company Area =================-->
    <section class="we_company_area p_100">
        <div class="container">
            <div class="row company_inner">
                <div class="col-lg-6">
                    <div class="left_company_text">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt="">
                            <h6>Discover the features</h6>
                            <h2>We are a <span>Gibraltar</span> based Company</h2>
                        </div>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="company_skill">
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellente sque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                        <div class="our_skill_inner">
                            <div class="single_skill">
                                <h3>Development</h3>
                                <div class="progress" data-value="70">
                                    <div class="progress-bar">
                                        <div class="progress_parcent"><span class="counter">70</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_skill">
                                <h3>Design</h3>
                                <div class="progress" data-value="90">
                                    <div class="progress-bar">
                                        <div class="progress_parcent"><span class="counter">90</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_skill">
                                <h3>SEO</h3>
                                <div class="progress" data-value="85">
                                    <div class="progress-bar">
                                        <div class="progress_parcent"><span class="counter">85</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_skill">
                                <h3>Development</h3>
                                <div class="progress" data-value="90">
                                    <div class="progress-bar">
                                        <div class="progress_parcent"><span class="counter">90</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_skill">
                                <h3>Management</h3>
                                <div class="progress" data-value="75">
                                    <div class="progress-bar">
                                        <div class="progress_parcent"><span class="counter">75</span>%</div>
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
    
    <!--================End We Are Company Area =================-->
    <section class="talk_area">
        <div class="container">
            <div class="talk_text">
                <h4>Are you ready to talk?</h4>
                <a href="mailto:contact@sierracompany.com">contact@sierracompany.com</a>
            </div>
        </div>
    </section>
    <!--================End We Are Company Area =================-->

@endsection


@push('footer')
@endpush