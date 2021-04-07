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

    /**  Select field  */
    .custom-select{
        width: 100%;
        font-size: 13px;
        height: 50px;
        font-family: "Open Sans", sans-serif;
        font-style: italic;
        color: #6b7d8e;

    }

    /**  File upload   */
    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        border: 1px solid #ced4da;
        width: 100%;
        font-size: 13px;
        height: 50px;
        font-family: "Open Sans", sans-serif;
        font-style: italic;
        color: #868e96;
        padding-top: 8px;
        padding-bottom: 8px;
        border-radius: .25rem;
    }

    .custom-file-input {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 9;
    }

    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: 100%;
        padding: 10px 20px;
        color: #495057;
        content: "Browse";
        background-color: #e9ecef;
        border-left: 1px solid #ced4da;
        border-radius: 0 .25rem .25rem 0;
        font-weight: 600;
    }

    .custom-file-label {
        padding-left: 15px;
    }

    .error {
        color: #E51A4B;
        font-size: 14px;
        font-weight: 400;
        font-style: italic;
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
                    <form action="{{route('workWithUs.submit')}}" method="post" id="contactForm" novalidate="novalidate">
                    @csrf
                        <div class="row m-4">
                            <div class="form-group col-md-6">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Full Name">

                                @error('name')
                                <label class="error">{{ $message }}</label>
                                @enderror
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">

                                @error('email')
                                <label class="error">{{ $message }}</label>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="row m-4">
                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input type="number" class="form-control" name="phone" placeholder="Phone no">

                                @error('phone')
                                <label class="error">{{ $message }}</label>
                                @enderror
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label>Portfolio</label>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="pfile">
                                  <label class="custom-file-label" for="customFile">Select a file</label>
                                </div>

                                @error('pfile')
                                <label class="error">{{ $message }}</label>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="row m-4">
                            <div class="form-group col-md-6">
                                <label>Gender</label>
                                <select name="gender" class="custom-select">
                                    <option selected>Select one</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>

                                @error('gender')
                                <label class="error">{{ $message }}</label>
                                @enderror
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label>Category</label>
                                <select name="category" class="custom-select">
                                    <option selected>Select one</option>
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

                                @error('category')
                                <label class="error">{{ $message }}</label>
                                @enderror
                                
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
<script src="{{ asset('js/bs-custom-file-input.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init()
    })
</script>
@endpush