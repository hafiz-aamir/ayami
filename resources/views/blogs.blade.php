@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
    <!-- SECTION SEC-BANNER START -->
    
    <br><br><br><br>
    <br><br><br>
    
    <section class="Sec-Banner blogs">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="BannerText" data-aos="fade-up">
                        <h1>Real Estate Insights
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION SEC-BANNER END -->



    <section class="sec-four blogs-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="trands">
                        <h2 class="ml3">Most Popular</h2>
                        <a href="#" class="btn blue-btn">See More</a>
                    </div>
                </div>


                @foreach ($blogs as $value)
                <div class="col-lg-4">
                    <div class="first-img">
                        <figure>
                            <img src="{{ asset($value->image) }}" class="img-fluid" alt="">
                        </figure>
                        <div class="teaching two">
                            <!-- <p class="small-p">July 08, 2021<span> Lorem lipsum</span></p> -->
                            <p>{{ $value->name }}</p>
                            <p class="samll-b">{!! $value->short_detail !!}</p>
                            <a href="{{ route('blog-detail', ['id' => $value->id, 'name' => preg_replace('/[^A-Za-z0-9\-]/', '', strtolower(str_replace(' ', '-', $value->name)))]) }}" class="keyword-txt">Lorem, ipsum, dolor,</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </section>


    <section class="sec-four blogs-inner" id="link_id">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="trands">
                        <h2 class="ml3">Local Insights</h2>
                    </div>
                </div>
                
                
                
                @foreach($localinsights as $val_insight)
                <div class="col-lg-4">
                    <div class="first-img city-name-div">
                        <a href="#">
                            <figure>
                                <img src="{{ asset($val_insight->image) }}" class="img-fluid" alt="">
                            </figure>
                            <div class="teaching two">
                                <h6> {{ $val_insight->title }} </h6>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                
                
                
            </div>
        </div>
    </section>


    <section class="sec-four blogs-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="trands">
                        <h2 class="ml3">Categories</h2>
                    </div>
                </div>
                
                
                @foreach($categoryys as $val_category)
                <div class="col-lg-4">
                    <div class="first-img city-name-div">
                        <a href="#">
                            <figure>
                                <img src="{{ asset($val_category->image) }}" class="img-fluid" alt="">
                            </figure>
                            <div class="teaching two">
                                <h6> {{ $val_category->title }} </h6>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                
                
                
            </div>
        </div>
    </section>
@endsection
@section('css')
    <style>
        /* .Sec-Banner {
                    background-image: url(../images/bannermain.png);

                } */
                
        .keyword-txt {
            border-radius: 6px !important;
            padding: 12px 40px !important;
            background-color: var(--blue-color) !important;
            color: #fff !important;
            font-size: 16px !important;
            font-weight: 700 !important;
            transition: all ease 0.5s !important;
            border: 1px solid transparent !important;
        }
        
        
        .blogs {
            background-image: url({{asset('custom_img/Blog.jpg')}}) !important;
            background-size: cover;
            background-position: bottom;
            height: 550px;
        }
        
         
                
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
