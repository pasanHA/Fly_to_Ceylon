<?php
session_start();
require_once('./php/component1.php');
include_once('./php/connection.php'); 
require_once('./php/comphotels.php');
require_once('./php/comphotels2.php');
require_once('./php/comphotels3.php');
require_once('./php/comphotels4.php');
require_once('./php/comphotels5.php');
require_once('./php/comphotels6.php');
$query="select * from guide"; 
$result=mysqli_query($con,$query);

$query="select * from transportation"; 
$result2=mysqli_query($con,$query);

$query="select * from hotel WHERE City_ID=90"; 
$result3=mysqli_query($con,$query);

$query="select * from hotel WHERE City_ID=91"; 
$result4=mysqli_query($con,$query);

$query="select * from hotel WHERE City_ID=92"; 
$result5=mysqli_query($con,$query);

$query="select * from hotel WHERE City_ID=93"; 
$result6=mysqli_query($con,$query);

$query="select * from hotel WHERE City_ID=94"; 
$result7=mysqli_query($con,$query);

$query="select * from hotel WHERE City_ID=95"; 
$result8=mysqli_query($con,$query);



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
        <div class="col-md-12">
            <div class="shopping-cart">
                <h3>Tour Guides</h3>
                <hr>

                 <?php

               //  $total = 0;
                  //   if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'Guideid');

                        // $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $Guide_id){
                                if ($row['Guide_id'] == $Guide_id){
                                    cartElement($row['Guide_image'], $row['Guide_name'],$row['Guide_disr']);
                                    // $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                  //   }else{
                  //       echo "<h5>Cart is Empty</h5>";
                  //   }

                ?> 


            </div>

            <div class="shopping-cart">
                <h3>Transportation</h3>
                <hr>

                 <?php

               //  $total = 0;
                  //   if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'Guideid');

                        // $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result2)){
                            foreach ($product_id as $vehi_id){
                                if ($row['vehi_id'] == $vehi_id){
                                    cartElement($row['Image'], $row['Vehicle_type'],$row['vehi_disc']);
                                    // $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                  //   }else{
                  //       echo "<h5>Cart is Empty</h5>";
                  //   }

                ?> 


            </div>
            <div class="shopping-cart">
                <h3>Hotels</h3>
                <hr>

                 <?php

               //  $total = 0;
                  //   if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'Guideid');

                        // $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result3)){
                            foreach ($product_id as $Hotel_ID){
                                if ($row['Hotel_ID'] == $Hotel_ID){
                                    cartElement1($row['Image'], $row['Hotel_Name'],$row['Discription']);
                                    // $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                  //   }else{
                  //       echo "<h5>Cart is Empty</h5>";
                  //   }

                ?> 


            </div>
            <div class="shopping-cart">
                <h3>Trinco</h3>
                <hr>

                 <?php

               //  $total = 0;
                  //   if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'Guideid');

                        // $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result4)){
                            foreach ($product_id as $Hotel_ID){
                                if ($row['Hotel_ID'] == $Hotel_ID){
                                    cartElement2($row['Image'], $row['Hotel_Name'],$row['Discription']);
                                    // $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                  //   }else{
                  //       echo "<h5>Cart is Empty</h5>";
                  //   }

                ?> 


            </div>

            <div class="shopping-cart">
                <h3>Galle</h3>
                <hr>

                 <?php

               //  $total = 0;
                  //   if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'Guideid');

                        // $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result5)){
                            foreach ($product_id as $Hotel_ID){
                                if ($row['Hotel_ID'] == $Hotel_ID){
                                    cartElement3($row['Image'], $row['Hotel_Name'],$row['Discription']);
                                    // $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                  //   }else{
                  //       echo "<h5>Cart is Empty</h5>";
                  //   }

                ?> 


            </div>


            <div class="shopping-cart">
                <h3>Nuwara Eliya</h3>
                <hr>

                 <?php

               //  $total = 0;
                  //   if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'Guideid');

                        // $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result6)){
                            foreach ($product_id as $Hotel_ID){
                                if ($row['Hotel_ID'] == $Hotel_ID){
                                    cartElement4($row['Image'], $row['Hotel_Name'],$row['Discription']);
                                    // $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                  //   }else{
                  //       echo "<h5>Cart is Empty</h5>";
                  //   }

                ?> 


            </div>


            <div class="shopping-cart">
                <h3>Jaffna</h3>
                <hr>

                 <?php

               //  $total = 0;
                  //   if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'Guideid');

                        // $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result7)){
                            foreach ($product_id as $Hotel_ID){
                                if ($row['Hotel_ID'] == $Hotel_ID){
                                    cartElement5($row['Image'], $row['Hotel_Name'],$row['Discription']);
                                    // $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                  //   }else{
                  //       echo "<h5>Cart is Empty</h5>";
                  //   }

                ?> 


            </div>


            <div class="shopping-cart">
                <h3>Yala</h3>
                <hr>

                 <?php

               //  $total = 0;
                  //   if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'Guideid');

                        // $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result8)){
                            foreach ($product_id as $Hotel_ID){
                                if ($row['Hotel_ID'] == $Hotel_ID){
                                    cartElement6($row['Image'], $row['Hotel_Name'],$row['Discription']);
                                    // $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                  //   }else{
                  //       echo "<h5>Cart is Empty</h5>";
                  //   }

                ?> 


            </div>
        </div>
          
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <!-- <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/v\ place\ cover.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Your Package</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section> -->
            <!-- Inner Banner html end-->
            <!-- packages html start -->
           
           
           
           
            <!-- <div id="place">
            <section class="place" style="text-align:center">
               <br>
            <h2> <span>P</span>
               <span>L</span>
               <span>Avv</span>
               <span>C</span>
               <span>E</span>
               <span>S</span></h2>


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
                          
                        </h2> -->
         
                              
                                  <!-- <div class="col-lg-4 col-md-6">
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