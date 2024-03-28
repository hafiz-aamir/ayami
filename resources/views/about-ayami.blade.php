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



    <!-- HEADER END --><!-- SECTION INNER PAGES BANNER START -->
    <section class="Sec-Innerpages ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="InnerpagesCOntent">

                        <h1>About AyAMI</h1>

                        <p>AyAMi was founded on the principle of lowering home ownership costs for the entire population
                            with the principle of being honest and always looking out for the best good, interests, and
                            outcomes of its clients. We are starting with the up to 2% cash bonus offer for our home buyers
                            around Shoreline Connecticut and will expand our services in near future to additional
                            geographic areas and further to home sellers, existing home owners, landlords, tenants, and
                            others.”</p>

                        <!--                 <ul class="nav nav-tabs" role="tablist">-->
                        <!--                        <li class="nav-item">-->
                        <!--                                 <a class="dropdown-item" href="about.php"><i class="fa-solid fa-arrow-left"></i> Back to Tab </a>-->
                        <!--                        </li>-->
                        <!--</ul> -->
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- SECTION INNER PAGES BANNER END -->



    <section class="Sec-Looking about-ayami">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="LookingBox-MAin" data-aos="fade-up" data-aos-duration="2000">
                        <div class="LookingBoxContent">
                            <h3>AyAMi’s Mission Statement</h3>
                            <p>
                                AyAMi's mission is to be a positive influence and a leader in our industry, by setting high
                                standards in customer service, client satisfaction, vendor relationships, and community
                                engagement. We strive to pioneer innovative approaches that benefit all parties involved,
                                and to make a meaningful impact on the world around us.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="LookingBox-MAin" data-aos="fade-down" data-aos-duration="2000">
                        <div class="LookingBoxContent">
                            <h3>AyAMi’s Vision</h3>
                            <p>
                                AyAMi’s vision is not to be a business that is here to make a profit but to be a leader in
                                the industry and an active participant in the communities it serves. Giving back to the
                                people is at the forefront of
                                AyAMi’s identity and the core of real estate services that it offers.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="LookingBox-MAin" data-aos="fade-up" data-aos-duration="2000">
                        <div class="LookingBoxContent">
                            <h3>“AyAMi’s Immediate Goal</h3>
                            <p>
                                To assist and guide home buyers in their search and selection process, and most importantly
                                reduce their costs by offering a rebate ideally ranging from 1.5% to 2% based on the home
                                purchase price and commission offered by the sellers.
                                To treat real estate buyers and sellers as clients, which is in contrast with the standard
                                brokerage model where the agents are perceived as client of the brokerage, not the actual
                                buyers and sellers.
                                AyAMi’s goal is to reduce housing costs in local communities while providing first class
                                premier services.”

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="factor-sec about-factor">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="factors">
                        <h2>3 FACTORS THAT <span>
                                MAKE AYAMI UNIQUE:</span></h2>
                        <div class="list-factor">
                            <ol>
                                <li><span>Cash Bonus – </span>AyAMi offers up to 2% Cash Bonuses to their home
                                    buyer clients</li>
                                <li><span>First Class Real Estate Services – </span>AyAMi operates on a new and
                                    improved business model allowing its agents to focus entirely on
                                    existing clients instead of spending their time trying to generate new
                                    leads</li>
                                <li><span>Giving Back – </span>AyAMi not only offers Cash Bonuses to its clients
                                    but also matches donations made with Cash Bonus funds to nonprofit organizations
                                    supported by
                                    AyAMi
                                    and donates to non-profit
                                    organizations on its own</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    <style>
        
        .Sec-Innerpages {
            background-image: url({{ asset('custom_img/About-01.png') }}) !important;
            background-repeat: no-repeat;
            background-position: right;
            height: 450px;
            background-size: contain;
            display: flex;
            align-items: end;
            justify-content: center;
        }
        
    </style>
@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
