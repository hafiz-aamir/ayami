<!-- FOOTER START -->
<footer class="MainFooter">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="Footerlogo leftarea">
                    <h1>
                        <a href="#">
                            <!--<img src="{{ asset($logo->img_path) }}" class="img-fluid" alt="">-->
                        </a>
                    </h1>
                    <ul>
                        <li>
                            <p>
                                <span>
                                    <i class="fa-regular fa-envelope"></i>
                                </span>
                                <a href="mailto:{!! App\Http\Traits\HelperTrait::returnFlag(123) !!}">{!! App\Http\Traits\HelperTrait::returnFlag(123) !!}</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span>
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <a href="tel:{!! App\Http\Traits\HelperTrait::returnFlag(59) !!}">{!! App\Http\Traits\HelperTrait::returnFlag(59) !!} (text & talk)</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span>
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <a href="">{!! App\Http\Traits\HelperTrait::returnFlag(519) !!} </a>
                            </p>
                        </li>
                    </ul>
                    <a href="#" class="btn btnmodal" style="margin-top: 4px;">Schedule a call</a>
                    <div class="socialicons">
                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1964) !!}">
                            <img src="{{ asset('images/youtube.png') }}" class="img-fluid" alt="">
                        </a>
                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1961) !!}">
                            <img src="{{ asset('images/20.png') }}" class="img-fluid" alt="">
                        </a>
                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1960) !!}">
                            <img src="{{ asset('images/images18.png') }}" class="img-fluid" alt="">
                        </a>
                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(682) !!}">
                            <img src="{{ asset('images/5.jpg') }}" class="img-fluid" alt="">
                        </a>
                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1962) !!}">
                            <img src="{{ asset('images/19.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="Quicklinkheading">
                    <h5>QUICK LINKS</h5>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('properties') }}">Browse Listings</a>
                        </li>
                        <li>
                            <a href="{{ route('faqs') }}">FAQ</a>
                        </li>
                        <li>
                            <a href="{{ route('how-it-work') }}">How It Works</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="Quicklinkheading">
                    <h5>CUSTOMER AREA</h5>
                    <ul>
                        <li>
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('resources') }}">Resources</a>
                        </li>
                        <li>
                            <a href="#">Photo Gallery</a>
                        </li>
                        <li>
                            <a href="#">Newsletter</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Quicklinkheading">
                    <h5>Contact</h5>
                    <ul>
                        <li>
                            <a href="#">My Account</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact us</a>
                        </li>
                        <li>
                            <a href="{{ route('cash-bonus-calculator') }}">Cash Bonus Calculator</a>
                        </li>
                    </ul>
                </div>
                <div class="FooterButtons">
                    <a href="tel:{!! App\Http\Traits\HelperTrait::returnFlag(59) !!}" class="btn btnNumber">
                        <img src="{{ asset('images/headphones.png') }}" class="img-fluid"
                            alt="">{!! App\Http\Traits\HelperTrait::returnFlag(59) !!} </a>
                    <a href="tel:{!! App\Http\Traits\HelperTrait::returnFlag(59) !!}" class="btn btnLivechat">Live chat</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ayami-para-b">
                    <h5>Ask Us About Donating Portion or All of Your Cash Bonus to a Non-Profit</h5>
                    <p>{!! App\Http\Traits\HelperTrait::returnFlag(218) !!}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="CopyrightMain">
                        <div class="copyrightfirsttext">
                            <img src="{{ asset('images/equal-housing-opportunity-logo.png') }}" class="img-fluid"
                                alt="">
                            <p> {!! App\Http\Traits\HelperTrait::returnFlag(499) !!} </p>
                        </div>
                        <div class="icon-div">
                            <a href="{{ route('terms-and-condition') }}" class="btn btnLivechat">“Terms and
                                Conditions”</a>
                            <a href="{{ route('privacy-policy') }}" class="btn btnLivechat">“Privacy Policy”</a>
                            <a href="{{ route('accessibility') }}" class="btn btnLivechat">“Accessibility”</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-lg-12 p-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6 p-0">
                                <div class="leftarea">
                                    <h6>Get in touch</h6>
                                    <div class="logoarea">
                                        <!--<img src="{{ asset($logo->img_path) }}" alt="" class="img-fluid">-->
                                        <div class="logotext">
                                            <p> Receive back up to 2% of the purchase price with AyAMi Real Estate
                                                Agency </p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <p><span><i class="fa-regular fa-envelope"></i></span><a
                                                    href="mailto:{!! App\Http\Traits\HelperTrait::returnFlag(123) !!}">{!! App\Http\Traits\HelperTrait::returnFlag(123) !!}</a>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span>
                                                    <i class="fa-solid fa-phone"></i>
                                                </span>
                                                <a href="tel:{!! App\Http\Traits\HelperTrait::returnFlag(59) !!}">{!! App\Http\Traits\HelperTrait::returnFlag(59) !!} (text &
                                                    talk)</a>
                                            </p>
                                        </li>

                                        <li>
                                            <p>
                                                <span>
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </span>
                                                <a href="">{!! App\Http\Traits\HelperTrait::returnFlag(519) !!} </a>
                                            </p>
                                        </li>
                                    </ul>
                                    
                                    
                                    <a href="#" class="btn btnmodal" style="margin-top: 4px;">Schedule a call</a>
                                    <div class="socialicons">
                                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1964) !!}">
                                            <img src="{{ asset('images/youtube.png') }}" class="img-fluid"
                                                alt="">
                                        </a>
                                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1961) !!}">
                                            <img src="{{ asset('images/20.png') }}" class="img-fluid"
                                                alt="">
                                        </a>
                                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1960) !!}">
                                            <img src="{{ asset('images/images18.png') }}" class="img-fluid" alt="">
                                        </a>
                                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(682) !!}">
                                            <img src="{{ asset('images/5.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1962) !!}">
                                            <img src="{{ asset('images/19.png') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="rightarea">
                                    <form id="">
                                        @csrf
                                        <input type="hidden" name="form_name" value="POPUP FORM SUBMISSION">
                                        <!--<div class="form-group">-->
                                            <!--<label for="exampleInputEmail1">Full Name</label>-->
                                        <!--    <input type="text" class="form-control" name="fname"-->
                                        <!--        id="exampleInputEmail1" aria-describedby="emailHelp"-->
                                        <!--        placeholder="Full Name" required>-->
                                        <!--</div>-->
                                        <!--<div class="form-group">-->
                                            <!--<label for="exampleInputPassword1">Enter your Email</label>-->
                                        <!--    <input type="email" name="email" class="form-control"-->
                                        <!--        id="exampleInputPassword1" placeholder="Enter your Email" required>-->
                                        <!--</div>-->
                                        <!--<div class="form-group">-->
                                            <!--<label for="exampleInputEmail1">Phone Number</label>-->
                                        <!--    <input type="text" name="phone" class="form-control"-->
                                        <!--        id="exampleInputEmail1" aria-describedby="emailHelp"-->
                                        <!--        placeholder="Phone Number" required>-->
                                        <!--</div>-->
                                        <div class="form-group">
                                            <!-- <label> Write your message here</label> -->
                                            <textarea name="notes" class="form-control"
                                                placeholder="Hi AyAMi Group, I'm currently searching for a new property in Connecticut and am interested in your offer and real estate services.  Please contact me urgently."
                                                id="" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                required>
                                            <label class="form-check-label" for="exampleCheck1">Sign-up for AyAMi
                                                account and receive a guaranteed minimum $500 Cash Bonus upon
                                                closing!”</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">sign up</button>
                                    </form>
                                    <div id="" class="mt-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?php $get_route = Request::segment(1); ?>

