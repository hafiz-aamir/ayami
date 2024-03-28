@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->

    <!-- SECTION SEC-BANNER START -->
    <section class="Sec-Banner how-work ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="BannerText resources-top" data-aos="fade-up">
                        <h1>Resources
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION SEC-BANNER END -->









    <section class="sec-four blogs-inner  pb-5 mb-5" id="provide_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12  pb-5 mb-5">
                    <div class="trands  pb-5 mb-5">
                        <h2>Calculators</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="sec-four blogs-inner pb-5 mb-5" id="provide_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12  pb-5 mb-5">
                    <div class="trands  pb-5 mb-5">
                        <h2> Forms</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-four blogs-inner pb-5 mb-5" id="provide_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12  pb-5 mb-5">
                    <div class="trands  pb-5 mb-5">
                        <h2> Guidelines</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-four blogs-inner pb-5 mb-5" id="provide_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12  pb-5 mb-5">
                    <div class="trands  pb-5 mb-5">
                        <h2>Market Reports</h2>
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
