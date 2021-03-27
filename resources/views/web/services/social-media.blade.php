@extends('layouts.tmpl-web')

@section('title', 'Social Media Marketing ')

@push('head')
 <style type="text/css">
    .challange_text_inner {
        max-width: 1160px;
        float: inherit;
        text-align: justify;
        margin: auto;        
        padding-left: 20px;
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
    
    <!--================Challange Area =================-->
    <section class="challange_area p_100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="challange_text_inner">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt="">
                            <h2>Social Media Marketing </h2>
                        </div>
                        <p>Social media is where many of your customers spend their leisure time. Facebook, Instagram, LinkedIn and other networking platforms provide wonderful opportunities for businesses to reach their ideal audience at the right time. You can use it to understand your customer’s needs, attract new  customers and help drive traffic to your website. <br><br> 

                        It’s simple. Your business needs to be where your customers are. With social media you can be specific about the kind of audience you want to target, using interests, demographics, location and  other data to zone in on your ideal consumer. <br><br>

                        Having successfully managed a range of clients across all social media platforms, we are familiar with how audiences will respond to different content. Our team take the guesswork out of what your  audience will be interested in. <br><br>

                        We’ll help you establish where your social audience ‘hangs out’; align your social and business goals;  and identify ‘sweet spots’ and ‘hit times’. Ultimately, we ensure your social channels attract, acquire and engage your target audience. </p>
                        
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <!--================End Challange Area =================--> 
    <br><br>

@endsection


@push('footer')
@endpush