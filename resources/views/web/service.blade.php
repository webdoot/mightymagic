@extends('layouts.tmpl-web')

@section('title', 'Services')

@push('head')
<style type="text/css">
    .modal-dialog {
        min-height: calc(100vh - 60px);
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: auto;
    }
    @media(max-width: 768px) {
      .modal-dialog {
        min-height: calc(100vh - 20px);
      }
    }

    .modal-content{
        /*background-image: url("{{ asset('img/banner/banner-bg.png') }}");*/
        /*background-image: url("{{ asset('image/unnamed.png') }}");*/
        background-image: url("{{ asset('image/modal-bg.png') }}");
        /*background-image: linear-gradient(to right, #70bafe 0%, #998dff 51%, #70bafe 100%);*/
        border: 6px solid rgba(150, 178, 243);
        background-repeat: no-repeat;
        border-radius: 50px;
    }

    .modal-content input {
        background-color: rgba(255, 255, 255, 0.5);
        height: 52px;
        border-radius: 25px;
        padding: 0px 30px;
        font-size: 12px;
        font-family: "Roboto", sans-serif;
        font-style: italic;
        color: #9b9b9b;
    }

    .modal-header {
        border-bottom: 6px solid rgba(150, 178, 243);
    }
    .modal-header h5{
        color: #103042;
    }

    .f_icon img {
        opacity: .5;
    }

    .feature_item h4 {
        font-size: 22px;
        font-family: vagrounde;
    }
</style>
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
                                <img src="{{ asset('image/icons-1/5.png')}}" alt="">
                            </div>
                            <h4>Film & OTT Platform</h4>
                            <p>Film lets us speak in fresh and exciting ways. No matter our message, film will express it with clarity and creativity. Film, also called as motion picture, a visual art form used to simulate experiences that communicate ideas, stories, perceptions, feelings, beauty or atmosphere through the use of moving images... </p>
                            <a class="more_btn" href="{{route('service.ott')}}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="{{ asset('image/icons-1/1.png')}}" alt="">
                            </div>
                            <h4>Brand Identity</h4>
                            <p>Graphic design is all around you. A design with unique message which gives desired result from that message. The message may be providing information, invoke thoughts or even stimulates meaningful conversation to the viewers. It’s about expressing an idea in the best way using visual story telling... </p>
                            <a class="more_btn" href="{{route('service.brand')}}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="{{ asset('image/icons-1/4.png')}}" alt="">
                            </div>
                            <h4>Web Solutions </h4>
                            <p>A website gives you platform to serve your clients better. It almost removes the mark of questions from viewer’s mind. An attractive website provides the best possible experience to the users. Mighty Magic is ready to serve you all web services, like web development, web streaming solution... </p>
                            <a class="more_btn" href="{{route('service.web')}}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="{{ asset('image/icons-1/2.png')}}" alt="">
                            </div>
                            <h4>Corporate Films & Photography </h4>
                            <p>Corporate films and videos can have a host of applications, whether you want to produce a video for training and motivating employees or whether you would like to highlight the benefits of your products & services while presenting your company's strengths. We can create powerful and lasting films that will remain with the target audience... </p>
                            <a class="more_btn" href="{{route('service.corporate')}}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="{{ asset('image/icons-1/8.png')}}" alt="">
                            </div>
                            <h4>Print & Production </h4>
                            <p style="padding-bottom: 146px">Print materials are an important part of your business's marketing collateral, they're the footprint that your business leaves behind. From brochures and business cards, to private label water bottles and velvet presentation folders...</p>
                            <a class="more_btn" href="{{route('service.print')}}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="{{ asset('image/icons-1/3.png')}}" alt="">
                            </div>
                            <h4>Social Media Marketing  </h4>
                            <p>Social media is where many of your customers spend their leisure time. Facebook, Instagram, LinkedIn and other networking platforms provide wonderful opportunities for businesses to reach their ideal audience at the right time. You can use it to understand your the needs attract new  customers and help drive traffic to your website...</p>
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
                                <h2>Simple solutions for complicated times</h2>
                            </div>
                            <p>It’s likely that all businesses will need to outsource creative services from time to time. Needing to design and print items such as flyers or business cards is fairly typical, but maintaining a constant flow of visually engaging digital content can be instrumental to your online brand awareness. <br> <br>

                            On regular basis need of creative designs and web maintenance, for corporate client we prefer to go with retainership agreement between agencies to client with monthly billing amount. <br> <br>

                            We provide creative graphic design and website maintenance, digital promotion, manage social pages and more in retainer services for which they required time to time new design development, website design and update, marketing material design printing and many more regular services. <br> <br>

                            We cater prioritized service on discounted rates for both creative graphic design and website development tasks of the clients that have been associated with retainer ship agreement. <br> <br>

                            We offer diverse package options for different companies that suit their needs. Retainership will help you to reduce your overall cost and an ease in maintaining a unique and same level quality. Service period for retainership ranges from 6 months to 12 months. </p> <br>
                        </div>
                        <div>
                            <button type="button" class="btn btn-secondary submit_btn" data-toggle="modal" data-target="#quote">Get A Quote</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Service Solution Area 155 =================-->

        @include('layouts.web-inc.modal-quote')

@endsection


@push('footer')
<script src="{{ asset('vendors/circle-bar/circle-progress.min.js')}}"></script>
<script src="{{ asset('vendors/circle-bar/plugins.js')}}"></script>
<script src="{{ asset('js/circle-active.js')}}"></script>

@endpush