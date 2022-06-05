<?php

 function component1($name,$discription,$image){
    $element = "



                <div class=\"col-lg-4 col-md-6\">
                           <div class=\"package-wrap\">
                                <figure class=\"feature-image\">
                                 <a href=\"#\">
                                    <img src= \"$image\" alt=\"\">
                                 </a>
                               </figure>
                              <div class=\"package-price\">
                                 <h6>
                                    <span> $name </span> 
                                 </h6>
                              </div>
                              <div class=\"package-content-wrap\">
                                 
                                 <div class=\"package-content\">
                                   
                                    <div class=\"review-area\">
                                      
                                    </div>
                                    <p>$discription</p>
                                    <br>
                                    
                                 </div>
                              </div>
                        </div>
                </div>
                     
                    
                       
            
            ";
            echo $element;
         }
        