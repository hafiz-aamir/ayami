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
            <h1>Become a Savvy Seller</h1>
            <div>
              <h2>
                 List Your Home for 1.25% 
                 <sup> <img src="images/info.png" id="infoo" data-toggle="popover2"   data-original-title="AyAMi will charge you only 1.25% commission for its services plus the buyer’s agent commission, which you control. For example, if you decide to offer 2.5% to the buyer’s agent at the AyAMi lists your home, you will pay a total commission of 3.75%. Minimum commission applies if buyer is represented by AyAMi as well." data-content="Click here for Terms and Conditions" class="img-fluid info_ayami" alt="" style="height: 20px;"> </sup>
              </h2>
                
              <br><br>    
                
              <a style="font-size: 27px;color: #000 !important;font-weight: 800;" >Enjoy the Savings</a>
                
              <br>
                
              <!--<a class="" href="{{ route('sell-with-ayami') }}" style="text-decation:none; font-size: 35px;">Sell with AyAMi </a>-->
              <a class="btn blue-btn" href="{{ route('sell-with-ayami') }}" style="text-decation:none;font-size: 20px;width: 280px;margin-top: 29px;">Sell with AyAMi </a>
            
             
              <div class="ayami-showw" style="display:none; position:absolute;">
                
                <p style="padding: 17px;background: #417fbc;color: #fff;text-align: justify;margin-left: 29rem;margin-top: -95px;width: 470px;">
                    AyAMi will charge you only 1.25% commission for its services plus the buyer’s agent commission, which you control. For example, if you decide to offer 2.5% to the buyer’s agent at the AyAMi lists your home, you will pay a total commission of 3.75%. Minimum commission applies if buyer is represented by AyAMi as well.
                    <br><a style="color:#fff; font-size: 17px;" href="{{ route('terms-and-condition') }}"><u>Click here for Terms and Conditions. </u></a>
                </p>
                
              </div>
              
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  
  <!-- SECTION SEC-BANNER END -->
  <section class="PageProperty PropertiesSec">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <br>  
         <h2 class="best-wayy"> List your property with AyAMi to enjoy lower listing fees and local market expertise </h2>
          <!--<br>  -->
          <!--<div class="row">-->
          <!--  <div class="col-md-4">-->
          <!--    <div class="property-box">-->
          <!--      <figure>-->
          <!--        <a href="property-detail.php">-->
          <!--          <img src="images/slide1.png" alt="" class="w-100">-->
          <!--        </a>-->
          <!--      </figure>-->
          <!--      <h4>Modern House</h4>-->
          <!--      <h6>North Mandala 6 Street, Greater, Jakarta</h6>-->
          <!--      <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor incididunt </p>-->
          <!--      <span>Penthouse 8 rooms 400m2</span>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="col-md-4">-->
          <!--    <div class="property-box">-->
          <!--      <figure>-->
          <!--        <a href="property-detail.php">-->
          <!--          <img src="images/slide2.png" alt="" class="w-100">-->
          <!--        </a>-->
          <!--      </figure>-->
          <!--      <h4>Condominium</h4>-->
          <!--      <h6>North Mandala 6 Street, Greater, Jakarta</h6>-->
          <!--      <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor incididunt </p>-->
          <!--      <span>Penthouse 8 rooms 400m2</span>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="col-md-4">-->
          <!--    <div class="property-box">-->
          <!--      <figure>-->
          <!--        <a href="property-detail.php">-->
          <!--          <img src="images/slide3.png" alt="" class="w-100">-->
          <!--        </a>-->
          <!--      </figure>-->
          <!--      <h4>Proyek Mangkark</h4>-->
          <!--      <h6>North Mandala 6 Street, Greater, Jakarta</h6>-->
          <!--      <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor incididunt </p>-->
          <!--      <span>Penthouse 8 rooms 400m2</span>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </div>
    </div>
  </section>
  
  <section class="buy-with-ayami">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-agent">
            <div class="flex-agent light-b">
              <div class="second-agent align-f">
                <h3 class="bold-p">Why Sell with AyAMi</h3>
              </div>
              <div class="second-agent" style="height: 20px;">
                <p class="bold-p" style="color: var(--blue-color);">Listing Fee</p>
              </div>
              <div class="second-agent" style="height: 70px;">
                <p class="bold-p">Agents Receive a Salary </p>
              </div>
              <div class="second-agent" style="height: 40px;">
                <p class="bold-p">Full Service Agent</p>
              </div>
              <div class="second-agent" style="height: 70px;">
                <p class="bold-p">Expert Home Valuation</p>
              </div>
              <div class="second-agent" style="height: 20px;">
                <p class="bold-p">List on online portals and to MLS databases</p>
              </div>
              <div class="second-agent" style="height: 70px;">
                <p class="bold-p">Professional Photos</p>
              </div>
              <div class="second-agent" style="height: 20px;">
                <p class="bold-p">3D Walkthrough</p>
              </div>
              <div class="second-agent" style="height: 70px;">
                <p class="bold-p">Professional Video Tour</p>
              </div>
              <div class="second-agent" style="height: 20px;">
                <p class="bold-p">Marketing &amp; Social Ad Campaigns</p>
              </div>
            </div>
            <div class="flex-agent light-b">
              <div class="second-agent triangle-back" style="height: 140px;">
                <p>
                  <img src=" images/logo-01.png" class="img-fluid" alt="">
                </p>
              </div>
              <div class="second-agent" style="height: 100px;">
                <p style="font-size: 22px;"> 1.25% </p>
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
              <div class="second-agent" style="height: 70px;">
                <i class="fa-solid fa-check"></i>
              </div>
              <div class="second-agent" style="height: 20px;">
                <i class="fa-solid fa-check"></i>
              </div>
              <div class="second-agent" style="height: 70px;">
                <i class="fa-solid fa-check"></i> 
              </div>
            </div>
            <div class="flex-agent light-b">
              <div class="second-agent align-l">
                <h3 class="bold-p">Traditional Agent </h3>
              </div>
              <div class="second-agent" style="height: 40px;">
                <p style="margin-top: -42px;">
                  <span class="d-block">
                    <a style="width: 20px !important; margin-left: 40px !important;" href="javascript:;" data-toggle="popover"  title="“2.5% - 3.5% is the often seen range but can vary beyond”">
                        <img src="images/info.png" class="img-fluid" alt="" >
                    </a>
                  </span> 
                  
                  <span style="font-size: 22px;"> 3% </span>
                  
                </p>
                
                 
                  <!--<div class="ayami-showww">-->
                  <!--  <p>AyAMi will charge you only 1.25% commission for its services plus the buyer’s agent commission, which you control. For example, if you decide to offer 2.5% to the buyer’s agent at the AyAMi lists your home, you will pay a total commission of 3.75%. Minimum commission applies if buyer is represented by AyAMi as well.</p>-->
                  <!--  <a class="btn blue-btn" href="#">Enjoy the Savings</a>-->
                  <!--  <p>-->
                  <!--    <a href="terms-and-condition.php">Click here for terms and conditions. </a>-->
                  <!--  </p>-->
                  <!--  <a class="btn blue-btn b-bottom" href="{{ route('sell-with-ayami') }}">Sell with AyAMi</a>-->
                  <!--</div>-->
                
              </div>
              
               
              
              <div class="second-agent" style="height: 50px;">
                <i class="fa-sharp fa-solid fa-xmark" style="color: red; background: transparent; font-size: 25px;"></i>
              </div>
              <div class="second-agent" style="height: 50px;">
                <i class="fa-solid fa-check"></i>
              </div>
              <div class="second-agent" style="height: 40px;">
                <i class="fa-solid fa-check"></i>
              </div>
              <div class="second-agent" style="height: 70px;">
                <i class="fa-solid fa-check"></i>
              </div>
              <div class="second-agent" style="height: 20px;">
                <i class="fa-solid fa-check"></i>
              </div>
              <div class="second-agent" style="height: 70px;">
                <p>Maybe</p>
              </div>
              <div class="second-agent" style="height: 20px;">
                <p>Maybe</p>
              </div>
              <div class="second-agent" style="height: 70px;">
                <p>Maybe</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="Sec-Looking">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="best-way" data-aos="fade-down" data-aos-duration="2000">
            <h2>Become a Savvy Seller </h2>
            <h2> Say goodbye to the high, outdated fees of traditional brokers </h2>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="LookingBox-MAin" data-aos="fade-up" data-aos-duration="2000">
            <div class="LoockingBoxIcon">
              <img src="images/shape1.png" class="img-fluid" alt="">
            </div>
            <div class="LookingBoxContent">
              <h3>Customized Home Valuation </h3>
              <p> AyAMi agent will provide you with free, customized and in-depth home valuation. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="LookingBox-MAin" data-aos="fade-down" data-aos-duration="2000">
            <div class="LoockingBoxIcon">
              <img src="images/shape2.png" class="img-fluid" alt="">
            </div>
            <div class="LookingBoxContent">
              <h3>Comprehensive Marketing</h3>
              <p> AyAMi’s team will develop and implement a marketing strategy that will get your property thorough market exposure. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="LookingBox-MAin" data-aos="fade-up" data-aos-duration="2000">
            <div class="LoockingBoxIcon">
              <img src="images/shape3.png" class="img-fluid" alt="">
            </div>
            <div class="LookingBoxContent">
              <h3>Expertise All Throughout</h3>
              <p> We know how stressful it can be to sell your home. AyAMi will be with you every step of the way. We will handle showings, open houses, manage negotiations, and lead you to a successful sale. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="LookingBox-MAin" data-aos="fade-up" data-aos-duration="2000">
            <div class="LoockingBoxIcon">
              <img src="images/shape4.png" class="img-fluid" alt="">
            </div>
            <div class="LookingBoxContent">
              <h3>Extra Cash for You</h3>
              <p> Well Done! You sold your property and now you can enjoy commission savings due to AyAMi’s listing agent fee of 1.25%. </p>
            </div>
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
            <a href="blogs.php#link_id" class="btn blue-btn">Local Insights</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="first-img">
            <figure>
              <img src="images/14.png" class="img-fluid" alt="">
            </figure>
            <div class="teaching two">
              <!-- <p class="small-p">July 08, 2021<span> Lorem lipsum</span></p> -->
              <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit</p>
              <!-- <p class="samll-b">Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempor
                       incididunt ut labore et dolore magna aliqua.</p> -->
              <h6 class="keyword-txt">Lorem, ipsum, dolor,</h6>
              <!-- <a href="#" class="custom-btn three"><i class="fa-solid fa-arrow-right"></i> Read More</a> -->
            </div> 
          </div>
        </div>
        <div class="col-lg-4">
          <div class="first-img">
            <figure>
              <img src="images/15.png" class="img-fluid" alt="">
            </figure>
            <div class="teaching">
              <!-- <p class="small-p">jan 23, 2021<span> Lorem lipsum</span></p> -->
              <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit</p>
              <!-- <p class="samll-b">Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempor
                       incididunt ut labore et dolore magna aliqua.</p> -->
              <h6 class="keyword-txt">Lorem, ipsum, dolor,</h6>
              <!-- <a href="#" class="custom-btn three"><i class="fa-solid fa-arrow-right"></i> Read More</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="first-img">
            <figure>
              <img src="images/16.png" class="img-fluid" alt="">
            </figure>
            <div class="teaching">
              <!-- <p class="small-p">sep 10, 2021<span> Lorem lipsum</span></p> -->
              <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit</p>
              <!-- <p class="samll-b">Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempor
                       incididunt ut labore et dolore magna aliqua.</p> -->
              <h6 class="keyword-txt">Lorem, ipsum, dolor,</h6>
              <!-- <a href="#" class="custom-btn three"><i class="fa-solid fa-arrow-right"></i> Read More</a> -->
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="sec-four">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <div class="best-way" data-aos="fade-down" data-aos-duration="2000">
            <h2>How Much Could You Sell Your Property For? </h2>
            <h2>Receive free home valuation </h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="bannerFoam seller-bar"> 
            <form class="form-inline" method="get" action="{{ route('sell-with-ayami') }}"> 
              <div class="input-group">
                <!--<input type="text" class="form-control" name="address" id="inlineFormInputGroupUsername2" placeholder="Add NYC neighborhoods or address">-->
                <a href="{{ route('sell-with-ayami') }}" >
                    <img style="width:100%;" src="{{ asset('images/adddresss.PNG') }}" />
                </a>
                <!--<div class="input-group-prepend">-->
                <!--  <div class="input-group-text">-->
                    <!-- <button class="btn blue-btn" type="button" data-toggle="modal" data-target="#Openbar">Next</button> --> 
                <!--    <a href="http://ayamigroup.idxbroker.com/idx/homevaluation" class="btn blue-btn"> Next </a> -->
                <!--  </div>-->
                <!--</div>-->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
 </section>
  
  
