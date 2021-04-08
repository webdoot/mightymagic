@extends('layouts.tmpl-web')

@section('title', 'Brand Identity')

@push('head')
 <style type="text/css">
    .challange_text_inner {
        max-width: 1160px;
        float: inherit;
        margin: auto;        
        padding-left: 20px;
    }

    .challange_text_inner p{
        text-align: justify;
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
    <section class="challange_area" style="padding-top: 50px; padding-bottom: 100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="challange_text_inner">
                        <div class="l_title">
                            <img src="{{ asset('img/icon/title-icon.png')}}" alt="">
                            <h2>Brand Identity </h2>
                        </div>
                        <p>Graphic design is all around you. A design with unique message which gives desired result from that message. The message may be providing information, invoke thoughts or even stimulates meaningful conversation. It’s about expressing an idea in the best way using visual story telling. <br><br>

                        Everything we do starts with a conversation. We are here to act as your consultant, guide and mentor through out the process to ensure your project exceed the expectations. Once we have figured out what you want and how we are going to make it a reality, we will start the creative part. We have got experienced professionals and talented team of graphic designers you could ever need to boost your product as a brand. <br><br>

                        Designing and developing full-fledged Brochures/Catalogues, Banners, Flyers, Posters, Business cards, Letterheads, Magazines/Books, Commercial and Industrial Photography for the brands who need compelling designs and advertising to impress their audience. <br><br>

                        The way we see it, part of being professional is speaking up when we think you need a helping hand. When we do this, were not shooting holes in your hard work for the sake of it. Mighty Magic Digital is doing this work since 2007, we understand how much your creative vision means to you. Instead, what we’re doing is leveraging our experience to point out where we think things could be better to enhance the finished product. </p>
                        
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