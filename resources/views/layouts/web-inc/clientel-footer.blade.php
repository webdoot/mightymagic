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


    function testimoninals_carousel(){
        if ( $('.client_slider').length ){
            $('.client_slider').owlCarousel({
                autoHeight: true,
                autoWidth:true,
                loop:true,
                // items: 1,
                nav:false,
                autoplay: true,
                smartSpeed: 1500,
                dots:true,
                center: true,
                margin: 40,
                responsiveClass: true,
                // responsive: {
                //     0: {
                //         // items: 1,
                //         center: false,
                //         margin: 15 
                //     },
                //     700: {
                //         // items: 2,
                //         center: false,
                //         margin: 15 
                //     },
                //     992: {
                //         // items: 3,
                //         margin: 15
                //     },
                //     1200: {
                //         // items: 4,
                //         margin: 40
                //     }
                // }
            })
        }
    }
    testimoninals_carousel();