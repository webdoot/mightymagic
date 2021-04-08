@extends('layouts.tmpl-web')

@section('title', 'Print & Production ')

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
                            <h2>Print & Production </h2>
                        </div>
                        <p>Print materials are an important part of your business's marketing collateral, they're the footprint that your business leaves behind. From brochures and business cards, to private label water bottles and velvet presentation folders, we have the ability to design and produce almost any branded print material for you and your team. Since we work directly with our national printer, we have the ability to cut out the middlemen and provide exceptionally competitive pricing. Just ask us! </p>
                        
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