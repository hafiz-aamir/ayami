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
                        <h1 style="font-size: 25px !important;">{{ $blog_detail->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION SEC-BANNER END -->

    <section class="make-housing">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12">
                    <figure>
                        <img src="{{ asset($blog_detail->image) }}" class="img-fluid" alt="" style="height: 600px; width: 1000px;">
                    </figure>
                    <h3 class="pt-3 pb-3">{{ $blog_detail->name }}</h3>
                    {!! $blog_detail->detail !!}
                </div>

            </div>
        </div>
    </section>

@endsection
@section('css')
    <style>
        /*.Sec-Banner {*/
        /*    background-image: url(../images/bannermain.png);*/

        /*}*/

        p{
            color: #000;
        }

        .make-housing{
            padding: 50px 0px;
        }
    </style>
@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
