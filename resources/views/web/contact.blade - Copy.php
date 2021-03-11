@extends('template.tmpl-web')

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
                    <h2>Contact</h2>
                    <p>Get in touch</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->       

        @include('template.web-inc.get-in-touch')
        
        <!--================Map Area =================-->
        <section class="contact_map_area">
            <div id="mapBox1" class="mapBox1 row m0" 
                data-lat="40.701083" 
                data-lon="-74.1522848" 
                data-zoom="15" 
                data-marker="" 
                data-info=""
                data-mlat=""
                data-mlon="">
            </div>
            <div class="map_location_box">
                <div class="container">
                    <div class="map_l_box_inner">
                        <div class="bd-callout">
                            <h3>Gibraltar Office</h3>
                            <p>Casemates Square, no253 <br /> United kingdom</p>
                            <h4><a href="#">+453678 9283 559</a> <a href="#">contact@template.com</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Map Area =================-->

@endsection


@push('footer')

	<script src="{{ asset('vendors/circle-bar/circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendors/circle-bar/plugins.js') }}"></script>
    <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope/isotope.pkgd.min.js') }}"></script>
    
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('js/gmaps.min.js') }}"></script>
    
    <!-- contact js -->
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    
    <script src="{{ asset('js/circle-active.js') }}"></script>

@endpush