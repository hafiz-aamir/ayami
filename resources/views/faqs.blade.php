@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
    <!-- SECTION SEC-BANNER START -->
    <section class="Sec-Banner how-work faq_q_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="BannerText" data-aos="fade-up">
                        <h1>FAQs
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION SEC-BANNER END -->





    <section class="same-sec faq_inner ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="cash-bonus bonus-sec">
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
