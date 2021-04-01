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

    .accordion {
      margin-top: 118px;
      margin-left: 30px;
    }   

    button.btn-link, button.btn-link:hover {
      text-decoration: none !important;
      color: #7c8d93;
    }  

    .touch_details {
        margin-left: 0;
    }

    .touch_details p {
        font-size: 15px;
        line-height: 28px;
        font-family: "Roboto", sans-serif;
        color: #7c8d93;
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
                    <p>We Are Ready To Assist You</p>
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

<script type="text/javascript">
  
  $('#headingOne').click(function(){
    $('#map').toggle();
  }); 

</script>

@endpush