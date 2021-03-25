@extends('layouts.tmpl-web')

@section('title', 'Contact')

@push('head')
<style type="text/css">
    .contact_us_form .form-group textarea {
      height: 74px;
    }

    .error {
      color: #E51A4B;
    }

    .touch_details i {
      width: 30px;
      background-color: #7c8d93;
      color: white;
      text-align: center;
      padding: 4px 0px;
      border-radius: 4px;
    }

    .banner_inner_text h2, .banner_inner_text p {
      font-family: vagrounde;
    }

    .banner_inner_text h2 {
      font-size: 64px;
    }
</style>
@endpush

@section('content')

      <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Don't Hesitate to Contact Us</h2>
                    <p>We are Always Ready to Meet You</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->       

        @include('layouts.web-inc.contact')

@endsection


@push('footer')

<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>

@endpush