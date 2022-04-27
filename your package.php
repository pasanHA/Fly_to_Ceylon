<?php
session_start();
require_once('./php/component1.php');
include_once('./php/connection.php'); 
$query="select * from guide"; 
$result=mysqli_query($con,$query);


?>


<!doctype html>
<html lang="en">
   <head>
           <!-- Required meta tags -->
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
           <!-- favicon -->
           <link rel="icon" type="image/png" href="assets/images/favicon.png">
           <!-- Bootstrap CSS -->
           <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
           <!-- Fonts Awesome CSS -->
           <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
           <!-- jquery-ui css -->
           <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
           <!-- modal video css -->
           <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
           <!-- light box css -->
           <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">
           <!-- slick slider css -->
           <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
           <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
           <!-- google fonts -->
           <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
           <!-- Custom CSS -->
           <link rel="stylesheet" type="text/css" href="style.css">
           <title>Fly to CEYLON | Your Package  </title>
        </head>
        <body class="home">
           <div id="siteLoader" class="site-loader">
              <div class="preloader-content">
                 <img src="assets/images/loader1.gif" alt="">
              </div>
           </div>
           <div id="page" class="full-page">
           <?php require_once ('./php/header2.php'); ?>
           <div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>

                <?php

               //  $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'Guideid');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($Guideid as $Guide_id){
                                if ($row['Guide_id'] == $Guide_id){
                                    cartElement($row['gimg'], $row['gname'],$row['gdis'], $row['id']);
                                    // $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>
<!-- 
                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?> -->

            </div>
        </div>
          
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/v\ place\ cover.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Your Package</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <!-- packages html start -->
            <div id="place">
            <section class="place" style="text-align:center">
               <br>
            <h2> <span>P</span>
               <span>L</span>
               <span>A</span>
               <span>C</span>
               <span>E</span>
               <span>S</span></h2>

            <!-- <div class="package-section">
               <div class="container">
                  <div class="package-inner">
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/v jaffna 1.jpg" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>NALLUR </span> 
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 
                                 <div class="package-content">
                                   
                                    <div class="review-area">
                                      
                                    </div>
                                    <p>Nallur Kandaswamy Kovil is a significant Hindu temple, located in Nallur, Northern Province, Sri Lanka.</p>
                                    <br>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     
                         <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/nagadeepa.jpg" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>NAGADEEPAYA </span> 
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 
                                 <div class="package-content">
                                    
                                    <div class="review-area">
                                      
                                    </div>
                                    <p>Nagadeepa Purana Vihara is an ancient Buddhist temple situated in Jaffna district of Northern Province, Sri Lanka. </p>
                                   <br>                                  
                                       
                                 </div>
                              </div>
                           </div>
                        </div> 
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/v jaffna 2.jpg" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>POINT PEDRO </span> 
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 
                                 <div class="package-content">
                                    
                                    <div class="review-area">
                                     
                                    </div>
                                    <p>Point Pedro is a town, located in Jaffna District, Sri Lanka, at the northernmost point of the island. </p>
                                    <br>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        -->
            </section>
            </div>

            <div id="hotel">
            <section class="hotel" style="text-align:center">
               <br>
               <h2><span>H</span>
                  <span>O</span>
                  <span>T</span>
                  <span>E</span>
                  <span>L</span>
                  <span>S</span>
               </h2>
   
              
               <!-- <div class="package-section">
                  <div class="container">
                     <div class="package-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-6">
                              <div class="package-wrap">
                                 <figure class="feature-image">
                                    <a href="#">
                                       <img src="assets/images/v trinco 1.jpg" alt="">
                                    </a>
                                 </figure>
                                 <div class="package-price">
                                    <h6>
                                       <span>KONESHWARAM </span> 
                                    </h6>
                                 </div>
                                 <div class="package-content-wrap">
                                    
                                    <div class="package-content">
                                      
                                       <div class="review-area">
                                         
                                       </div>
                                       <p>Kailasam is a classical-medieval Hindu temple complex in Trincomalee, a Hindu religious pilgrimage centre in Eastern Province, Sri Lanka</p>
                                       <br>
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                        
                            <div class="col-lg-4 col-md-6">
                              <div class="package-wrap">
                                 <figure class="feature-image">
                                    <a href="#">
                                       <img src="assets/images/V trinco 2.jpg" alt="">
                                    </a>
                                 </figure>
                                 <div class="package-price">
                                    <h6>
                                       <span>PIGEON ISLAND </span> 
                                    </h6>
                                 </div>
                                 <div class="package-content-wrap">
                                    
                                    <div class="package-content">
                                       
                                       <div class="review-area">
                                         
                                       </div>
                                       <p>Pigeon Island National Park is one of the two marine national parks of Sri Lanka. The national park is situated 1 km off the coast of Nilaveli.</p>
                                      <br>                                  
                                          
                                    </div>
                                 </div>
                              </div>
                           </div> 
                           <div class="col-lg-4 col-md-6">
                              <div class="package-wrap">
                                 <figure class="feature-image">
                                    <a href="#">
                                       <img src="assets/images/v trinco 3.jpg" alt="">
                                    </a>
                                 </figure>
                                 <div class="package-price">
                                    <h6>
                                       <span>ARUGAM BAY</span> 
                                    </h6>
                                 </div>
                                 <div class="package-content-wrap">
                                    
                                    <div class="package-content">
                                       
                                       <div class="review-area">
                                        
                                       </div>
                                       <p>Arugam Bay, known locally as "Arugam Kudah", is situated on the Indian Ocean in the dry zone of Sri Lanka's southeast coast Trincomalee.</p>
                                       <br>
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                                         -->
               </section>
               </div> 

               <div id="guide">
               <section class="guide" style="text-align:center">
                  <br>
                  <h2><span>G</span>
                     <span>U</span>
                     <span>I</span>
                     <span>D</span>
                     <span>E</span>
                     </h2>
      
                  
                  <!-- <div class="package-section">
                     <div class="container">
                        <div class="package-inner">
                           <div class="row">
                              <div class="col-lg-4 col-md-6">
                                 <div class="package-wrap">
                                    <figure class="feature-image">
                                       <a href="#">
                                          <img src="assets/images/V GALLE 1.jpg" alt="">
                                       </a>
                                    </figure>
                                    <div class="package-price">
                                       <h6>
                                          <span>GALLE FORT </span> 
                                       </h6>
                                    </div>
                                    <div class="package-content-wrap">
                                       
                                       <div class="package-content">
                                         
                                          <div class="review-area">
                                            
                                          </div>
                                          <p>Galle Fort, in the Bay of Galle on the southwest coast of Sri Lanka, was built first in 1588 by the Portuguese, then extensively fortified by the Dutch during the 17th.</p>
                                          <br>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           
                               <div class="col-lg-4 col-md-6">
                                 <div class="package-wrap">
                                    <figure class="feature-image">
                                       <a href="#">
                                          <img src="assets/images/V GALLE 2.jpg" alt="">
                                       </a>
                                    </figure>
                                    <div class="package-price">
                                       <h6>
                                          <span>ROOMASSALA </span> 
                                       </h6>
                                    </div>
                                    <div class="package-content-wrap">
                                       
                                       <div class="package-content">
                                          
                                          <div class="review-area">
                                            
                                          </div>
                                          <p>Rumassala is a beautiful mountain located 3 KM east to Galle town, Southern Province of Sri Lanka which is directly linked to the Ramayana yatra Sri Lanka.

                                          </p>
                                         <br>                                  
                                             
                                       </div>
                                    </div>
                                 </div>
                              </div> 
                              <div class="col-lg-4 col-md-6">
                                 <div class="package-wrap">
                                    <figure class="feature-image">
                                       <a href="#">
                                          <img src="assets/images/V GALLLE 3.jpeg" alt="">
                                       </a>
                                    </figure>
                                    <div class="package-price">
                                       <h6>
                                          <span>UNAWATUNA </span> 
                                       </h6>
                                    </div>
                                    <div class="package-content-wrap">
                                       
                                       <div class="package-content">
                                          
                                          <div class="review-area">
                                           
                                          </div>
                                          <p>Unawatuna is a coastal town in Galle district of Sri Lanka. Unawatuna is a major tourist attraction in Sri Lanka and known for its beach and corals.

                                          </p>
                                          <br>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              -->
                  </section>
               </div>

               <div id="other">
                  <section class="other" style="text-align:center">
                     <br>
                     <h2>
                        <span>O</span>
                           <span>T</span>
                           <span>H</span>
                           <span>E</span>
                           <span>R</span>
                          
                        </h2>
         
                     <!-- <div class="package-section">
                        <div class="container">
                           <div class="package-inner">
                              <div class="row">
                                 <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                       <figure class="feature-image">
                                          <a href="#">
                                             <img src="assets/images/V NELIYA 1.jpg" alt="">
                                          </a>
                                       </figure>
                                       <div class="package-price">
                                          <h6>
                                             <span>GREGORY PARK </span> 
                                          </h6>
                                       </div>
                                       <div class="package-content-wrap">
                                          
                                          <div class="package-content">
                                            
                                             <div class="review-area">
                                               
                                             </div>
                                             <p>Lake Gregory in Nuwara Eliya is the perfect spot for an exciting horse ride. Trotting around the lake on a pony will cost you around 300 rupees for 15 minutes.</p>
                                             <br>
                                             
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              
                                  <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                       <figure class="feature-image">
                                          <a href="#">
                                             <img src="assets/images/V NELIYA 2.jpg" alt="">
                                          </a>
                                       </figure>
                                       <div class="package-price">
                                          <h6>
                                             <span>HAGGALA </span> 
                                          </h6>
                                       </div>
                                       <div class="package-content-wrap">
                                          
                                          <div class="package-content">
                                             
                                             <div class="review-area">
                                               
                                             </div>
                                             <p>Hakgala Botanical Garden is situated on the Nuwara Eliya-Badulla main road, 16 km from Nuwara Eliya. The garden has a cool temperate climate because of altitude </p>
                                            <br>                                  
                                                
                                          </div>
                                       </div>
                                    </div>
                                 </div> 
                                 <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                       <figure class="feature-image">
                                          <a href="#">
                                             <img src="assets/images/V NELIYA 4.jpg" alt="">
                                          </a>
                                       </figure>
                                       <div class="package-price">
                                          <h6>
                                             <span>LOVERS LEAP </span>
                                             <span> WATERFALL</span> 
                                          </h6>
                                       </div>
                                       <div class="package-content-wrap">
                                          
                                          <div class="package-content">
                                             
                                             <div class="review-area">
                                              
                                             </div>
                                             <p>Lover's Leap Falls is a beautiful waterfall a short drive from town, near the Pedro Tea Factory. The initial section up from the main road can be walked.</p>
                                             <br>
                                             
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 -->
                     </section>
                     </div>
<!-- 
                     <div id="yala">
                     <section class="yala" style="text-align:center">
                        <br>
                        <h2><span>Y</span>
                           <span>A</span>
                           <span>L</span>
                           <span>A</span>
                           </h2>
            
                        <div class="package-section">
                           <div class="container">
                              <div class="package-inner">
                                 <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                       <div class="package-wrap">
                                          <figure class="feature-image">
                                             <a href="#">
                                                <img src="assets/images/V YALA 11.jpg" alt="">
                                             </a>
                                          </figure>
                                          <div class="package-price">
                                             <h6>
                                                <span>YALA </span> 
                                             </h6>
                                          </div>
                                          <div class="package-content-wrap">
                                             
                                             <div class="package-content">
                                               
                                                <div class="review-area">
                                                  
                                                </div>
                                                <p>Yala was designated as a wildlife sanctuary in 1900, and, along with Wilpattu was one of the first two national parks in Sri Lanka, having been designated in 1938. </p>
                                                <br>
                                                
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 
                                     <div class="col-lg-4 col-md-6">
                                       <div class="package-wrap">
                                          <figure class="feature-image">
                                             <a href="#">
                                                <img src="assets/images/V YALA 22.jpg" alt="">
                                             </a>
                                          </figure>
                                          <div class="package-price">
                                             <h6>
                                                <span>THISSA KIRINDA</span> 
                                             </h6>
                                          </div>
                                          <div class="package-content-wrap">
                                             
                                             <div class="package-content">
                                                
                                                <div class="review-area">
                                                  
                                                </div>
                                                <p>Kirinda Rajamaha Viharaya can be reach via Tissa- Kirinda road. This temple is located on a summit of a rocky mountain, just next to the southern coast.</p>
                                               <br>                                  
                                                   
                                             </div>
                                          </div>
                                       </div>
                                    </div> 
                                    <div class="col-lg-4 col-md-6">
                                       <div class="package-wrap">
                                          <figure class="feature-image">
                                             <a href="#">
                                                <img src="assets/images/v yala 3.jpg" alt="">
                                             </a>
                                          </figure>
                                          <div class="package-price">
                                             <h6>
                                                <span>SITHULPAWWA </span> 
                                             </h6>
                                          </div>
                                          <div class="package-content-wrap">
                                             
                                             <div class="package-content">
                                                
                                                <div class="review-area">
                                                 
                                                </div>
                                                <p>Situlpawwa Buddhist Monastery is an ancient Buddhist monastery built in the 2nd-century by King Kavantissa. Situlpawwa is near the Yala National Park,</p>
                                                <br>
                                                
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                   
                        </section>
                        </div> -->
                        
            <!-- packages html end -->
         </main>
         <?php require_once ('./php/footer.php'); ?>
         <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
         </a>
         <!-- custom search field html -->
            <div class="header-search-form">
               <div class="container">
                  <div class="header-search-container">
                     <form class="search-form" role="search" method="get" >
                        <input type="text" name="s" placeholder="Enter your text...">
                     </form>
                     <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                     </a>
                  </div>
               </div>
            </div>
         <!-- header html end -->
      </div>

      <!-- JavaScript -->
      <script src="assets/js/jquery.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
      <script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
      <script src="assets/js/jquery.counterup.js"></script>
      <script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
      <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
      <script src="assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
      <script src="assets/vendors/slick/slick.min.js"></script>
      <script src="assets/js/jquery.slicknav.js"></script>
      <script src="assets/js/custom.min.js"></script>
   </body>
</html>