<?php if($get_route != "sell-with-ayami"){ ?>

<div class="modal fade" id="home-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-lg-12 p-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6 p-0">
                                <div class="leftarea">
                                    <h6>Get in touch</h6>
                                    <div class="logoarea">
                                        <!--<img src="{{ asset($logo->img_path) }}" alt="" class="img-fluid">-->
                                        <div class="logotext">
                                            <p> Receive back up to 2% of the purchase price with AyAMi Real Estate
                                                Agency </p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <p><span><i class="fa-regular fa-envelope"></i></span><a
                                                    href="mailto:{!! App\Http\Traits\HelperTrait::returnFlag(123) !!}">{!! App\Http\Traits\HelperTrait::returnFlag(123) !!}</a>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span>
                                                    <i class="fa-solid fa-phone"></i>
                                                </span>
                                                <a href="tel:{!! App\Http\Traits\HelperTrait::returnFlag(59) !!}">{!! App\Http\Traits\HelperTrait::returnFlag(59) !!} (text &
                                                    talk)</a>
                                            </p>
                                        </li>

                                        <li>
                                            <p>
                                                <span>
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </span>
                                                <a href="">{!! App\Http\Traits\HelperTrait::returnFlag(519) !!} </a>
                                            </p>
                                        </li>
                                    </ul>
                                    <a href="tel:{!! App\Http\Traits\HelperTrait::returnFlag(59) !!}" class="btn btnmodal" style="margin-top: 4px;">Schedule a call</a>
                                    <div class="socialicons">
                                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1964) !!}">
                                            <img src="{{ asset('images/youtube.png') }}" class="img-fluid"
                                                alt="">
                                        </a>
                                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1961) !!}">
                                            <img src="{{ asset('images/20.png') }}" class="img-fluid"
                                                alt="">
                                        </a>
                                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1960) !!}">
                                            <img src="{{ asset('images/images18.png') }}" class="img-fluid"
                                                alt="">
                                        </a>
                                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(682) !!}">
                                            <img src="{{ asset('images/5.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <a href="{!! App\Http\Traits\HelperTrait::returnFlag(1962) !!}">
                                            <img src="{{ asset('images/19.png') }}" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="rightarea">
                                    
                                    <form id="contactform" method="post">
                                        @csrf
                                        <input type="hidden" name="form_name" value="POPUP FORM SUBMISSION">
                                        <div class="form-group">
                                            <!--<label for="exampleInputEmail1">Full Name</label>-->
                                            <input type="text" class="form-control" name="fname"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group">
                                            <!--<label for="exampleInputPassword1">Enter your Email</label>-->
                                            <input type="email" name="email" class="form-control"
                                                id="exampleInputPassword1" placeholder="Enter your Email" required>
                                        </div>
                                        <div class="form-group">
                                            <!--<label for="exampleInputEmail1">Phone Number</label>-->
                                            <input type="text" name="phone" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Phone Number" required>
                                        </div>
                                        <div class="form-group">
                                            <!-- <label> Write your message here</label> -->
                                            <textarea name="notes" class="form-control"
                                                placeholder="Hi AyAMi Group, I'm currently searching for a new property in Connecticut and am interested in your offer and real estate services.  Please contact me urgently."
                                                id="" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                                            <label class="form-check-label" for="exampleCheck1">Sign-up for AyAMi
                                                account and receive a guaranteed minimum $500 Cash Bonus upon
                                                closing!”</label>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">sign up</button>
                                        <!--<a href="http://ayamigroup.idxbroker.com/idx/search/emailupdatesignup" class="btn btn-primary" style="color:#fff;">sign up</a>-->
                                        
                                    </form>
                                    <div id="contactformsresult" class="mt-3" style="font-size: 11px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- BrowseListing Modal  -->
