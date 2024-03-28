@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
<!-- SECTION SEC-BANNER START -->
<section class="Sec-Banner how-work property-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="BannerText mt-top hover-dropdown" data-aos="fade-up">
                    <h1>Property Search
                    </h1>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/search/address">Address</a>
                                    <a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/search/advanced">Advanced Search</a>
                                    <a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/search/basic">Basic Search</a>
                                    <!--<a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/search/emailupdatesignup">Email Update Signup</a>-->
                                    <!--<a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/search/listingid">Listing ID</a>-->
                                    <!--<a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/map/mapsearch">Map Search</a> -->
                                    <!--<a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/contact">Contact</a> -->
                                    <!--<a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/homevaluation">Home Valuation</a> -->
                                </div>
                         
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION SEC-BANNER END -->


<!-- SECTION PROPERTIES START -->
<section class="PageProperty PropertiesSec">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-6">
                
                <a target="_blank" href="http://ayamigroup.idxbroker.com/idx/map/mapsearch" class="btn blue-btn"> Map Search </a>
                
                <div class="properties-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2883.615272988687!2d-79.33967908450016!3d43.71854377911909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cd07a8400001%3A0x49225967df046ea!2s789%20Don%20Mills%20Rd.%20Suite%20801%2C%20North%20York%2C%20ON%20M3C%201T5%2C%20Canada!5e0!3m2!1sen!2s!4v1623138495472!5m2!1sen!2s" width="" height="" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    
                    @foreach($get_mls_listing as $key => $val_mls_list)
                    <div class="col-md-6">
                        <div class="property-box">
                            <figure>
                                <a target="_blank" href="{{ $val_mls_list->link }}">
                                    <img src="{{ asset($val_mls_list->image) }}" alt="" class="w-100" style="height: 280px;">
                                </a>
                            </figure>
                            <h4> {{ $val_mls_list->name }} </h4>
                            <h6> {{ $val_mls_list->location }} </h6>
                            
                            <span style="color:#000 !important;">{!! $val_mls_list->description !!}</span> 
                            
                        </div>
                    </div>
                    @endforeach
                    
                   
                </div>
            </div>
        </div>
    </div>
</section>





<section class="same-sec mt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cash-bonus bonus-sec">
                    <figure>
                        <img src="images/3.gif" class="img-fluid" alt="">
                    </figure>
                    <p>IDX information is provided by SmartMLS from a copyrighted compilation of listings. The
                        compilation of listings and each individual listing are © 2022 the SmartMLS All Rights Reserved.
                    </p>
                    <p>The data relating to real estate for sale on this website appears in part through the SMARTMLS
                        Internet Data Exchange program, a voluntary cooperative exchange of property listing data
                        between licensed real estate brokerage firms, and is provided by SMARTMLS through a licensing
                        agreement. Listing information is from various brokers who participate in the SMARTMLS IDX
                        program and not all listings may be visible on the site. The property information being provided
                        on or through the website is for the personal, non-commercial use of consumers and such
                        information may not be used for any purpose other than to identify prospective properties
                        consumers may be interested in purchasing. Some properties which appear for sale on the website
                        may no longer be available because they are for instance, under contract, sold or are no longer
                        being offered for sale. Property information displayed is deemed reliable but is not guaranteed.
                        Copyright 2022 SmartMLS, Inc.</p>
                    <p>SmartMLS (CTMLS-GFC) data last updated at [automated].</p>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
@section('css')
    <style>
        
        .how-work {
            background-image: url({{ asset('custom_img/Browse-Listning-01.png') }}) !important;
            background-size: contain;
            background-position: right;
            height: 550px !important;
            display: flex;
            align-items: end;
            padding-bottom: 2rem;
              position: relative;
            z-index: 5;
        }
        
        
        .property-sec .BannerText {
                width: 70%;
        }
        
        span p {
            color: #949393 !important;
        }
        
    </style>
@endsection

@section('js')
    <script type="text/javascript"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://codepen.io/fancyapps/pen/PEqJvL.js"></script>
<script src="https://cdn.jsdelivr.net/npm/round-slider@1.6.1/dist/roundslider.min.js"></script>
<script>
    AOS.init({
        duration: 1000,
    });
</script>

<script>
    function selectOnlyThis(id) {
        for (var i = 1; i <= 4; i++) {
            if (
                "Check" + i === id &&
                document.getElementById("Check" + i).checked === true
            ) {
                document.getElementById("Check" + i).checked = true;
            } else {
                document.getElementById("Check" + i).checked = false;
            }
        }
    }
</script>


<script>
    $(document).ready(function() {
        $(".tabs-cl").click(function() {
            $(".h-div").addClass("active");
            $(".s-div").addClass("active");
        });
    });
</script>

<script>$(".hover-dropdown").hover(function () {
  var isHovered = $(this).is(":hover");
  if (isHovered) {
    $(this).children(".dropdown-menu").stop().slideDown(300);
  } else {
    $(this).children(".dropdown-menu").stop().slideUp(300);
  }
});
$(".hover-dropdown-2").hover(function () {
  var isHovered = $(this).is(":hover");
  if (isHovered) {
    $(this).children(".dropdown-menu-2").stop().slideDown(300);
  } else {
    $(this).children(".dropdown-menu-2").stop().slideUp(300);
  }
});

</script>



@endsection
