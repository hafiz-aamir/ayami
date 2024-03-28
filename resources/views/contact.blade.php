@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
    <section class="back-tabs about-main-links">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="first-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('about-ayami') }}">About Ayami</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('founders-and-team-advisor') }}"> Founders & Leader Team
                                    Advisor</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('giving-back') }}">Giving Back</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('our-business-partners') }}">Our Business Partners</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('contact') }}">Contact Us</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="form-contact contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-4 p-0">
                            <div class="leftarea">
                                <h6>Get in touch</h6>
                                <div class="logoarea">
                                    <img src="images/logo-01.png" alt="" class="img-fluid">
                                    <div class="logotext">
                                        <p>
                                            Receive back up to 2% of the purchase price with AyAMi Real Estate Agency
                                        </p>
                                    </div>
                                </div>
                                <ul>
                                    <!-- <li>
                                        <p><span><i class="fa-regular fa-envelope"></i></span><a href="mailto:info@ayamigroup.com">info@ayamigroup.com</a></p>
                                    </li> -->
                                    <li>
                                        <p><span><i class="fa-solid fa-phone"></i></span><a href="tel:(203) 533-9781 ">(203) 533-9781 </a></p>
                                    </li>

                                    <li>
                                        <p><span><i class="fa-solid fa-location-dot"></i></span><a href="">800 Village Walk #787 <br>Guilford, CT 06437-2762</a></p>
                                    </li>
                                </ul>
                                <a href="#" class="btn btnmodal">Schedule a call</a>
                                <div class="socialicons">
                                    <a href="#"><img src="images/20.png" class="img-fluid" alt=""></a>
                                    <a href="#"><img src="images/5.jpg" class="img-fluid" alt=""></a>
                                    <a href="#"><img src="images/19.png" class="img-fluid" alt=""></a>
                                    <a href="#"><img src="images/youtube.png" class="img-fluid" alt=""></a>
                                    <a href="#"><img src="images/images18.png" class="img-fluid" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 p-0">
                            <div class="rightarea">
                                <form id="contactform">
                                    @csrf
                                    <input type="hidden" name="form_name" value="CONTACT FORM SUBMISSION">
                                    <div class="form-group">
                                        <!--<label for="exampleInputEmail1">Full Name</label>-->
                                        <svg _ngcontent-serverapp-c2100195746="" class="vector-graphics" width="20" height="20">
                                            <use _ngcontent-serverapp-c2100195746="" href="assets/yrv-sprite-11-0-7-master-c501586.svg#yrv-person_name" xlink:href="assets/yrv-sprite-11-0-7-master-c501586.svg#yrv-person_name" width="20" height="20"></use>
                                        </svg>
                                        <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name" required>

                                    </div>
                                    <div class="form-group">
                                        <!--<label for="exampleInputPassword1">Enter your Email</label>-->
                                        <svg _ngcontent-serverapp-c2100195746="" class="vector-graphics" width="20" height="20">
                                            <use _ngcontent-serverapp-c2100195746="" href="assets/yrv-sprite-11-0-7-master-c501586.svg#yrv-icon-message" xlink:href="assets/yrv-sprite-11-0-7-master-c501586.svg#yrv-icon-message" width="20" height="20"></use>
                                        </svg>
                                        <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your Email" required>
                                    </div>
                                    <div class="form-group">
                                        <!--<label for="exampleInputEmail1">Phone Number</label>-->
                                        <svg _ngcontent-serverapp-c2100195746="" class="vector-graphics" width="20" height="20">
                                            <use _ngcontent-serverapp-c2100195746="" href="assets/yrv-sprite-11-0-7-master-c501586.svg#yrv-call" xlink:href="assets/yrv-sprite-11-0-7-master-c501586.svg#yrv-call" width="20" height="20"></use>
                                        </svg>
                                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number" required>

                                    </div>
                                    <div class="form-group">
                                        <textarea name="notes" class="form-control" placeholder="Hi AyAMi Group, I'm currently searching for a new property in Connecticut and am interested in your offer and real estate services.  Please contact me urgently." id="" cols="30" rows="6"></textarea>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label" for="exampleCheck1">Sign-up for AyAMi
                                            account and receive a guaranteed minimum $500 Cash Bonus upon
                                            closing!”</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">sign up</button>
                                </form>
                                <div id="contactformsresult" class="mt-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('css')
    <style>
        /* .Sec-Banner {
                background-image: url(../images/bannermain.png);

            } */
    </style>
@endsection

@section('js')
    <script type="text/javascript"></script>
    <script>
        $(".info_ayami").hover(function() {
          $(".ayami-show").toggleClass("result_hover")
        });
      </script>
@endsection