<div class="modal fade" id="Openbar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <!--<div class="modal-body">-->
    <!--  <div class="ayami-show">-->
    <!--    <p>AyAMi will charge you only 1.25% commission for its services plus the buyer’s agent commission, which you control. For example, if you decide to offer 2.5% to the buyer’s agent at the AyAMi lists your home, you will pay a total commission of 3.75%. Minimum commission applies if buyer is represented by AyAMi as well.</p>-->
    <!--    <a class="btn blue-btn" href="#">Enjoy the Savings</a>-->
    <!--    <p>-->
    <!--      <a href="{{ route('terms-and-condition') }}">Click here for terms and conditions. </a>-->
    <!--    </p>-->
    <!--    <a class="btn blue-btn b-bottom" href="http://ayamigroup.idxbroker.com/idx/homevaluation"> Sell with AyAMi </a>-->
    <!--  </div>-->
    <!--</div>-->
  </div>
</div>
</div>
  

@endsection
@section('css')
    <style>
    
    
    .teaching a {
    
        color:#000 !important;
        
    }
    
    .teaching a:hover{
    
        color:#000 !important;
        
    }
        
        /*.popover-body {*/
        /*    padding: 0.5rem 0.75rem !important;*/
        /*    color: #fff !important;*/
        /*    background: #3a8cfb !important;*/
        /*    font-size: 20px !important;*/
        /*    border-radius: 4px !important;*/
        /*}*/
        
        
        .best-wayy{
            text-align: center;
            color: var(--blue-color);
            font-weight: 800;
            text-transform: uppercase;
            font-size: 30px;
        }
        
        .popover-header{
            padding: 0.5rem 0.75rem;
            margin-bottom: 0;
            font-size: 20px !important;
            background-color: #4481bb !important;
            color: #fff !important;
            border-top-left-radius: calc(0.3rem - 1px);
            border-top-right-radius: calc(0.3rem - 1px);
            width: 365px !important;
        }
        
        .popover-body {
            width: 365px !important;
            padding: 0.5rem 0.75rem;
            color: #ffffff !important;
            background-color: #4481bb !important;
        }

        .bs-popover-auto[x-placement^=right]>.arrow::after, .bs-popover-right>.arrow::after {
            left: 1px;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: #1467af;
        }
        
        .PropertiesSec {
            scroll-behavior: smooth;
            padding-bottom: 0rem !important;
            padding-top: 5rem !important;
            position: relative !important;
        }
        
        
        .second-agent p span img {
            width: 20px !important;
            margin-top: 5px !important;
        }
        
  
    </style>
@endsection

@section('js')


    <script type="text/javascript"></script>
    <script>
    
        $(document).ready(function(){
            
          $('[data-toggle="popover"]').tooltip(); 
          
        //   $('[data-toggle="popover2"]').popover();  
          
          
        });
        
        
       
        $(".info_ayami").hover(function(){
        
            $(".ayami-showw").show(); // Show the hidden div when hovering over the trigger
        
        }, function(){
        
            $(".ayami-showw").hide(); // Hide the hidden div when not hovering over the trigger
        
        });
        
        
        
         $(".ayami-showw").hover(function(){
        
            $(".ayami-showw").show(); // Show the hidden div when hovering over the trigger
        
        }, function(){
        
            $(".ayami-showw").hide(); // Hide the hidden div when not hovering over the trigger
        
        });
        
        
            
        // $('#infoo').hover(function(){
        //       $('[data-toggle="popover2"]').popover();  
        // });
        
        
        // $('.popover-body').click(function(){
           
        //   alert("ssd");
            
        // });
        
        
        
      </script>
@endsection
