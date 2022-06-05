<?php

 function componenthotel5($img,$dis,$Gid){
    $element = "

                    <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview-tab\">
                    <form action= \"jaffna hotels.php\" method= \"post\">                 
                                      
                                  <div class=\"itinerary-content\"> 

                                       
                                       <div class=\"single-gallery grid-item\">
                                             <figure class=\"gallery-img\">
                                                  <img src=\"$img\" alt=\"\">
                                 
                                              </figure>
                                       </div> <br>
                                       <p>$dis</p>
                                 </div>
                                 <!-- <div class=\"form-group submit-btn\"></div>
          <input type=\"submit\" name=\"submit\" value=\"\"> </div>--> 
             <br>
             <button type=\"submit\" class=\"button-primary \" name=\"add\">aBook Now <i class=\"fas fa-shopping-cart\"></i></button>
             <input type='hidden' name='Guideid' value='$Gid'>
             <!-- <div class=\"form-group submit-btn \">
              <a href=\"#\" class=\"button-primary \">Book Now</a> 
           </div>-->
           <!--  btn btn-warning my-3 --> 
                                
           </form>             
                     </div>

                     ";
                     echo $element;
                  }
                  function cartElement5($image, $name, $discription){
                    $element = "
                  
                    <form action=\"your package.php\"  method=\"post\" class=\"cart-items\">
                                    <div class=\"border rounded\">
                                         <div class=\"row bg-white\">
                                         <div class=\"col-md-3 pl-0\">
                                                <img src=\"$image\" alt=\"Image1\" class=\"img-fluid\">
                                         </div>
                                            <div class=\"col-md-6\">
                                                <h5 class=\"pt-2\">$name</h5>
                                                <small class=\"text-secondary\">Seller: pasanHA</small>
                                                <h5 class=\"pt-2\">$discription</h5>
                                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                            </div>
                                            <div class=\"col-md-3 py-5\">
                                                <div>
                                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                    
                    ";
                    echo  $element;
                  }                  