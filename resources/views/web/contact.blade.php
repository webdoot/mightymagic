@extends('layouts.tmpl-web')

@section('title', 'Contact')

@push('head')
<style type="text/css">
    .contact_us_form .form-group textarea {
      height: 74px;
    }

    .touch_details i {
      width: 30px;
      background-color: #7c8d93;
      color: white;
      text-align: center;
      padding: 4px 0px;
      border-radius: 4px;
    }
</style>
@endpush

@section('content')

      <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Reach Us</h2>
                    <p>Get in touch</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->       

        @include('layouts.web-inc.get-in-touch')
        
        <!--================Map Area =================-->       
        <section style="border: 6px solid rgba(204, 241, 255, 0.5);">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.861238656782!2d72.55662911493349!3d23.028866584949892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85a1b2821747%3A0x166f0fa41b493895!2sMIGHTY%20MAGIC%20DIGITAL%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1615443192054!5m2!1sen!2sin" width="1960" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <!--================End Map Area =================-->       

@endsection


@push('footer')

@endpush