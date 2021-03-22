@extends('layouts.tmpl-web')

@section('title', 'Home')

@push('head')
<style type="text/css">
	.l_title h2 {
		font-size: 40px;
	}

	.mileston_item {
	    background-color: blueviolet;
	    /*background: #79ccff;
		background: -moz-linear-gradient(left, #79ccff 0%, #9b75ff 100%);
		background: -webkit-linear-gradient(left, #79ccff 0%, #9b75ff 100%);*/
		border-radius: 10px;
	}

	.mileston_item h4 {
		text-align: center;
		font-size: 60px;
	}

	.mileston_item h5 {
		text-align: center;
		color: white;
	}

	.counter-icon{
		backface-visibility: hidden;
		-webkit-transform: translate3d(0,0,0);
		-moz-transform: translate3d(0,0,0);
		transform: translate3d(0,0,0);
		-webkit-transition: transform .3s cubic-bezier(.21,.6,.44,2.18);
		-moz-transition: transform .3s cubic-bezier(.21,.6,.44,2.18);
		transition: transform .3s cubic-bezier(.21,.6,.44,2.18);
	}

	@media (min-width: 1521px){ 
		.mileston_block {
			margin-top: -45px;
		}
		.mileston_item {
			/*margin: 12px;*/
			margin: 5%;
			/*padding: 20px 66px;*/
		    padding: 10% 23%;
		}

		.mileston_item img {
			max-width: 120px;
		}

		.mileston_item h4 {
			font-size: 60px;
		}

		.mileston_block_3 {
			margin-top: 136px;
			margin-left: -5%;
		}
	}

	@media (max-width: 1520px){ 
		.mileston_block {
			margin-top: -45px;
		}
		.mileston_item {
			margin: 5%;
			/*margin-top: 24px;*/
		    /*padding: 20px 30px;*/
		    padding: 10% 23%;
		}
		.mileston_item img {
			max-width: 100px;
		}

		.mileston_item h4 {
			font-size: 55px;
		}

		.mileston_block_3 {
			margin-top: 136px;
			margin-left: -5%;
		}
	}

	@media (max-width: 1199px){ 
		.mileston_block {
			margin-top: -45px;
		}
		.mileston_item {
			/*margin-top: 12px;*/
		    /*padding: 18px 20px;*/
		    margin: 5%;
		    padding: 10% 20%;
		}
		.mileston_item img {
			max-width: 90px;
		}

		.mileston_item h4 {
			font-size: 48px;
		}

		.mileston_block_3 {
			margin-top: 136px;
			margin-left: -5%;
		}
	}

	@media (max-width: 991px){ 
		.mileston_block {
			margin-top: -10px;
		}
		.mileston_item {
			/*margin-top: 24px;*/
		    /*padding: 20px 66px;*/
 			margin: 5%;
		    padding: 10% 25%;
		}
		.mileston_item img {
			max-width: 120px;
		}

		.mileston_item h4 {
			font-size: 60px;
		}

		.mileston_block_1 {
			text-align: center;
		}

		.mileston_block_3 {
			margin-top: 136px;
			margin-left: -5%;
		}
	}

	@media (max-width: 767px){ 
		.mileston_block {
			margin-top: -10px;
		}
		.mileston_item {
			/*margin-top: 24px;*/
		    /*padding: 20px 66px;*/
		    margin: 2%;
		    padding: 10% 35%;
		}
		.mileston_item img {
			max-width: 130px;
		}

		.mileston_item h4 {
			font-size: 60px;
		}

		.mileston_block_3 {
			margin-top: 1%;
			margin-left: 0;
			text-align: center;
		}
	}	

	@media (max-width: 480px){ 
		.mileston_item {
			/*margin-top: 24px;*/
		    /*padding: 20px 66px;*/
		    margin: 2%;
		    padding: 10% 20%;
		}
	}

	.clientele {
		position: absolute;
	}

	.clientele img {
		width: 85%;
	}

	.text_3d {
		padding-top: 60px;
	}

	/* Clientele area */
	.testimonials_area {
	    /*border-bottom: 1px solid #bbbec1;*/
	    border-bottom: none;
	    padding-top: 130px;
	    padding-bottom: 0;
	}

	.client_area {
		/*padding-top: 30px;*/
		padding-bottom: 30px;
		/*background-color: #8A2BE2;*/
		background-color: #96B2F3;
	}

	.owl-nav .owl-prev {
		height: 120px;

		-webkit-transition: all 400ms ease-out;
		-o-transition: all 400ms ease-out;
		transition: all 400ms ease-out;

		background-image: linear-gradient(to right, #70bafe 0%, #998dff 51%, #70bafe 100%);
		background-size: 200% auto;
		width: 138px;
		border: 10px solid rgba(204, 241, 255, 0.5);

		border-bottom-right-radius: 60px;
	    border-top-right-radius: 60px;
	    border-left: 0px;
	}		


	.owl-nav .owl-next {
		
	}


</style>
@endpush

@section('content')

  	@include('layouts.web-inc.slider')

  	@include('layouts.web-inc.best-slider')

  	@include('layouts.web-inc.achievment')

  	@include('layouts.web-inc.testimonial')

  <div style="margin-top: -60px; margin-bottom: -23%; position: relative; z-index: -99;">
  	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#C7BFF6" fill-opacity="1" d="M0,160L60,181.3C120,203,240,245,360,240C480,235,600,181,720,181.3C840,181,960,235,1080,245.3C1200,256,1320,224,1380,208L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  </div>
  <div style="margin-bottom: -12px; opacity: 0.9">
  	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 250"><path fill="#96B2F3" fill-opacity="1" d="M0,128L30,144C60,160,120,192,180,192C240,192,300,160,360,154.7C420,149,480,171,540,170.7C600,171,660,149,720,128C780,107,840,85,900,106.7C960,128,1020,192,1080,202.7C1140,213,1200,171,1260,154.7C1320,139,1380,149,1410,154.7L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
  </div>

	<section class="client_area">
        <div class="client_slider owl-carousel">
            <div class="item">         
                <img class="img-thumbnail" src="image/client-1/1.jpg" alt="">
            </div>
            <div class="item">	      
                <img class="img-thumbnail" src="image/client-1/2.jpg" alt="">
            </div>
            <div class="item">	  
                <img class="img-thumbnail" src="image/client-1/3.jpg" alt="">
            </div>
            <div class="item">	    
                <img class="img-thumbnail" src="image/client-1/4.jpg" alt="">
            </div>
            <div class="item">        
                <img class="img-thumbnail" src="image/client-1/5.jpg" alt="">
            </div>
            <div class="item">        
                <img class="img-thumbnail" src="image/client-1/6.jpg" alt="">
            </div>
            <div class="item">	    
                <img class="img-thumbnail" src="image/client-1/7.jpg" alt="">
            </div>
            <div class="item">	     
                <img class="img-thumbnail" src="image/client-1/8.jpg" alt="">
            </div>
            <div class="item">	        
                <img class="img-thumbnail" src="image/client-1/9.jpg" alt="">
            </div>
            <div class="item">     
                <img class="img-thumbnail" src="image/client-1/10.jpg" alt="">
            </div>
            <div class="item">	     
                <img class="img-thumbnail" src="image/client-1/11.jpg" alt="">
            </div>
            <div class="item">      
                <img class="img-thumbnail" src="image/client-1/12.jpg" alt="">
            </div>
            <div class="item">     
                <img class="img-thumbnail" src="image/client-1/13.jpg" alt="">
            </div>
            <div class="item">	     
                <img class="img-thumbnail" src="image/client-1/14.jpg" alt="">
            </div>
            <div class="item">	  
                <img class="img-thumbnail" src="image/client-1/15.jpg" alt="">
            </div>
            <div class="item">     
                <img class="img-thumbnail" src="image/client-1/16.jpg" alt="">
            </div>
            <div class="item">   
                <img class="img-thumbnail" src="image/client-1/17.jpg" alt="">
            </div>
        </div>
	</section>


@endsection


@push('footer')

<script type="text/javascript">
	function testimoninals_carousel(){
        if ( $('.client_slider').length ){
            $('.client_slider').owlCarousel({
            	autoHeight: true,
            	autoWidth:true,
                loop:true,
                // items: 4,
                nav:false,
                autoplay: true,
                smartSpeed: 1500,
                dots:true,
                center: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        // items: 1,
                        center: false,
                        margin: 15 
                    },
                    700: {
                        // items: 2,
                        center: false,
                        margin: 15 
                    },
                    992: {
                        // items: 3,
                        margin: 15
                    },
                    1200: {
                        // items: 4,
                        margin: 15
                    }
                }
            })
        }
    }
    testimoninals_carousel();

    function testimoninals1_carousel(){
        if ( $('.client1_slider').length ){
            $('.client1_slider').owlCarousel({
            	autoHeight: true,
            	autoWidth:true,
                loop:true,
                items: 1,
                nav:false,
                autoplay: true,
                smartSpeed: 1500,
                dots:true,
                center: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        // items: 1,
                        center: false,
                        margin: 15 
                    },
                    700: {
                        // items: 2,
                        center: false,
                        margin: 15 
                    },
                    992: {
                        // items: 3,
                        margin: 15
                    },
                    1200: {
                        // items: 4,
                        margin: 15
                    }
                }
            })
        }
    }
    testimoninals1_carousel();
</script>

@endpush