@extends('layouts.tmpl-web')

@section('title', 'Web Solution')

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
                            <h6>Discover the features</h6>
                            <h2>Web Solution </h2>
                        </div>
                        <p>A website gives you platform to serve your clients better. It almost removes the mark of questions from viewer’s mind. An attractive, usable, accessible and designed website provides the best possible experience to the users. <br><br>

                        Customizing web applications in conformity with the clients’ business models and requirements like Website Design & Development, Portal Development, e-commerce, Website Re-designing, Hosting Solutions, Support and Maintenance to portray the site of your business favorably with smooth interactions and user friendliness. <br><br>

                        Mighty Magic is ready to serve you all web services, like web development, web streaming solution. <br><br>

                        Web solution is a right way to strategies and implies on a good return on investment. Our professional team will help you in reaching and engaging the right audience with digital marketing and web solutions. </p>
                        
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