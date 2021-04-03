@extends('layouts.tmpl-web')

@section('title', 'Portfolio')

@push('head')
<style type="text/css">
    .ms_portfolio_inner .ms_p_item img {
        width: 97%;
    }

    .ms_p_item img {
        border: 2px solid #7e8d9c;
        margin: 6px 0;
    }
</style>
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
                        <li class="active" data-filter=".all"><a href="#">All </a></li>
                        <li data-filter=".film"><a href="#">Film & OTT Platform </a></li>
                        <li data-filter=".brand"><a href="#">Brand identity</a></li>
                        <li data-filter=".web"><a href="#">Web Solution </a></li>
                        <li data-filter=".corporate"><a href="#">Corporate Films & Photography </a></li>
                    </ul>
                </div>
            </div>
            <div class="ms_portfolio_inner">
                <!--  Brand  -->
                <div class="ms_p_item wd_25 brand all">
                    <img src="{{ asset('image/portfolio/brand/InvitationCard.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand all corporate">
                    <img src="{{ asset('image/portfolio/brand/BROCHURE.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_50 brand all">
                    <img src="{{ asset('image/portfolio/brand/Genius-Brochure.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_50 brand all">
                    <img src="{{ asset('image/portfolio/brand/genius-kids-brochure.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand all corporate">
                    <img src="{{ asset('image/portfolio/brand/gipl_logo.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand all corporate">
                    <img src="{{ asset('image/portfolio/brand/aditya ent_logo.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand all corporate">
                    <img src="{{ asset('image/portfolio/brand/Infinity Hunt cover.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand all">
                    <img src="{{ asset('image/portfolio/brand/KHUSHI DESIGN.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand all corporate">
                    <img src="{{ asset('image/portfolio/brand/Uttam Logo.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 brand all">
                    <img src="{{ asset('image/portfolio/brand/vcard.jpg')}}" alt="">
                </div>

                <!--  Film  -->
                <div class="ms_p_item wd_50 film all">
                    <img src="{{ asset('image/portfolio/film/101.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_25 film all">
                    <img src="{{ asset('image/portfolio/film/102.jpg')}}" alt="">
                </div>
                <div class="ms_p_item wd_50 film all">
                    <img src="{{ asset('image/portfolio/film/103.jpg')}}" alt="">
                </div>

                <!--  Film  -->
                <div class="ms_p_item wd_25 web all">
                    <img src="{{ asset('image/portfolio/web/adity-entr.jpg')}}" alt="">
                </div> 

                <!--  Blank  -->
                <div class="ms_p_item wd_25 brand corporate web all">
                    <img src="{{ asset('image/portfolio/blank.jpg')}}" alt="">
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