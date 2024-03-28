@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
    <!-- SECTION SEC-BANNER START -->
    <section class="Sec-Banner claculater-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="BannerText" data-aos="fade-up">
                        <!-- <h1>Calculate Your Rebate
                   </h1> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION SEC-BANNER END -->

    <section class="same-sec">

        @include('calculate')

    </section>






    <section class="make-housing">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div class="cash-bonus bonus-sec">
                        <h3>"Cash Bonuses help make housing more affordable and give more control to the consumers in the
                            industry"</h3>
                    </div>
                    <div class="find-more">
                        <a class="btn blue-btn" href="how-it-work.php">Learn MOre</a>
                        <a class="btn blue-btn" data-toggle="modal" data-target="#signup" href="#">Contact Us</a>
                    </div>
                    <div class="chat-graph">
                        <img src="images/chat.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <section class="chart-sec arrow-left-bottom">
                        <span class="font-awe top-arrow-main"><i class="fa-solid fa-angle-up"></i></span>
                        <div class="savvy-home">
                            <h2>SAVVY HOME BUYER <span class="block-new">
                                    CASH BONUS*</span></h2>

                            <div class="chart">
                                <div class="cash-1">
                                    <h5>$1,250 <span class="block-new">CASH BONUS</span></h5>
                                    <div class="chart-color"></div>
                                    <h4 class="color-black">$350,000</h4>
                                </div>
                                <div class="cash-2">
                                    <h5>$2,500 <span class="block-new">CASH BONUS</span></h5>
                                    <div class="chart-color"></div>
                                    <h4 class="color-black">$400,000</h4>
                                </div>
                                <div class="cash-3">
                                    <h5>$5,000 <span class="block-new">CASH BONUS</span></h5>
                                    <div class="chart-color"></div>
                                    <h4 class="color-black">$500,000</h4>
                                </div>
                                <div class="cash-4">
                                    <h5>$11,250 <span class="block-new">CASH BONUS</span></h5>
                                    <div class="chart-color"></div>
                                    <h4 class="color-black">$750,000</h4>
                                </div>
                                <div class="cash-5">
                                    <h5>$16,667 <span class="block-new">CASH BONUS</span></h5>
                                    <div class="chart-color"></div>
                                    <h4 class="color-black">$1,000,000</h4>
                                </div>
                            </div>
                            <h3>PURCHASE PRICE</h3>
                            <p>*Assumes 2.5% gross buyer agent commission paid by the seller’s brokerage.
                                Cash Bonuses are subject to purchase price, market conditions, and a minimum
                                $7,500 buyer’s agent commission to be retained by AyAMi
                            </p>
                        </div>
                        <span class="font-awe bottom-arrow-main"><i class="fa-solid fa-angle-up"></i></span>
                    </section>
                </div>
            </div>
        </div>
    </section>


    <section class="table-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cash-table">
                        <table>
                            <tr>
                                <td colspan="4" class="orange-color">WHAT WOULD YOU DO WITH YOUR CASH BONUS?</td>
                            </tr>
                            <tr>
                                <td>
                                    <p>TAKE A VACATION</p>
                                </td>
                                <td>
                                    <p>RENOVATE YOUR NEW HOUSE</p>
                                </td>
                                <td>
                                    <p>KIDS’ COLLEGE FUND</p>
                                </td>
                                <td>
                                    <p>SAVINGS</p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <p>INVEST</p>
                                </td>
                                <td>
                                    <p>MAKE A HIGHER OFFER</p>
                                </td>
                                <td>
                                    <p>NEW FURNITURE</p>
                                </td>
                                <td>
                                    <p>DONATE</p>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="same-sec  mt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cash-bonus bonus-sec">
                        <h6>Have more questions? </h6>
                        <div class="main-collaps">
                            <div class="accordion" id="accordionExample">
                                @foreach ($faqs as $value)
                                    <div class="card">
                                        <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse{{ $value->id }}"
                                            aria-expanded="false" aria-controls="collapse{{ $value->id }}">
                                            <h3>{{ $value->question }}</h3>
                                            <span class="accicon">
                                                <i class="fa-solid fa-minus minus-i"></i>
                                                <i class="fa-solid fa-plus plus-i"></i>
                                            </span>
                                        </div>
                                        <div id="collapse{{ $value->id }}" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                {!! $value->answer !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>

                        </div>

                        <a href="{{ route('faqs') }}">Click here for the full FAQ<span>s</span> </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    <style>
       
    .claculater-inner {
        /*background-image: url({{ asset('custom_img/cash-bonus-calculator-new.png') }}) !important;*/
        background-image: url({{ asset('custom_img/cash-bonus-calculator-new_2.png') }}) !important;
        background-size: contain;
        background-position: right;
        height: 500px;
    }
       
    </style>
@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
