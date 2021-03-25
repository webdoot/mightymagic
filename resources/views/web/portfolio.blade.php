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
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        <li data-filter=".brand"><a href="#">Film & OTT Platform </a></li>
                        <li data-filter=".brand"><a href="#">Brand identity</a></li>
                        <li data-filter=".design"><a href="#">Web Solution </a></li>
                        <li data-filter=".arc"><a href="#">Corporate Films & Photography </a></li>
                        <li data-filter=".photo"><a href="#">Print & Production</a></li>
                        <li data-filter=".photo"><a href="#">Motion Pictures</a></li>
                    </ul>
                </div>
            </div>
            <div class="ms_portfolio_inner">
                <div class="ms_p_item wd_25 brand arc photo">
                    <img src="img/portfolio/ms-portfolio/ms-p-1.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 brand arc photo">
                    <img src="img/portfolio/ms-portfolio/ms-p-2.jpg" alt="">
                </div>
                <div class="ms_p_item wd_50 brand">
                    <img src="img/portfolio/ms-portfolio/ms-p-3.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 brand arc photo">
                    <img src="img/portfolio/ms-portfolio/ms-p-4.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 brand arc photo">
                    <img src="img/portfolio/ms-portfolio/ms-p-5.jpg" alt="">
                </div>
                <div class="ms_p_item wd_50">
                    <img src="img/portfolio/ms-portfolio/ms-p-6.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 design arc">
                    <img src="img/portfolio/ms-portfolio/ms-p-7.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 design arc">
                    <img src="img/portfolio/ms-portfolio/ms-p-8.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 design arc">
                    <img src="img/portfolio/ms-portfolio/ms-p-9.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 design arc">
                    <img src="img/portfolio/ms-portfolio/ms-p-10.jpg" alt="">
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