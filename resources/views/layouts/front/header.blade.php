<?php $segment = Request::segment(1);  //dump($segment)?>
<!--<div class="loadermain">-->
<!--   <img src="{{ asset('images/loader.gif') }}" class="img-fluid" alt="">-->
<!--</div>-->
<!-- HEADER START -->


<header class="Top-Header navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">

                        <ul class="navbar-nav ml-auto mr-auto">
                            <li class="nav-item <?php if($segment == ''){ echo 'active';} ?>">
                                <a class="nav-link" href="{{ route('home') }}">Home</span></a>
                            </li>

                         <li class="nav-item <?php if($segment == 'cash-bonus-calculator'){ echo 'active';} ?>">
                                <a class="nav-link" href="{{ route('cash-bonus-calculator') }}">Cash Bonus Calculator</span></a>
                            </li>

                           <li class="nav-item <?php if($segment == 'how-it-work'){ echo 'active';} ?>">
                                <a class="nav-link" href="{{ route('how-it-work') }}">How It Works</a>
                            </li>
                           <li class="nav-item <?php if($segment == 'seller'){ echo 'active';} ?>">
                                <a class="nav-link" href="{{ route('seller') }}">Sellers</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}"><img src="{{ asset($logo->img_path) }}" class="img-fluid" alt=""></a>
                            </li>

                              <li class="nav-item <?php if($segment == 'properties'){ echo 'active';} ?>">
                                <a class="nav-link" href="{{ route('properties') }}">Browse Listings</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" data-toggle="modal" data-target="#home-modal" href="javascript:;">Newsletter</a>
                            </li>

                            <li class="nav-item dropdown hover-dropdown <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?><?= ($activePage == 'about') ? 'active' : ''; ?>">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown"  aria-expanded="false">About Us</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('about-ayami') }}">About Ayami</a>
                                    <a class="dropdown-item" href="{{ route('founders-and-team-advisor') }}"> Founders & Team Advisor</a>
                                    <a class="dropdown-item" href="{{ route('giving-back') }}">Giving Back</a>

                                     <div class="nav-item dropdown hover-dropdown-2">

                                        <a class="dropdown-item" href="{{ route('our-business-partners') }}">Our Business Partners</a>
                                        <div class="dropdown-menu-2" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('our-business-partners', '#provide_1') }}">Similar real estate agencies</a>
                                        <a class="dropdown-item" href="{{ route('our-business-partners') }}">Service providers </a>
                                        <a class="dropdown-item" href="{{ route('our-business-partners', '#provide_3') }}">Regulators</a>
                                        <a class="dropdown-item" href="{{ route('our-business-partners', '#provide_4') }}">Non-profits</a>
                                        </div>
                                    </div>

                                    <a class="dropdown-item" href="{{ route('contact') }}">Contact Us</a>
                                </div>
                            </li>





                            <li class="nav-item dropdown hover-dropdown <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?><?= ($activePage == '') ? 'active' : ''; ?>">
                                <a class="nav-link dropdown-toggle"  id="navbarDropdown" aria-expanded="false">More</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('blogs') }}">Blog & Local Insights</a>
                                    <!-- <a class="dropdown-item" href="photo-and-gallery.php">Photo And Gallery</a> -->
                                    <a class="dropdown-item" data-toggle="modal" data-target="#home-modal" href="javascript:;">Let’s Connect</a>
                                    <a class="dropdown-item" href="{{ route('faqs') }}">FAQs</a>
                                    <a class="dropdown-item" href="{{ route('resources') }}">Resources</a>

                                    <a class="dropdown-item" href="{{ route('terms-and-condition') }}">Terms and Conditions</a>

                                </div>
                            </li>
                            
                            
                            <!-- <li class="nav-item dropdown hover-dropdown <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?><?= ($activePage == '') ? 'active' : ''; ?>">-->
                            <!--    <a class="nav-link dropdown-toggle"  id="navbarDropdown" aria-expanded="false">MLS Listing</a>-->
                            <!--    <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                            <!--        <a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/search/address">Address</a>-->
                            <!--        <a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/search/advanced">Advanced Search</a>-->
                            <!--        <a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/search/basic">Basic Search</a>-->
                            <!--        <a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/search/emailupdatesignup">Email Update Signup</a>-->
                            <!--        <a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/search/listingid">Listing ID</a>-->
                            <!--        <a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/map/mapsearch">Map Search</a> -->
                            <!--        <a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/contact">Contact</a> -->
                            <!--        <a class="dropdown-item" target="_blank" href="http://ayamigroup.idxbroker.com/idx/homevaluation">Home Valuation</a> -->
                            <!--    </div>-->
                            <!--</li>-->
                            
                            
                        </ul>
                        <div class="d-flex">
                            <a href="mailto:{!! App\Http\Traits\HelperTrait::returnFlag(123) !!}"> <img src="{{ asset('images/images-1.png') }}" alt="" class="img-fluid" style="width: 65px;">
                            </a>
                            <a href="tel:{!! App\Http\Traits\HelperTrait::returnFlag(59) !!}"> <img src="{{ asset('images/images.png') }}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--<div class="pulsating-circle"></div>-->
<!-- HEADER END -->
