@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
    <!-- SECTION SEC-BANNER START -->
    <section class="Sec-Banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="BannerText" data-aos="fade-up">
                        {!! $page->content !!}
                        <a class="btn blue-btn" href="#">Become a Savvy Seller!</a>
                        <p>
                            
                            {!! App\Http\Traits\HelperTrait::returnFlag(1967) !!}
                            
                        </p>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="bannerFoam">
                        <form class="form-inline">
                            <div class="input-group">

                                <!--<input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="address" placeholder="Add NYC neighborhoods or address">-->
                                    <a href="{{ URL('properties') }}">
                                        <img  style="width:100%;" src="{{ asset('images/adddresss.PNG') }}" />
                                    </a>
                                <!--<div class="input-group-prepend">-->
                                <!--    <div class="input-group-text">-->
                                <!--        <a href="http://ayamigroup.idxbroker.com/idx/homevaluation" type="submit" style="height:55px;" class="btn blue-btn" type="submit">Next</a>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </form>
                    </div>
                    <div class="BannerText" data-aos="fade-up">
                        <p>AyAMi Will Provide You with Cash Bonus: Up To 2% of Purchase Price or Up To 2/3 of Your Real Estate Agent’s Commission </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION SEC-BANNER END -->




    <section class="same-sec">

        @include('calculate')

    </section>


    <section class="buy-with-ayami">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="best-way">
                        <h2>Why Buy with AyAMi</h2>
                    </div>
                    <div class="main-agent">

                        <div class="flex-agent light-b">
                            <div class="second-agent align-f">
                                <h3 class="bold-p">Save Up To 2% on<span class="d-block"> Your Next Home Purchase</span>
                                </h3>
                            </div>
                            <div class="second-agent" style="height: 70px;">
                                <p class="bold-p" style="color: var(--blue-color);">Cash Bonus / Commission Rebate?</p>
                            </div>
                            <div class="second-agent" style="height: 70px;">
                                <p class="bold-p">Agents Receive a Salary? </p>
                            </div>
                            <div class="second-agent" style="height: 40px;">
                                <p class="bold-p">Agent / Broker Client Style</p>
                            </div>

                            <div class="second-agent" style="height: 170px;">
                                <p class="bold-p">Full Attention on You – Our Existing Client?</p>
                            </div>
                            <div class="second-agent" style="height: 70px;">
                                <p class="bold-p">Full Service Agent</p>
                            </div>

                            <div class="second-agent" style="height: 20px;">
                                <p class="bold-p">Personalized Home Search & Advice</p>
                            </div>
                            <div class="second-agent" style="height: 70px;">
                                <p class="bold-p">Private Home Showings & Tours</p>
                            </div>
                            <div class="second-agent" style="height: 20px;">
                                <p class="bold-p">Offer Preparation & Negotiation</p>
                            </div>
                            <div class="second-agent" style="height: 70px;">
                                <p class="bold-p">Home Valuation & Advice</p>
                            </div>
                            <div class="second-agent" style="height: 20px;">
                                <p class="bold-p">Local Connections to 3rd Party Services</p>
                            </div>
                        </div> 


                        <div class="flex-agent light-b">
                            <div class="second-agent triangle-back" style="height: 140px;">
                                <p><img src=" {{ asset('images/logo-01.png') }}" class="img-fluid" alt="">
                                </p>
                            </div>
                            <div class="second-agent" style="height: 140px;">
                                <p>
                                    <span class="d-block"> <i class="fa-solid fa-check"></i></span>
                                    <span class="d-block"> YES! </span> Up to 2% Savvy Home Buyer Cash <span
                                        class="d-block"> Bonus
                                    </span>
                                </p>
                            </div>
                            <div class="second-agent" style="height: 20px; padding-right:10px;">
                                <i class="fa-solid fa-check"></i>
                            </div>

                            <div class="second-agent" style="height: 90px;">
                                <p><span class="d-block"> <i class="fa-solid fa-check"></i></span> Friendly &amp; Patient
                                </p>
                            </div>


                            <div class="second-agent" style="height: 140px;">

                                <p> <span class="d-block"> <i class="fa-solid fa-check"></i></span>
                                    YES! AyAMi Agents don’t chase after new leads and focus 100% on you and your needs
                                    because they
                                    receive a salary. AyAMi Agents’ interests are fully aligned with yours.</p>
                            </div>
                            <div class="second-agent" style="height: 70px;">
                                <i class="fa-solid fa-check"></i>
                            </div>


                            <div class="second-agent" style="height: 20px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="second-agent" style="height: 70px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="second-agent" style="height: 20px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="second-agent" style="height: 70px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="second-agent" style="height: 20px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </div>





                        <div class="flex-agent light-b">
                            <div class="second-agent align-l">
                                <h3 class="bold-p">Traditional Agent </h3>
                            </div>
                            <div class="second-agent" style="height: 80px;">
                                <p>
                                    <span class="d-block">
                                        <i class="fa-sharp fa-solid fa-xmark"
                                            style="color: red; background: transparent; font-size: 25px;"></i>
                                    </span>
                                    May require additional cash from you if your traditional agent does not get paid by the
                                    Seller’s
                                    Broker.
                                </p>
                            </div>
                            <div class="second-agent" style="height: 70px;">
                                <i class="fa-sharp fa-solid fa-xmark" style="color: red; background: transparent; font-size: 25px; padding-right:15px;"></i>
                            </div>
                            <div class="second-agent" style="height: 40px;">
                                <p><span class="d-block">
                                        <i class="fa-sharp fa-solid fa-xmark" style="color: red; background: transparent; font-size: 25px;"></i>

                                    </span> Aggressive &amp; Pushy </p>
                            </div>

                            <div class="second-agent" style="
     height: 160px;
 ">

                                <p> <span class="d-block">
                                        <i class="fa-sharp fa-solid fa-xmark"
                                            style="
     color: red;
     background: transparent;
     font-size: 25px;
 "></i>

                                    </span>NO. Traditional agents need to focus on the next lead and future prospective
                                    clients.
                                    Those agents don’t get paid unless you purchase a home and their interests are not fully
                                    aligned
                                    with yours.</p>
                            </div>
                            <div class="second-agent" style="
     height: 70px;
 ">
                                <i class="fa-solid fa-check"></i>
                            </div>


                            <div class="second-agent" style="
     height: 20px;
 ">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="second-agent" style="
     height: 70px;
 ">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="second-agent" style="
     height: 20px;
 ">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="second-agent" style="
     height: 70px;
 ">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="second-agent" style="
     height: 20px;
 ">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--<section class="bubble-button">-->
    <!--   <div class="container">-->
    <!--      <div class="row">-->
    <!--         <div class="col-lg-12">-->
    <!--            <div class="main-bubble">-->
    <!--               <div class="first-bubble">-->
    <!--                  <a href="#" class="bubbles-btn">Honesty and Integrity</a>-->
    <!--                  <a href="#" class="bubbles-btn">Salaried Agents</a>-->
    <!--               </div>-->
    <!--               <div class="first-bubble">-->
    <!--                  <a href="#" class="bubbles-btn">Rebate</a>-->
    <!--                  <a href="#" class="bubbles-btn">Comprehensive Services</a>-->
    <!--               </div>-->
    <!--            </div>-->
    <!--         </div>-->
    <!--      </div>-->
    <!--   </div>-->
    <!--</section>-->


    <section class="factor-sec">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="factors">
                        <h2>{!! $section[1]->value !!}</h2>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="d-flex">
                        <div class="bg-video-wrap">
                            <video class="video-1" width="100%" height="100%" autoplay="" muted=""
                                loop="" controls>
                                <source src="{{ asset($section[2]->value) }}" type="video/mp4">
                                {{-- <source src="{{ asset('images/video.ogg') }}" type="video/ogg"> --}}
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="factors">
                        <div class="list-factor">
                            {!! $section[3]->value !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="Sec-Looking pb-0 round-corn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="best-way" data-aos="fade-down" data-aos-duration="2000">
                        <h2>{!! $section[4]->value !!}</h2>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="LookingBox-MAin" data-aos="fade-up" data-aos-duration="2000">
                        <div class="LoockingBoxIcon">
                            <img src="{{ asset($section[5]->value) }}" class="img-fluid" alt="">
                        </div>
                        <div class="LookingBoxContent">
                            <h3>{!! $section[6]->value !!}</h3>
                            {!! $section[7]->value !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="LookingBox-MAin" data-aos="fade-down" data-aos-duration="2000">
                        <div class="LoockingBoxIcon">
                            <img src="{{ asset($section[8]->value) }}" class="img-fluid" alt="">
                        </div>
                        <div class="LookingBoxContent">
                            <h3>{!! $section[9]->value !!}</h3>
                            {!! $section[10]->value !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="LookingBox-MAin" data-aos="fade-up" data-aos-duration="2000">
                        <div class="LoockingBoxIcon">
                            <img src="{{ asset($section[11]->value) }}" class="img-fluid" alt="">
                        </div>
                        <div class="LookingBoxContent">
                            <h3>{!! $section[12]->value !!}</h3>
                            {!! $section[13]->value !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="LookingBox-MAin" data-aos="fade-up" data-aos-duration="2000">
                        <div class="LoockingBoxIcon">
                            <img src="{{ asset($section[14]->value) }}" class="img-fluid" alt="">
                        </div>
                        <div class="LookingBoxContent">
                            <h3>{!! $section[15]->value !!}</h3>
                            {!! $section[16]->value !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="find-more">
                        <p>Cash Bonus from AyAMi! ... How Is It Possible?</p>
                        <!-- <p>How is it possible that AyAMi provides Cash Bonus to its clients?</p> -->
                        <a class="btn blue-btn" href="{{ route('how-it-work') }}">Click here to
                            find out more.</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="table-sec pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cash-table radius-main">
                        <table>
                            <tr>
                                <td colspan="4" class="orange-color">{!! $section[17]->value !!}</td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{!! $section[18]->value !!}</p>
                                </td>
                                <td>
                                    <p>{!! $section[19]->value !!}</p>
                                </td>
                                <td>
                                    <p>{!! $section[20]->value !!}</p>
                                </td>
                                <td>
                                    <p>{!! $section[21]->value !!}</p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <p>{!! $section[22]->value !!}</p>
                                </td>
                                <td>
                                    <p>{!! $section[23]->value !!}</p>
                                </td>
                                <td>
                                    <p>{!! $section[24]->value !!}</p>
                                </td>
                                <td>
                                    <p>{!! $section[25]->value !!}</p>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>






















    <!--<section class="con11 box">-->
    <!--   <div class="container">-->
    <!--      <div class="row">-->
    <!--         <div class="col-lg-12">-->
    <!--            <div class="d-flex">-->
    <!--               <div class="bg-video-wrap">-->
    <!--                  <video class="video-1" width="100%" height="100%" autoplay="" muted="" loop="" controls>-->
    <!--                     <source src="{{ asset('images/video-sec.webm') }}" type="video/mp4">-->
    <!--                     <source src="{{ asset('images/video.ogg') }}" type="video/ogg">-->
    <!--                  </video>-->
    <!--               </div>-->

    <!--                <div class="buil-rigth">-->

    <!--                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aspernatur facilis animi dolor cum-->
    <!--                     minus, repellendus aut accusantium totam, eius sapiente odit eligendi?</p>-->
    <!--                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aspernatur facilis animi dolor cum-->
    <!--                     minus, repellendus aut accusantium totam, eius sapiente odit eligendi?</p>-->
    <!--               </div> -->
    <!--            </div>-->
    <!--         </div>-->
    <!--      </div>-->
    <!--   </div>-->
    <!--</section>-->







    <section class="local-communities">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="buil-rigth">
                        {!! $section[26]->value !!}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="build" data-aos="flip-left" data-aos-duration="2000">
                        <figure>
                            <img src="{{ asset($section[27]->value) }}" class="img-fluid" alt="" style="object-fit: cover !important;">
                        </figure>
                    </div>
                </div>
 
            </div>
        </div>
    </section>


    <section class="sec-four">
        <div class="container">
            <div class="row">


                <div class="col-lg-12 col-md-12 col-12">
                    <div class="trands">
                        <h2 class="ml3">Blog</h2>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-12">
                    <div class="blog-btn">
                        <a href="{{ route('blogs') }}" class="btn blue-btn">Local Insights</a>
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
                                <a href="{{ route('blog-detail', ['id' => $value->id, 'name' => preg_replace('/[^A-Za-z0-9\-]/', '', strtolower(str_replace(' ', '-', $value->name)))]) }}" class="btn btn-primary" >Read More</a>
                                <!-- <a href="#" class="custom-btn three"><i class="fa-solid fa-arrow-right"></i> Read More</a> -->
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
    </section>
@endsection
@section('css')
    <style>
    
    
    .teaching a {
        color: #a8a1a1 !important;
        background: transparent;
        padding: 0;
        font-weight: 500;
    }

        
        /* .Sec-Banner {*/
        /*    background-image: url({{asset('custom_img/Home-01.png')}}) !important;*/
        /*    background-repeat: no-repeat;*/
        /*    background-position: right;*/
        /*    height: 1090px;*/
        /*    position: relative;*/
        /*    display: flex;*/
        /*    align-items: center;*/ 
        /*    justify-content: center;*/
        /*}*/
      
    

      
    </style>
@endsection

@section('js')
    <script type="text/javascript">
        
       
        
    </script>
@endsection
