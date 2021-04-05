@extends('layouts.tmpl-web')

@section('title', 'Home')

@push('head')
<style type="text/css">

    .tp-caption, .contacus-txt h2, .contacus-txt p {
      font-family: vagrounde;
      color: #E51A4B !important;
    }

    /* Main slider */
    .slide-top {
		font-family: vagrounde;
      	color: #103042 !important;
      	font-size: 46px;
      	line-height: 56px;
      	width: 1449px;
      	display: block;
		overflow: hidden;
		transform: matrix(1, 0, 0, 1, 0, 0);
		position: absolute;
		top: 310px;
		/*left: 203px;*/
		left: 22%;
		opacity: 1;
		padding-left: 8px;
		z-index: 99;
		text-align: center;
	}

	.slide-top p {
		text-align: left;
	}

	@media (max-width: 2120px){
		 .slide-top {
		 	left: 22%;
		 }
	}

	@media (max-width: 2020px){
		 .slide-top {
		 	left: 21%;
		 }
	}

	@media (max-width: 1919px){
		 .slide-top {
		 	left: 18%;
		 }
	}

	@media (max-width: 1860px){
		 .slide-top {
		 	left: 15%;
		 }
	}

	@media (max-width: 1680px){
		 .slide-top {
		 	left: 13%;
		 }
	}

	@media (max-width: 1640px){
		 .slide-top {
		 	left: 12%;
		 }
	}

	@media (max-width: 1590px){
		 .slide-top {
		 	left: 11%;
		 }
	}

	@media (max-width: 1460px){
		.slide-top {
		 	left: 6%;
		 }
	}	

	@media (max-width: 1360px){
		.slide-top {
		 	left: 5%;
		 }
	}

	@media (max-width: 1319px){
		.slide-top {
		 	left: 9%;
		 }
	}

	@media (max-width: 1260px){
		.slide-top {
		 	left: 7%;
		 }
	}

	@media (max-width: 1198px){
		.slide-top {
		 	left: 15%;
		 }
	}

	@media (max-width: 1144px){
		.slide-top {
		 	left: 11%;
		 }
	}

	@media (max-width: 1060px){
		.slide-top {
		 	left: 9%;
		 }
	}

	@media (max-width: 991px){
		.slide-top {
			font-size: 38px;
      		line-height: 1.2em;
			top: 240px;
		 	left: 11%;
		 }
	}

	@media (max-width: 940px){
		.slide-top {
			font-size: 38px;
      		line-height: 1.2em;
			top: 240px;
		 	left: 9%;
		 }
	}

	@media (max-width: 910px){
		.slide-top {
			font-size: 38px;
      		line-height: 1.2em;
			top: 240px;
		 	left: 8%;
		 }
	}

	@media (max-width: 880px){
		.slide-top {
			font-size: 38px;
      		line-height: 1.2em;
			top: 240px;
		 	left: 7%;
		 }
	}

	@media (max-width: 860px){
		.slide-top {
			top: 240px;
		 	left: 6%;
		 }
	}

	@media (max-width: 840px){
		.slide-top {
		 	left: 5%;
		 }
	}

	@media (max-width: 820px){
		.slide-top {
		 	left: 4%;
		 }
	}

	@media (max-width: 795px){
		.slide-top {
		 	left: 3%;
		 }
	}

	@media (max-width: 780px){
		.slide-top {
		 	left: 2%;
		 }
	}

	@media (max-width: 766px){
		.slide-top {	
		 	left: 4%;
		 }
	}

	@media (max-width: 745px){
		.slide-top {	
		 	left: 3%;
		 }
	}

	@media (max-width: 730px){
		.slide-top {	
		 	left: 2%;
		 }
	}

	@media (max-width: 710px){
		.slide-top {	
		 	left: 2%;
		 }
	}

	@media (max-width: 700px){
		.slide-top {				
			top: 240px;
		 	left: 1%;
		 }
	}

	@media (max-width: 680px){
		.slide-top {				
			top: 48%;
			left: 1%;
		 }
	}

	@media (max-width: 650px){
		.slide-top {				
			line-height: 1.1em;
		 }
	}

	@media (max-width: 580px){
		.slide-top {
			font-size: 29px;
      		line-height: 1.1em;				
			top: 50%;
		 }
	}

	@media (max-width: 479px){
		.slide-top {
			font-size: 29px;
      		line-height: 1.1em;				
			top: 35%;
			left: 13%;
			position: relative;
			left: initial;
		 }

		 .slide-top p {
			text-align: center;
		}
	}	

	/* Achievments */
	.mileston_item {
		background-image: url('../img/3d-shap.png');
	}

	.mileston_item_r {
		background-image: url('../img/3d-shap-1.png');
	}

	.mileston_item, .mileston_item_r {
		background-position: center; 
		background-repeat: no-repeat; 
		background-size: contain; 
		height: 330px;
		text-align: center;	
		width: 400px;	
	}

	.mileston_item {
		margin-bottom: 40px;
	}

	.mileston_item img,
	.mileston_item_r img {
		max-width: 80px;
	}

	.mileston_item h4,
	.mileston_item_r h4 {
		text-align: center;
		font-size: 48px;		
		-webkit-text-fill-color: initial;
		color: #fff;
		width: 400px;
	}

	.mileston_item h5,
	.mileston_item_r h5 {
		color: white;
		font-size: 20px;
		width: 400px;
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

	.mileston_item .counter-icon {
		margin-top: 90px;
	}

	.mileston_item_r .counter-icon {
		padding-top: 90px;
	}	

	.mileston_block_3 {
		margin-top: 187px;
		margin-left: -15%;
	}

	.team_img_inner {
		margin-left: 0;
		max-width: inherit;
		margin-bottom: 0;
		max-width: initial;
		margin-top: -80px;
	}

	.team_img_inner .row {
		margin-left: 0;
		margin-right: 0;
	}	

	@media (max-width: 1230px){ 
		.team_people_area {
		    padding-top: 400px;
		}

		.mileston_block_3 {
		    margin-left: -5%;
		}
	}	

	@media (max-width: 991px){ 
		.team_img_inner {
		    padding-left: 10%;
		    padding-right: 10%;
		    margin-top: 48px;
		}		
	}

	@media (max-width: 767px){ 
		.mileston_block {
			text-align: center;
		}

		.mileston_block_3 {
			margin-top: -8px;
		    margin-left: 12%;
		}			

	}	

	@media (max-width: 575px){ 
		.team_img_inner {
		    padding-left: 0;
		    padding-right: 0;
		}
		
		.mileston_block_3 {		    
		    margin-left: 0;
		}
	}   /*  ./Achievments */
	

	.clientele {
		position: absolute;
		margin-top: 250px;
		margin-left: 50px;
		padding-left: 76px;
		max-width: 53%;
		background: #7699F5;
		padding: 20px;
	}

	.right_text {
		margin-top: 100px;		
	}

	.clientele img {
		/*width: 85%;*/		
	}

	.text_3d {
		padding-top: 60px;
	}

	/* Clientele area */
	.testimonials_area {
	    border-bottom: none;
	    padding-top: 130px;
	    padding-bottom: 0;
	}

	.client_area {
		padding-bottom: 30px;
		background-color: #96B2F3;
	}	

	.client-box {
		position: absolute;
		margin-top: 236px;
		max-width: 800px;
		margin-left: 50px;
		padding: 24px 24px 8px 24px;
	}

	.client-box .owl-dots {
	    text-align: center;
	}
	.client-box .owl-dots .owl-dot.active {
	    background: #97ccfe;
	}
	.client-box .owl-dots .owl-dot {
	    height: 6px;
	    width: 6px;
	    border-radius: 50%;
	    background: #fff;
	    display: inline-block;
	    margin-right: 10px;
	}

	@media (max-width: 1520px){ 
		.right_text {
			margin-top: 0;		
		}

		.client-box {
			max-width: 750px;
		}
	}

	@media (max-width: 1199px){ 
		.right_text {
			margin-top: 0;		
		}

		.client-box {
			max-width: 800px;
		}

		.team_people_area {
		    padding-top: 495px;
		}
	}

	@media (max-width: 991px){ 
		.right_text {
			margin-top: 0;		
		}

		.client-box {
			max-width: 800px;
		}

		.team_people_area {
		    padding-top: 495px;
		}

		.testimonials_area {
		    padding-top: 60px;
		}

		.testimonials_slider .owl-item.center h3,
		.testimonials_slider .owl-item.center p {
		    color: #0b1033;
		}

	}

	@media (max-width: 480px){ 
		.testimonials_area {
		    padding-top: 60px;
		}

		.client-box {
			margin-left: 0;
		}

		.team_people_area {
		    padding-top: 290px;
		}
	}	

	/** Testimonial */
	.shap_slider_inner .item{
	  padding: 0px 0px;
	  margin: 10px;
	}

	.shap_slider_inner .item p {
	    padding: 25px 0px 25px 0px;
	}

	.shap_slider_inner .item .media {
	    float: right;
	}

	.shap_slider_inner .owl-dots {
	    text-align: right;
	    margin-top: 8px;
	}

	/** Upcoming project */
    .upcome_project_inner .item img{
        display: block;
        width: 100%;
        height: auto;
        opacity: .8;
    }

    .upcome_project_inner .owl-stage {
    	/*width: 570px;*/
    }

    .upcome_project_inner .item{
	  margin: 30px;
	}

	.c_video {
		z-index: 99;
		position: absolute;
		top: 154px;
		left: 256px;
	}


</style>
@endpush

@section('content')

  	@include('layouts.web-inc.slider')

  	@include('layouts.web-inc.best-slider')

  	@include('layouts.web-inc.achievment')

  	<!-- ================ Upcoming projects =================-->
    <section class="challange_area p_100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="challange_text_inner">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt="">
                            <h2>Our Upcoming Projects</h2>
                        </div>
                        <p>Every company’s name is known by its work. So let’s have a look on our upcoming projects related to Mighty Magic Digital’s creative ideas presented on reel with reality.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                	<div class="upcome_project_inner owl-carousel">
                		<div class="item" style="width: 570px">
                			<img class="img-fluid" src="../img/trailer-1.jpg" alt="">
                			<div class="c_video">
		                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=LTXD6XZXc3U">
		                        	<img src="../img/icon/video-icon.png" alt=""></a>
		                    </div>
                		</div>

                		<div class="item" style="width: 570px">
                			<img class="img-fluid" src="../img/pp-1.jpg" alt="">
                			<div class="c_video">
		                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=RK1K2bCg4J8">
		                        	<img src="../img/icon/video-icon.png" alt=""></a>
		                    </div>
                		</div>

                		<div class="item" style="width: 570px">
                			<img class="img-fluid" src="../img/swan.jpg" alt="">
                			<div class="c_video">
		                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=rN6nlNC9WQA">
		                        	<img src="../img/icon/video-icon.png" alt=""></a>
		                    </div>
                		</div>

                	</div>
                </div>
            </div>
        </div>
    </section>

    
	<!--================ Upcoming projects =================-->

@endsection


@push('footer')

<script type="text/javascript">

    function shap_carousel1(){
        if ( $('.client-box').length ){
            $('.client-box').owlCarousel({
                loop:true,
                margin: 0,
                items: 1,
                nav:false,
                autoplay: true,
                smartSpeed: 1500,
                dots:true,
                center: true
            })
        }
    }
    shap_carousel1();

    function upcome_project(){
        if ( $('.upcome_project_inner').length ){
            $('.upcome_project_inner').owlCarousel({
            	loop:true,
                margin: 0,
                items: 1,
                nav:false,
                autoplay: true,
                animateOut: 'fadeOut',
    			animateIn: 'fadeIn',
    			// smartSpeed: 5000,
    			// autoplaySpeed: 3000,
            })
        }
    }
    upcome_project();

</script>

@endpush