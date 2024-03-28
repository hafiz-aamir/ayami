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
                        <h1>AyAMi’s Commitment to ADA</h1>
                        <p>AyAMi Team works actively to maintain a website with content that is accessible to all visitors.
                            This site is updated on a regular basis in order for it to be as accessible as possible. To the
                            extent possible, AyAMi aims to meet the Level AA Success Criteria found in the Web Content
                            Accessibility Guidelines 2.1 (also known as WCAG 2.1).</p>
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
                        <p>If you are in need of assistance to navigate this website or access real estate information and
                            property data, please contact us using any of the options listed below and we will make every
                            reasonable effort to assist you. Please provide as much information as possible so that we can
                            address your specific needs:
                        </p> Phone Number
                        <a href="tel:+">TBD</a>
                        <p>Email Address
                            <a href="mailto:info@ayamigroup.com">info@ayamigroup.com</a>
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
