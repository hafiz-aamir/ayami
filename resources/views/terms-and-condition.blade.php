@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
    <!-- HEADER END --><!-- SECTION INNER PAGES BANNER START -->
    <section class="Sec-Innerpages">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="InnerpagesCOntent">
                        <h1 style="font-size: 59px !important;">Buyer Terms and Conditions</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION INNER PAGES BANNER END -->


    <section class="same-sec mt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cash-bonus bonus-sec">
                        
                        <h3>1. Cash Bonus Terms and Conditions</h3>
                        <p>
                            AyAMi’s Cash Bonus (“Cash Bonus”, “Commission Rebate”, or “Rebate”) is contingent upon AyAMi’s
                            ability to receive the buyer broker commission from the listing broker, sponsor, or seller. 
                            The Cash Bonus displayed is an estimate based on the asking price and the commission displayed on
                            the SmartMLS Platform. While the data should be accurate, it is uploaded by individual listing
                            agents in the market and neither SmartMLS nor AyAMi can guarantee its accuracy. All information
                            that influences a decision to purchase a listed property should be independently verified by the
                            purchaser. The exact amount of any Commission Rebate will depend on the actual sale price of the
                            property and may change during the closing process due to changes in the terms of sale, and will
                            only be finalized at closing.
                        </p>
                        
                        <p>
                            The Commission Rebate may be restricted, reduced or prohibited by your lender, Connecticut State
                            law, federal law, and other parties or regulations.
                        </p>
                        
                        <h3>2. How is the Cash Bonus calculated?</h3>
                        <p>The Cash Bonus is subject to a $7,000 minimum retained by AyAMi, 2/3rds of the buyer’s broker
                            commission collected, up to 2% of the purchase price, and never to be less than $0. In other
                            words, the Cash Bonus is calculated as the lesser of:</p>
                            <p> 
                            <span class="d-block"><b>1) Two-thirds of the buyer’s broker commission collected and up to 2% of
                                the purchase price, or</b></span>
                            <span class="d-block"><b> 2) The buyer’s broker commission collected less the $7,000 minimum
                                retained by AyAMi.</b>
                            </span>
                            If buyer’s broker commission is more than 3%, the Cash Bonus will be 2% and subject to the
                            $7,000 minimum retained by AyAMi.”
                        </p>
                        
                        <h3>
                            3. “How and when is the Cash Bonus paid?
                        </h3>
                        <p>
                            The Cash Bonus is paid to the buyer by check or bank transfer after the closing. The buyer may
                            elect to have the Cash Bonus applied as a credit on the closing statement instead if permissible
                            by the sale and purchase contract, lender, Connecticut State law and federal law. If you would
                            like your Cash Bonus to be used as a credit on the closing statement, you must let us know
                            before we submit the offer.”
                        </p>
                        
                        <p>
                            Unless instructed otherwise in writing by the purchaser, a Cash Bonus will only be issued to the
                            purchaser of the property. Absent such notice, the recipient must be listed on the deed for the
                            property or on share certificate for a co-op which transfers ownership at closing.
                        </p>

                    </div>
                    
                    <br><br><br><br><br><br>
                    
                    <div class="cash-bonus bonus-sec mb-3">

                        <!--<h3 class="top-font">Seller Terms And Conditions</h3>-->
                        <h1 style="font-size: 59px !important;font-weight: bold; color:#3a8cfb !important;">Seller Terms and Conditions</h1>
                        
                        <p>Seller that engages AyAMi Group to sell a property will be responsible for 2 fees: 
                            <b>(1) listing fee and 
                            (2) buyer’s agent fee. Both fees will be agreed upon prior to signing a listing agreement.</b> 
                        </p>
                        <ul>
                            <li>
                                <h4 style="text-transform: uppercase;">1. Listing Fee</h4>
                                <p>AyAMi Group charges a 1.25% listing fee of the property’s sale price to the seller when
                                    seller has engaged AyAMi Group to sell a property in an exclusive right to sell
                                    agreement.</p>
                            </li>
                            <li>
                                <h4 style="text-transform: uppercase;">2. Buyer’s Agent Fee</h4>
                                <p>This fee typically ranges between 2% and 3%. There is no required amount for the offer of
                                    compensation and ultimately it is the seller’s decision as to how much to offer to the
                                    buyer’s agent. This is to be agreed upon prior to signing a listing agreement. Once the
                                    property is listed and then sold, one of three scenarios will occur as described below:
                                </p>
                                <span><b>1) The buyer will be represented by a real estate agent or broker not affiliated with
                                    AyAMi Group. The seller will be responsible to pay the previously offered buyer’s agent
                                    fee.</b></span>
                                <span><b>2) The buyer will be represented by a real estate agent or broker affiliated with
                                    AyAMi Group. All parties involved would have agreed to Dual Agency but they do not have
                                    to do so. The seller will be responsible to pay the previously offered buyer’s agent
                                    fee.</b></span>

                                <span><b>3) The buyer has no representation and was found by AyAMi Group. AyAMi will charge an
                                    additional 1% fee but the seller will not be responsible for paying any buyer’s agent
                                    fee as there is no separate buyer representation. </b></span>


                            </li>
                        </ul>

                    </div>
                    <div class="cash-bonus bonus-sec mb-3">
                        <h3 style="text-transform: uppercase;">3. Future Changes? </h3>
                        <p>AyAMi reserves the right to edit these terms at any time. All and any transactions currently
                            under contract will be unaffected by any changes made post any contract’s effective date. Edits
                            posted to the AyAMi website will service as notice of the changes to all prospective buyers.”
                        </p>

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
