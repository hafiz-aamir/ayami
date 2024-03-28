@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
<!-- SECTION SEC-BANNER START -->

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-ayami-sell">
                <br><br><br>
                    <form method="post" action="{{ route('post_sell_with_ayami') }}" >

                        @csrf
                        
                        <!--<h3> Valuation Window </h3>-->
                        
                        <!--<hr>-->
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Receive a home valuation</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="receive_a_home" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Property Type</label>
                            <select type="select" class="form-control" id="property_type" name="property_type">
                                <option> Condo </option>
                                <option> Co-op </option>
                                <option> House </option>
                                <option> Multi-family </option>
                            </select>
                        </div>
                        
                        <?php 
                        
                        $get_address = "";
                        
                            if(isset($_GET["address"])){
                                $get_address = $_GET["address"];
                            }else{
                                $get_address = "";
                            }
                        
                        ?>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Property Address</label>
                            <input type="text" class="form-control" id="property_address" name="property_address" aria-describedby="emailHelp" value="{{ $get_address }}" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Unit (if applicable)</label>
                            <input type="text" class="form-control" id="unit" name="unit" aria-describedby="emailHelp" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">How soon are you planning to sell?</label>
                            <select type="select" class="form-control" id="how_soon_are_you" name="how_soon_are_you">
                                <option> ASAP </option>
                                <option> 1-3 months </option>
                                <option> 3-6 months </option>
                                <option> 6-12 months </option>
                                <option> 12+ months </option>
                                <option> TBD </option>
                            </select>
                        </div>
               

                        <div class="form-group">
                            <label for="exampleInputPassword1">What is the condition of the property?</label>
                            <select type="select" class="form-control" id="condition_property" name="condition_property">
                                <option> No repairs needed </option>
                                <option> Needs light repairs </option>
                                <option> Needs significant work </option>
                                <option> Fixer upper </option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" placeholder="" required>
                        </div>
                        
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Sign-up for AyAMi newsletter</label>
                        </div>
            
                        <!-- <a href="next.php" class="btn btn-primary">Next</a> -->
        
                        <input type="submit"  class="btn btn-primary" />
        
                    </form>
                </div>
    </div>
    </div>
    </div>
</section>


<!-- <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-lg-12 p-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6 p-0">
                                <div class="leftarea">
                                    <h6>Get in touch</h6>
                                    <div class="logoarea">
                                        <img src="images/logo-01.png" alt="" class="img-fluid">
                                        <div class="logotext">
                                            <p> Receive back up to 2% of the purchase price with AyAMi Real Estate Agency </p>
                                        </div>
                                    </div>
                                    <ul>
                                          <li><p><span><i class="fa-regular fa-envelope"></i></span><a
                                                    href="mailto:info@ayamigroup.com">info@ayamigroup.com</a></p></li> 
                                        <li>
                                            <p>
                                                <span>
                                                    <i class="fa-solid fa-phone"></i>
                                                </span>
                                                <a href="tel:(203) 533-9781">(203) 533-9781 (text & talk)</a>
                                            </p>
                                        </li>
                                       
                                        <li>
                                            <p>
                                                <span>
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </span>
                                                <a href="">800 Village Walk #787 <br>Guilford, CT 06437-2762 </a>
                                            </p>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btnmodal">Schedule a call</a>
                                    <div class="socialicons">
                                        <a href="#">
                                            <img src="images/youtube.png" class="img-fluid" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="images/20.png" class="img-fluid" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="images/images18.png" class="img-fluid" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="images/5.jpg" class="img-fluid" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="images/19.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="rightarea">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Enter your Email</label>
                                            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <label> Write your message here</label> 
                                            <textarea name="message" class="form-control" placeholder="Hi AyAMi Group, I'm currently searching for a new property in Connecticut and am interested in your offer and real estate services.  Please contact me urgently." id="" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Sign-up for AyAMi account and receive a guaranteed minimum $500 Cash Bonus upon closing!”</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">sign up</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


@endsection
@section('css')
    <style>
      
    </style>
@endsection

@section('js')
    <script type="text/javascript">


    </script>
@endsection
