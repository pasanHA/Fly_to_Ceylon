<?php
session_start();
require_once('./php/comphotels4.php');
include_once('./php/connection.php'); 
$query="select * from hotel WHERE City_ID=93"; 
$result=mysqli_query($con,$query);

if (isset($_POST['add'])){
   // print_r($_POST['Guideid']);
// if (isset($_POST['add'])){
//    print_r($_POST['Guideid']);}
 if(isset($_SESSION['cart'])){

     $item_array_id = array_column($_SESSION['cart'], "Guideid");

     if(in_array($_POST['Guideid'], $item_array_id)){
         echo "<script>alert('Product is already added in the cart..!')</script>";
         echo "<script>window.location = 'nuwaraeliya hotels.php'</script>";
     }else{

         $count = count($_SESSION['cart']);
         $item_array = array(
             'Guideid' => $_POST['Guideid']
         );

         $_SESSION['cart'][$count] = $item_array;
         print_r($_SESSION['cart']);
     }

 }else{

     $item_array = array(
             'Guideid' => $_POST['Guideid']
     );

    // Create new session variable
     $_SESSION['cart'][0] = $item_array;
     print_r($_SESSION['cart']);
 }
}


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
           <title>Fly to CEYLON | Hotels | Nuwaraeliya  </title>
        </head>
        <body class="home">
           <div id="siteLoader" class="site-loader">
              <div class="preloader-content">
                 <img src="assets/images/loader1.gif" alt="">
              </div>
           </div>
           <div id="page" class="full-page">
             
           <?php require_once ('./php/header.php'); ?>

            
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/ne\ h\ back.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Nuwaraeliya Hotels</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="single-tour-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8">
                        <div class="single-tour-inner">
                           <h2>EXPERIENCE THE BEST HOTELS IN NUWARAELIYA</h2>
                           <figure class="feature-image">
                              <img src="assets/images/ne h  1 2.jpg" alt="">
                              
                           </figure>
                           <div class="tab-container">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">THE RAMP</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="program-tab" data-toggle="tab" href="#program" role="tab" aria-controls="program" aria-selected="false">WESTBURY PALACE</a>
                                 </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">HILLDALE</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map" aria-selected="false">AREA MAP</a>
                                 </li>
                              </ul>

                              <div class="tab-content" id="myTabContent">
                                 <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    
                                 <?php
                                         $row=mysqli_fetch_assoc($result);
                                         if($row['Hotel_ID']==10){
                                         componenthotel4($row['Image'], $row['Discription'],$row['Hotel_ID']) ;
                                       }
                                  ?>  
                                 
                                 

                                   
                                   
                                 </div>

                                 <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                                   
                                 <?php
                                         $row=mysqli_fetch_assoc($result);
                                         if($row['Hotel_ID']==11){
                                         componenthotel4($row['Image'], $row['Discription'],$row['Hotel_ID']) ;
                                       }
                                  ?>  
                                 


                                   
                                 </div>

                               <div class="tab-pane" id="review"  role="tabpanel" aria-labelledby="program-tab">
                                 
                               <?php
                                         $row=mysqli_fetch_assoc($result);
                                         if($row['Hotel_ID']==12){
                                         componenthotel4($row['Image'], $row['Discription'],$row['Hotel_ID']) ;
                                       }
                                  ?>  


                                 </div> 

                                 <div class="tab-pane" id="map" role="tabpanel" aria-labelledby="map-tab">
                                    <div class="map-area">
                                       <iframe src="https://maps.google.com/maps?q=nuwaraeliya&t=&z=13&ie=UTF8&iwloc=&output=embed" height="450" allowfullscreen=""></iframe>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="single-tour-gallery">
                              <h3>GALLERY / PHOTOS</h3>
                              <div class="single-tour-slider">
                                 <div class="single-tour-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/ne h 1 3.jpg" alt="">
                                    </figure>
                                 </div>
                                 <div class="single-tour-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/ne h 2 2.jpg" alt="">
                                    </figure>
                                 </div>
                                 <div class="single-tour-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/ne h 3 2.jpg" alt="">
                                    </figure>
                                 </div>
                                 <div class="single-tour-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/ne h 2 3.jpg" alt="">
                                    </figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     
                     <?php require_once('./php/slider.php');?>
                  </div>
               </div>
            </div>
           
            <!-- subscribe html end -->
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