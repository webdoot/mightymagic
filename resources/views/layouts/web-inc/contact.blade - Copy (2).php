<!-- ================Get in Touch Area =================-->
<style type="text/css">
    .touch_details i {
      width: 30px;
      background-color: #7c8d93;
      color: white;
      text-align: center;
      padding: 4px 0px;
      border-radius: 4px;
    }

    #front-add {
      margin-left: -30px;
      margin-top: -26px;
    }

    #back-add {
      display: none;
    }
    
</style>

<script type="text/javascript">
  $('#front-add').click(function(){
      $('#back-add').show();
      $('#front-add').hide();
  });

  $('#back-add').click(function(){
      $('#front-add').show();
      $('#back-add').hide();
  });
</script>



<section class="get_in_touch_area p_100">
    <div class="container">
        <div class="row get_touch_inner">
            <div class="col-lg-6">
                <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name *">
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email *">
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="number" class="form-control" id="number" name="number" placeholder="Contact *">
                    </div>
                    <div class="form-group col-lg-12">
                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="touch_details">
                    <div class="l_title">
                        <img src="img/icon/title-icon.png" alt="">
                        <h3>One click away from discovering us!</h3>
                    </div>
                    <div id="front-add">
                        <img src="img/address-1.jpg" alt="">
                    </div>
                    <div id="back-add">
                        <p><i class="fa fa-bank"></i> &nbsp; 2A, S.N.HOUSE, Opp. Rock Regency Hotel, C.G.Road, <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ahmedabad- 380006, India.</p>
                        <p><i class="fa fa-envelope"></i> &nbsp; biz@mightymagicdigital.com</p>
                        <p><i class="fa fa-phone"></i> &nbsp; +91 98256 45677 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Get in Touch Area =================