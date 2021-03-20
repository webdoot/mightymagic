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
		margin-top: 115px;
	}

	.clientele img {
		width: 85%;
	}

	.text_3d {
		padding-top: 60px;
	}
</style>
@endpush

@section('content')

      @include('layouts.web-inc.slider')

      @include('layouts.web-inc.best-slider')

      @include('layouts.web-inc.achievment')

@endsection


@push('footer')
@endpush