<div class="modal fade" id="BrowseListing" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12">
                            <div class="leftarea">
                                <h6>Want to Save Your Search? Create Your Own AyAMi Account Here. AyAMi guarantees a
                                    minimum $500 Cash Bonus upon closing to clients with an online AyAMi account</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="leftarea">
                                <div class="logoarea">
                                    <figure>
                                        <!--<img src="{{ asset($logo->img_path) }}" alt="" class="img-fluid">-->
                                    </figure>
                                    <div class="logotext">
                                        <p> Hi AyAMi Group, I'm currently searching for a new property in Connecticut
                                            and am interested in your offer and real estate services. Please contact me
                                            urgently. </p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <p><span><i class="fa-regular fa-envelope"></i></span><a
                                                href="mailto:info@ayamigroup.com">info@ayamigroup.com</a></p>
                                    </li>
                                    <li>
                                        <p>
                                            <span>
                                                <i class="fa-solid fa-phone"></i>
                                            </span>
                                            <a href="tel:(203) 533-9781">(203) 533-9781 (text & talk)</a>
                                        </p>
                                    </li>

                                    <li>
                                        <p>
                                            <span>
                                                <i class="fa-solid fa-location-dot"></i>
                                            </span>
                                            <a href="">800 Village Walk #787 <br>Guilford, CT 06437-2762 </a>
                                        </p>
                                    </li>
                                </ul>
                                <a href="#" class="btn btnmodal" style="margin-top: 4px;">Schedule a call</a>
                                <div class="socialicons">
                                    <a href="#">
                                        <img src="{{ asset('images/youtube.png') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/20.png') }}" class="img-fluid" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/images18.png') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/5.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/19.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rightarea">
                                <form id="">
                                    @csrf
                                    <input type="hidden" name="form_name" value="POPUP FORM SUBMISSION">
                                    
                                    <!--<div class="form-group">-->
                                        <!--<label for="exampleInputEmail1">Full Name</label>-->
                                    <!--    <input type="text" class="form-control" name="fname"-->
                                    <!--        id="exampleInputEmail1" aria-describedby="emailHelp"-->
                                    <!--        placeholder="Full Name" required>-->
                                    <!--</div>-->
                                    <!--<div class="form-group">-->
                                        <!--<label for="exampleInputPassword1">Enter your Email</label>-->
                                    <!--    <input type="email" name="email" class="form-control"-->
                                    <!--        id="exampleInputPassword1" placeholder="Enter your Email" required>-->
                                    <!--</div>-->
                                    <!--<div class="form-group">-->
                                        <!--<label for="exampleInputEmail1">Phone Number</label>-->
                                    <!--    <input type="text" name="phone" class="form-control"-->
                                    <!--        id="exampleInputEmail1" aria-describedby="emailHelp"-->
                                    <!--        placeholder="Phone Number" required>-->
                                    <!--</div>-->
                                    
                                    {{-- <div class="form-group">
                                        <!-- <label> Write your message here</label> -->
                                        <textarea name="notes" class="form-control" placeholder="Hi AyAMi Group, I'm currently searching for a new property in Connecticut and am interested in your offer and real estate services.  Please contact me urgently." id="" cols="30" rows="5"></textarea>
                                    </div> --}}
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label" for="exampleCheck1">Sign-up for AyAMi account and receive a guaranteed minimum $500 Cash Bonus upon closing!”</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">sign up</button>
                                </form>
                                <div id="" class="mt-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BrowseListing Modal  -->
