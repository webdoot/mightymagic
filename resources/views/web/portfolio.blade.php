@extends('layouts.tmpl-web')

@section('title', 'Portfolio')

@push('head')
@endpush

@section('content')

      <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Portfolio</h2>
                    <p>See our best work</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Portfolio Area =================-->
        <section class="portfolio_area">
            <div class="container">
                <div class="portfolio_filter">
                    <ul>
                        <li data-filter=".film"><a href="#">Film & OTT Platform </a></li>
                        <li data-filter=".brand"><a href="#">Brand identity</a></li>
                        <li data-filter=".web"><a href="#">Web Solution </a></li>
                        <li data-filter=".corporate"><a href="#">Corporate Films & Photography </a></li>
                    </ul>
                </div>
            </div>
            <div class="ms_portfolio_inner">
                <!--  Brand  -->
                <div class="ms_p_item wd_25 brand">
                    <img src="{{ asset('image/portfolio/brand/aditya-ent_logo.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand">
                    <img src="{{ asset('image/portfolio/brand/BROCHURE.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_50 brand">
                    <img src="{{ asset('image/portfolio/brand/Genius-Brochure.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand">
                    <img src="{{ asset('image/portfolio/brand/InvitationCard.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand">
                    <img src="{{ asset('image/portfolio/brand/gipl_logo.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand">
                    <img src="{{ asset('image/portfolio/brand/Infinity Hunt cover.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_50 brand">
                    <img src="{{ asset('image/portfolio/brand/genius-kids-brochure.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand">
                    <img src="{{ asset('image/portfolio/brand/KHUSHI DESIGN.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand">
                    <img src="{{ asset('image/portfolio/brand/Uttam Logo.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand">
                    <img src="{{ asset('image/portfolio/brand/vcard.jpg')}}" alt="">
                </div>

                <!--  Film  -->
                <div class="ms_p_item wd_25 film">
                    <img src="{{ asset('image/portfolio/film/101.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_50 film">
                    <img src="{{ asset('image/portfolio/film/102.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 film">
                    <img src="{{ asset('image/portfolio/film/103.jpg')}}" alt="">
                </div>
            </div>
        </section>
        <!--================End Portfolio Area =================-->

@endsection


@push('footer')

    <script src="{{ asset('vendors/circle-bar/circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendors/circle-bar/plugins.js') }}"></script>
    <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope/isotope.pkgd.min.js') }}"></script>    
    <script src="{{ asset('js/circle-active.js') }}"></script>

@endpush