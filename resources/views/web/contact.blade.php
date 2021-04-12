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

    /**  Accord  */
    .accordion {
      margin-top: 118px;
      margin-left: 30px;
    }       

    button.btn-link, button.btn-link:hover {
      text-decoration: none !important;
      color: #6b7d8e;
      font-family: vagrounde;
      font-size: 20px;
    }  

    @media (max-width: 560px){
         .accordion {
          margin-left: 0;
        }

        button.btn-link, button.btn-link:hover {
          font-size: 16px;
        } 

        button.btn-link img{
          width: 45px;
        }

        .card-header {
          padding: 0;
        }

        .touch_details {
            margin-top: 30px;
            margin-bottom: -10px;
        }
    }

    .card {
      border: none;
    }

    .card-header {
        background-color: #fff !important;
        border-bottom: none;
    }


    .touch_details {
        margin-left: 36px;
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

    .error {
      color: #E51A4B;
    }

    .swal2-actions button.swal2-styled {
        background-image: linear-gradient(to right, #70bafe 0%, #998dff 51%, #70bafe 100%);
        background-size: 200% auto;
        transition: all 400ms ease-out;
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

        <section class="get_in_touch_area" style="padding-top: 50px; padding-bottom: 100px">
          <div class="container">
            <div class="row get_touch_inner">
              <div class="col-lg-6">
                  <form class="contact_us_form row" action="{{route('contact.submit')}}" method="post" id="contactForm" novalidate="novalidate">
                      @csrf
                      <div class="form-group col-lg-6">
                        <input type="text" class="form-control" name="name" placeholder="Name *">
                        @error('name')
                        <label for="name" class="error">{{ $message }}</label>
                        @enderror
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="email" class="form-control" name="email" placeholder="Email *">
                        @error('email')
                        <label for="name" class="error">{{ $message }}</label>
                        @enderror
                      </div>
                      <div class="form-group col-lg-12">
                        <input type="text" class="form-control" name="phone" placeholder="Contact *">
                        @error('phone')
                        <label for="name" class="error">{{ $message }}</label>
                        @enderror
                      </div>
                      <div class="form-group col-lg-12">
                        <textarea class="form-control" name="message" rows="1" placeholder="Message *"></textarea>
                        @error('message')
                        <label for="name" class="error">{{ $message }}</label>
                        @enderror
                      </div>
                      <div class="form-group col-lg-12">
                        <button type="submit" class="btn submit_btn form-control">Send</button>
                      </div>
                  </form>
              </div>
              <div class="col-lg-6">
                <div class="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <img src="{{ asset('img/icon/title-icon.png')}}" alt=""> &nbsp; One click away from discovering us!
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                      <div class="card-body touch_details">
                        <p><i class="fa fa-bank"></i> &nbsp; 2A, S.N.HOUSE, Opp. Rock Regency Hotel, C.G.Road, <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ahmedabad- 380006, India.</p>
                        <p><i class="fa fa-envelope"></i> &nbsp; biz@mightymagicdigital.com</p>
                        <p><i class="fa fa-phone"></i> &nbsp; +91 98256 45677 </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="map" style="border-top: 1px solid rgba(0,0,0,.125); display: none;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1543.8254752510647!2d72.55795101312692!3d23.029041308765986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85a1b2821747%3A0x166f0fa41b493895!2sMIGHTY%20MAGIC%20DIGITAL%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1617262123139!5m2!1sen!2sin" width="1920" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

@endsection


@push('footer')

<!-- <script src="{{ asset('js/jquery.form.js') }}"></script> -->
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>

<script type="text/javascript">
  
  $(function(){
      $('#headingOne').click(function(){
        $('#map').toggle();
      });
  });
   

  $(function(){
    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                phone: {
                    required: true,
                    minlength: 10
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: "come on, you have a name, don't you?",
                    minlength: "your name must consist of at least 2 characters"
                },
                subject: {
                    required: "come on, you have a subject, don't you?",
                    minlength: "your subject must consist of at least 4 characters"
                },
                phone: {
                    required: "come on, you have a number, don't you?",
                    minlength: "your phone no must be of at least 10 digits"
                },
                email: {
                    required: "no email, no message"
                },
                message: {
                    required: "um...yea, you have to write something to send this form.",
                    minlength: "thats all? really?"
                }
            },          
        })
    });
  });

</script>

@endpush