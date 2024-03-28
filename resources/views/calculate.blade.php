
<style>
    
    /*span.bonous {*/
    /*    display: flex;*/
    /*    justify-content: center;*/
    /*    position: relative;*/
    /*    bottom: 37px;*/
    /*}*/
    
    span.bonous {
        display: flex;
        justify-content: center;
        position: relative;
        bottom: 480px;
        font-weight: bold;
    }
    
    .range-col.flex-second {
        display: flex;
        height: 490px !important;
    }
    
</style>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cash-bonus">
                        <h3 class="mt-4">Calculate Your Cash Bonus</h3>
                        <div class="flex-claculater">
                            <div class="range-col">
                                <span class="purchase">
                                    Purchase Price
                                    <div style="display:flex;">
                                        <span class="d-block"> $ </span><span class="d-block" id="demo" style="margin-left: -30px;"> 250,000 </span>
                                    </div>
                                </span>
                                <div id="inputDiv">
                                    <div class="range-wrap">
                                        <div class="ticks" id="tickContainer">
                                        </div> 
                                      
                                        <!--<div class="range-slider"--> 
                                        <!--    style='--min:0; --max:100; --step:5; --value:75; --text-value:"75";'>-->
                                        <!--    <input class="slider-input" type="range" min="1500" max="81000" step="150" value="1500" id="myRange" class="checker">-->
                                        <!--    <div class='range-slider__progress'></div>-->
                                        <!--</div>-->

                                        <div class="range-slider" style='--min:0; --max:100; --step:5; --value:75; --text-value:"75";'>
                                            <input class="slider-input" type="range" min="250000" max="5000000" step="5000" value="500" id="myRange">
                                            <div class='range-slider__progress'>  </div>
                                        </div> 

                                    </div> 
                                    <div class="d-flex align-items-baseline">
                                        <p class="mt-5 p-0 mr-5">Buyer's Agent Gross Commission</p>
                                        <!--<p class="mb-2 mt-0"> <span id="blue-color">2.5%</span> <label class="switch">-->
                                        <!--      <input type="checkbox" value="" name="checker" class="checker" checked>-->
                                        <!--      <span class="slider round" id="myclicked"></span>-->
                                        <!--   </label> <span id="orenge-color" class="active2">3%</span></p>-->


                                        <div class="switch">
                                            <input id="switch-y" name="tripple" type="radio" value="Y"
                                                class="switch-input" checked/>
                                            <label for="switch-y" class="switch-label switch-label-y">2%</label>
                                            <input id="switch-i" name="tripple" type="radio" value="I"
                                                class="switch-input"  />
                                            <label for="switch-i" class="switch-label switch-label-i">2.5%</label>
                                            <input id="switch-n" name="tripple" type="radio" value="N"
                                                class="switch-input" />
                                            <label for="switch-n" class="switch-label switch-label-n">3%</label>
                                            <span class="switch-selector"></span>
                                        </div>


                                        <!-- <div class="d-flex align-items-baseline">
                                            <p class="mt-5 p-0 mr-5">Buyer's Agent Gross Commission</p>
                                            <p class="mb-2 mt-0"> <span id="blue-color"> 2.5% </span>
                                                <label class="switch">
                                                    <input type="checkbox" value="" name="checker" class="checker" checked>
                                                    <span class="slider round" id="myclicked"></span>
                                                </label>
                                                <span id="orenge-color" class="active2"> 3% </span></p> 
                                         </div> -->

                                    </div>
                                    @php
                                    $section = DB::table('section')->where('page_id', 1)->get();
                                    @endphp
                                    {!! $section[0]->value !!}
                                </div>
                            </div>
                            <div class="flex-second-parent">
                            <div class="range-col flex-second">
                                <div class="claculater">
                                    <div class="second-cal">
                                          
                                        <div class="yoreevo-cal">
                                            <div class="boxes-input">
                                                <div class="blocking-span">
                                                    <span class="dollar-t">$</span><span class="dollar-t" id="spaarr">500</span>
                                                    <span class="d-block">AyAMi*</span>
                                                </div>
                                                <div id="box_change" class="parent-box">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="yoreevo-cal two-s">
                                            <span class="dollar-t">
                                                $0
                                            </span>
                                            <span class="d-block">
                                                Traditional Agent
                                            </span>
                                            <div class="boxes-input">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                                <span class="bonous" style="text-transform: uppercase; color: #3a8cfb;font-size: 18px; font-weight: bold;">
                                    Cash Bonus
                                </span>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">