<!-- conditions Modal  -->
<div class="modal fade" id="conditions" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body termscondition">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="leftarea">
                                <h6>Cash Bonus Terms and Conditions</h6>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="leftarea termscondition">
                                    <div class="logoarea">
                                        <div class="logotext">
                                            <p> AyAMi’s Cash Bonus (“Cash Bonus”, “Commission Rebate”, or “Rebate”) is
                                                contingent upon AyAMi’s ability to receive the buyer broker commission
                                                from the listing broker, sponsor, or seller. The Cash Bonus displayed is
                                                an estimate based on the asking price and the commission displayed on
                                                the SmartMLS Platform. </p>
                                            <p>While the data should be accurate, it is uploaded by individual listing
                                                agents in the market and neither SmartMLS nor AyAMi can guarantee its
                                                accuracy. All information that influences a decision to purchase a
                                                listed property should be independently verified by the purchaser. The
                                                exact amount of any Commission Rebate will depend on the actual sale
                                                price of the property and may change during the closing process due to
                                                changes in the terms of sale, and will only be finalized at closing.</p>
                                            <p>The Commission Rebate may be restricted, reduced or prohibited by your
                                                lender, Connecticut State Law, Federal Law, and other parties, or
                                                regulations.</p>
                                        </div>
                                    </div>
                                    <ul class="termsconditionUl">
                                        <h6> How is the Cash Bonus calculated? </h6>
                                        <p>The Cash Bonus is subject to a $7,500 minimum retained by AyAMi, 2/3rds of
                                            the buyer’s broker commission collected, up to 2% of the purchase price, and
                                            never to be less than $0. In other words, the Cash Bonus is calculated as
                                            the lesser of:</p>
                                        <li>
                                            <p>Two-thirds of the buyer’s broker commission collected and up to 2% of the
                                                purchase price, or</p>
                                        </li>
                                        <li>
                                            <p>The buyer’s broker commission collected less the $7,500 minimum retained
                                                by AyAMi.</p>
                                        </li>
                                        <p>If buyer’s broker commission is more than 3%, the Cash Bonus will be 2%
                                            provided the $7,500 minimum to be retained by AyAMi is met.</p>
                                    </ul>
                                    <ul class="termsconditionUl">
                                        <h6> How and when is the Cash Bonus paid? </h6>
                                        <p>The Cash Bonus is paid to the buyer by check or bank transfer after the
                                            closing. The buyer may elect to have the Cash Bonus applied as a credit on
                                            the closing statement instead if permissible by the sale and purchase
                                            contract, lender, Connecticut State Law and Federal law. If you would like
                                            your Cash Bonus to be used as a credit on the closing statement, you must
                                            let us know before we submit the offer. </p>
                                        <p>Unless instructed otherwise in writing by the purchaser, a Cash Bonus will
                                            only be issued to the purchaser of the property. Absent such notice, the
                                            recipient must be listed on the deed for the property or on share
                                            certificate for a co-op, which transfers ownership at closing.</p>
                                        <p>AyAMi reserves the right to edit these terms at any time. All and any
                                            transactions currently under contract will be unaffected by any changes made
                                            post any contract’s effective date. Edits posted to the AyAMi website will
                                            service as notice of the changes to all prospective buyers, clients,
                                            customers, and users.” </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BrowseListing Modal  -->
<!-- FOOTER END -->

<?php } ?>

