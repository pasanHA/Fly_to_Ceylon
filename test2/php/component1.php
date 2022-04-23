<?php

 function component1(){
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
               <img src=\"./upload/product1.png\" alt=\" \">
           </figure>
       
           <div class=\"guide-content\">
               <h3>Sunil Jayasena</h3>
               <h5>Tour Guide</h5>
               <p>Mr. Sunil Jayasena is one of best tour guide in Sri Lanka with 20year experience. He is flurent in EnHe also speak german, japan and russian languages well.</p>
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
          <input type=\"submit\" name=\"submit\" value=\"Book Now\"> </div>--> 
             <br>
          <div class=\"form-group submit-btn \">
             <a href=\"#\" class=\"button-primary \">Book Now</a>
          </div>

       </div>
       
           </div>
 
 </form>        
   </div>
    ";
    echo $element;
 }

