<?php

 function component1($name,$discription,$image,$Gid){
    $element = "
    
  <div class=\"col-lg-4 col-md-6\">
    <form action= \"tour-guide edit.php\" method= \"post\">
       
          <div class=\"package-wrap\">
              <div class=\"package-price\">
                    <h6>
                         <span>$150 </span> / per day
                    </h6>
             </div>
         </div>
       <div class=\"guide-content-wrap text-center\">
       
           <figure class=\"guide-image\">
               <img src=\"$image\" alt=\" \">
           </figure>
       
           <div class=\"guide-content\">
               <h3>$name</h3>
               <h5>Tour Guide</h5>
               <p>$discription</p>
               <div class=\"guide-social social-links\">
                   <ul>
                  <li><a href=\"#\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a></li>
                  <li><a href=\"#\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a></li>
                  <li><a href=\"#\"><i class=\"fab fa-youtube\" aria-hidden=\"true\"></i></a></li>
                  <li><a href=\"#\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a></li>
                  <li><a href=\"#\"><i class=\"fab fa-linkedin\" aria-hidden=\"true\"></i></a></li>
               </ul>
               </div>
          
        <!-- <div class=\"form-group submit-btn\"></div>
          <input type=\"submit\" name=\"submit\" value=\"\"> </div>--> 
             <br>
             <button type=\"submit\" class=\"button-primary \" name=\"add\">Book Now <i class=\"fas fa-shopping-cart\"></i></button>
             <input type='hidden' name='Guideid' value='$Gid'>
             <!-- <div class=\"form-group submit-btn \">
              <a href=\"#\" class=\"button-primary \">Book Now</a> 
           </div>-->
           <!--  btn btn-warning my-3 --> 
       </div>
       
           </div>

 </form>        
   </div>
    ";
    echo $element;
 }

