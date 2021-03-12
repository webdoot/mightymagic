@extends('template.tmpl-web')

@section('title', 'Services')

@push('head')
@endpush

@section('content')

      <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Services</h2>
                    <p>See what we do best</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================End Banner Area =================-->
        <section class="service_feature">
            <div class="container">
                <div class="row feature_inner">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-1.png" alt="">
                            </div>
                            <h4>Film Making and OTT Platform</h4>
                            <p>Film lets us speak in fresh and exciting ways. No matter our message, film will express it with clarity and creativity. Film, also called as motion picture, a visual art form used to simulate experiences that communicate ideas, stories, perceptions, feelings, beauty or atmosphere through the use of moving images. </p>
                            <a class="more_btn" href="{{route('service.ott')}}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-2.png" alt="">
                            </div>
                            <h4>Brand Identity</h4>
                            <p>Graphic design is all around you. A design with unique message which gives desired result from that message. The message may be providing information ,invoke thoughts or even stimulates meaningful conversation. It’s about expressing an idea in the best way using visual story telling. </p>
                            <a class="more_btn" href="{{route('service.brand')}}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-3.png" alt="">
                            </div>
                            <h4>Web Solutions </h4>
                            <p>A website gives you platform to serve your clients better. It almost removes the mark of questions from viewer’s mind. An attractive, usable, accessible and designed website provides the best possible experience to the users. Mighty Magic is ready to serve you all web services, like web development, web streaming solution. </p>
                            <a class="more_btn" href="{{route('service.web')}}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-4.png" alt="">
                            </div>
                            <h4>Corporate Films & Professional Photography </h4>
                            <p>Corporate films and videos can have a host of applications, whether you want to produce a video for training and motivating employees or whether you would like to highlight the benefits of your products / services while presenting your company's strengths. Whatever your requirements are, we can create powerful and lasting films that will remain with the target audience. 
                            Without Photography the world of advertising does not exist. The world witnessed the boom of professional photography services in every of life. Business houses cannot sell their wares. </p>
                            <a class="more_btn" href="{{route('service.corporate')}}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-5.png" alt="">
                            </div>
                            <h4>Print & Production </h4>
                            <p>Our printing and production service comprise of experienced in the printing domain.</p>
                            <a class="more_btn" href="{{route('service.print')}}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/f-icon-6.png" alt="">
                            </div>
                            <h4>Social Media Marketing  </h4>
                            <p>Social media is where many of your customers spend their leisure time. Facebook, Instagram, LinkedIn and other networking platforms provide wonderful opportunities for businesses to reach their ideal audience at the right time. You can use it to understand your customer’s needs, attract new  customers and help drive traffic to your website.</p>
                            <a class="more_btn" href="{{route('service.social')}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Circle Chart Area =================-->
        <section class="circle_chart_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="75" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>Hard work</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="83" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>Creativity</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="25" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>Good luck</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle_progress circular style-polygon" data-percentage="95" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                            <div class="circle_progress_inner">
                                <strong></strong>
                                <span class="percentage"></span>
                                <h4>Development</h4>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Circle Chart Area =================-->
        
        <!--================Service Solution Area =================-->
        <section class="service_solution_area p_100">
            <div class="container">
                <div class="row s_solution_inner">
                    <div class="col-lg-6">
                        <div class="s_solution_item">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h6>Discover the features</h6>
                                <h2>Simple solutions for complicated times</h2>
                            </div>
                            <p>It’s likely that all businesses will need to outsource creative services from time to time. Needing to design and print items such as flyers or business cards is fairly typical, but maintaining a constant flow of visually engaging digital content can be instrumental to your online brand awareness. <br> <br>

                            On regular basis need of creative designs and web maintenance, for corporate client we prefer to go with retainership agreement between agencies to client with monthly billing amount. <br> <br>

                            We provide creative graphic design and website maintenance, digital promotion, manage social pages and more in retainer services for which they required time to time new design development, website design and update, marketing material design printing and many more regular services. <br> <br>

                            We cater prioritized service on discounted rates for both creative graphic design and website development tasks of the clients that have been associated with retainer ship agreement. <br> <br>

                            We offer diverse package options for different companies that suit their needs. Retainership will help you to reduce your overall cost and an ease in maintaining a unique and same level quality. Service period for retainership ranges from 6 months to 12 months. </p> <br>
                        </div>
                        <div>
                            <button type="button" class="btn btn-secondary submit_btn" data-toggle="modal" data-target="#exampleModal">Get A Quote</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Service Solution Area 155 =================-->

        @include('template.web-inc.modal-quote')

@endsection


@push('footer')
<script src="{{ asset('vendors/circle-bar/circle-progress.min.js')}}"></script>
<script src="{{ asset('vendors/circle-bar/plugins.js')}}"></script>
<script src="{{ asset('js/circle-active.js')}}"></script>

@endpush