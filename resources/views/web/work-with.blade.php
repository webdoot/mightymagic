@extends('layouts.tmpl-web')

@section('title', 'Brand Identity')

@push('head')
 <style type="text/css">
    label {
        color: #6b7d8e;
    }

    input.form-control {
        font-size: 13px;
        height: 50px;
        font-family: "Open Sans", sans-serif;
        font-style: italic;
    }

    .input-group > .custom-file {
        /*display: -ms-flexbox;
        display: flex;*/
        -ms-flex-align: center;
        align-items: center;
        position: relative;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        /*width: 1%;*/
        height: 50px;
        border: 1px solid #ced4da;
    }

    .custom-file-input {
        position: relative;
        /*z-index: 2;*/
        width: 100%;
        /*height: calc(2.25rem + 2px);*/
        /*margin: 0;*/
        /*opacity: 0;*/
    }

    /*.input-group {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: stretch;
        align-items: stretch;
        width: 100%;
    }

    *, ::after, ::before {
        box-sizing: border-box;
    }*/

    .custom-file-label {
        font-size: 13px;
        font-family: "Open Sans", sans-serif;
        font-style: italic;
        background-color: #ced4da;
        padding: 10px 15px;
        color: #6b7d8e;
    }

    .custom-select{
        width: 100%;
        font-size: 13px;
        height: 50px;
        font-family: "Open Sans", sans-serif;
        font-style: italic;
        color: #6b7d8e;

    }

    
 </style>
@endpush

@section('content')

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h2>Work With Us</h2>
                <p>Join Our Team To Rock World With Your Creative Skills</p>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->
    
    <!--================Challange Area =================-->
    <section class="challange_area p_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <form action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row m-4">
                            <div class="form-group col-md-6">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="row m-4">
                            <div class="form-group col-md-6">
                                <label for="name">Phone</label>
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pfile">Portfolio</label>
                                <div class="input-group">
                                  <div class="custom-file">                                    
                                    <label class="custom-file-label" for="pfile">Choose file</label>
                                    <input type="file" class="custom-file-input" id="pfile" name="pfile">
                                  </div>
                                </div>
                            </div>


                        </div>

                        <div class="row m-4">
                            <div class="form-group col-md-6">
                                <label for="name">Gender</label>
                                <select name="Gender" class="custom-select">
                                    <option selected>Select one</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Category</label>
                                <select name="Category" class="custom-select">
                                    <option value="Director">Director</option>
                                    <option value="Chief Assistant Director">Chief Assistant Director</option>
                                    <option value="Writer">Writer</option>
                                    <option value="Music Director">Music Director</option>
                                    <option value="Dubbing &amp; Recording Studio">Dubbing &amp; Recording Studio</option>
                                    <option value="Singers">Singers</option>
                                    <option value="Production Manager">Production Manager</option>
                                    <option value="Artist">Artist</option>
                                    <option value="Camera Equipments">Camera Equipments</option>
                                    <option value="Camera Men">Camera Men</option>
                                    <option value="Dress Designer">Dress Designer</option>
                                    <option value="Make Up &amp; Hair Artist">Make Up &amp; Hair Artist</option>
                                    <option value="Light Equipments">Light Equipments</option>
                                    <option value="Dance Choreographer">Dance Choreographer</option>
                                    <option value="Still Photographer">Still Photographer</option>
                                    <option value="Editor">Editor</option>
                                    <option value="Location">Location</option>
                                    <option value="Intern">Intern</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>

                        <div class="row m-4">
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>


                



            </div>
        </div>
    </section>
    <!--================End Challange Area =================--> 
    <br><br>

@endsection


@push('footer')
@endpush