$('.slider-input').mousedown(function(){


    if($('#switch-y').prop("checked") == true){

        //   alert("2");

        var slider = document.getElementById("myRange"); 
        var output = document.getElementById("demo");
        var output2 = document.getElementById("spaarr");

        // output.innerHTML = slider.value;
        
        slider.oninput = function() {
        
        var input_number = parseInt(this.value);
        output.innerHTML = input_number.toLocaleString();

        var val = this.value / 100 * 2;
         
        // Min. Net Commission ($)
        var min_net_commission = 7500; 
        
        // 1st Value
        var first_value = val - min_net_commission;
        
        // 1 - 33% min net commission
        
        // 2nd Value
        var second_value = val * 0.6666666666666667;
        
        
        var final_amount = "";
        
        // compare if both value equal == 0
        if(first_value == 0 && second_value == 0){
            
            final_amount = 500;
            
        }
        else{
            
            final_amount = Math.min(first_value, second_value);
            
        }
        
        if(final_amount <= 500){
            
            var number = 500;
            output2.innerHTML = number.toLocaleString();
            
        }
        else{
            
            output2.innerHTML = Math.round(final_amount).toLocaleString();
            
        }
        

        }


    }



    if($('#switch-i').prop("checked") == true){

        // alert("2.5");

        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        var output2 = document.getElementById("spaarr");

        // output.innerHTML = slider.value;

        slider.oninput = function() {
        
        var input_number = parseInt(this.value);
        output.innerHTML = input_number.toLocaleString();

        var val = this.value / 100 * 2.5;

        // Min. Net Commission ($)
        var min_net_commission = 7500; 
        
        // 1st Value
        var first_value = val - min_net_commission;
        
        // 1 - 33% min net commission
        
        // 2nd Value
        var second_value = val * 0.6666666666666667;
        
        
        var final_amount = "";
        
        // compare if both value equal == 0
        if(first_value == "0" && second_value == "0"){
            
            final_amount = 500;
            
        }
        else{
            
            final_amount = Math.min(first_value, second_value);
            
        }
        
        
        
            
            if(final_amount <= 500){
                
                var number = 500;
                output2.innerHTML = number.toLocaleString();
                
            }
            else{
                
                output2.innerHTML = Math.round(final_amount).toLocaleString();
                
            }
            
            

        }


    }
    
    

    if($('#switch-n').prop("checked") == true){

        // alert("3");
 
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        var output2 = document.getElementById("spaarr");

        // output.innerHTML = slider.value;

        slider.oninput = function() {
            
        var input_number = parseInt(this.value);
        output.innerHTML = input_number.toLocaleString();

        var val = this.value / 100 * 3;
        
        
        // Min. Net Commission ($)
        var min_net_commission = 7500; 
        
        // 1st Value
        var first_value = val - min_net_commission;
        
        // 1 - 33% min net commission
        
        // 2nd Value
        var second_value = val * 0.6666666666666667;
        
        
        var final_amount = "";
        
        // compare if both value equal == 0
        if(first_value <= "0" && second_value <= "0"){
            
            final_amount = 500;
            
        }
        else{
            
            final_amount = Math.min(first_value, second_value);
            
        }
        

             if(final_amount <= 500){
                
                var number = 500;
                output2.innerHTML = number.toLocaleString();
                
            }
            else{
                
                output2.innerHTML = Math.round(final_amount).toLocaleString();
                
            }
        
        

        }
 
    }

})



$('#switch-y').click(function(){
   
   
        var slider = document.getElementById("myRange");
        var output2 = document.getElementById("spaarr");
        
        var slider_value = slider.value;
        
        var val = slider_value / 100 * 2;
        
        // alert(val);
        
        // Min. Net Commission ($)
        var min_net_commission = 7500; 
        
        // 1st Value
        var first_value = val - min_net_commission;
        
        // 1 - 33% min net commission
        
        // 2nd Value
        var second_value = val * 0.6666666666666667;
        
        
        var final_amount = "";
        
        // compare if both value equal == 0
        if(first_value == 0 && second_value == 0){
            
            final_amount = 500;
            
        }
        else{
            
            final_amount = Math.min(first_value, second_value);
            
        }
        
        // alert(final_amount);
        
        if(final_amount <= 500){
            
            var number = 500;
            output2.innerHTML = number.toLocaleString();
            
        }
        else{
            
            output2.innerHTML = Math.round(final_amount).toLocaleString();
            
        }
   
    
});



$('#switch-i').click(function(){
   
   
   var slider = document.getElementById("myRange");
        var output2 = document.getElementById("spaarr");
        
        var slider_value = slider.value; 
        
        var val = slider_value / 100 * 2.5;
        
        // alert(val);
        
        // Min. Net Commission ($)
        var min_net_commission = 7500; 
        
        // 1st Value
        var first_value = val - min_net_commission;
        
        // 1 - 33% min net commission
        
        // 2nd Value
        var second_value = val * 0.6666666666666667;
        
        
        var final_amount = "";
        
        // compare if both value equal == 0
        if(first_value == 0 && second_value == 0){
            
            final_amount = 500;
            
        }
        else{
            
            final_amount = Math.min(first_value, second_value);
            
        }
        
        // alert(final_amount);
        
        if(final_amount <= 500){
            
            var number = 500;
            output2.innerHTML = number.toLocaleString();
            
        }
        else{
            
            output2.innerHTML = Math.round(final_amount).toLocaleString();
            
        }
   
    
});


$('#switch-n').click(function(){
   
   var slider = document.getElementById("myRange");
        var output2 = document.getElementById("spaarr");
        
        var slider_value = slider.value;
        
        var val = slider_value / 100 * 3;
        
        // alert(val);
        
        // Min. Net Commission ($)
        var min_net_commission = 7500; 
        
        // 1st Value
        var first_value = val - min_net_commission;
        
        // 1 - 33% min net commission
        
        // 2nd Value
        var second_value = val * 0.6666666666666667;
        
        
        var final_amount = "";
        
        // compare if both value equal == 0
        if(first_value == 0 && second_value == 0){
            
            final_amount = 500; 
            
        }
        else{
            
            final_amount = Math.min(first_value, second_value);
            
        }
        
        // alert(final_amount);
        
        if(final_amount <= 500){
            
            var number = 500;
            output2.innerHTML = number.toLocaleString();
            
        }
        else{
            
            output2.innerHTML = Math.round(final_amount).toLocaleString();
            
        }
    
});

</script>


