  <?php
session_start();
require_once('./php/component1.php');
include_once('./php/connection.php'); 
$query="select * from guide"; 
$result=mysqli_query($con,$query);


if (isset($_POST['add'])){
     ///print_r($_POST['Guideid']);
   if(isset($_SESSION['cart'])){

       $item_array_id = array_column($_SESSION['cart'], "Guideid");

       if(in_array($_POST['Guideid'], $item_array_id)){
           echo "<script>alert('Product is already added in the cart..!')</script>";
           echo "<script>window.location = 'tour-guide edit.php'</script>";
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
          <title>Fly to CEYLON | Tour Guide  </title>
       </head>
       <body class="home">
      <!-- <div> <?php require_once ("./php/header2.php");?></div> -->
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
               <div class="inner-baner-container" style="background-image: url(assets/images/TG\ 14.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Tour Guide</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <!-- guidel html start -->
            <div class="guide-page-section">
               <div class="container">
               	<div class="row">
               		<?php 
                     while($row=mysqli_fetch_assoc($result)) 
                     {
                         component1($row['Guide_name'], $row['Guide_disr'], $row['Guide_image'],$row['Guide_id']);
                     }
                     
                     ?>
               	</div>
               </div>
            </div>
            <!-- guidel html end -->
            <!-- client section html start -->
            <div class="client-section override-client">
               <div class="container">
                  <div class="client-wrap client-slider secondary-bg">
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo1.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo2.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo3.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo4.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo5.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo2.png" alt="">
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
            <!-- client html end -->
            <!-- callback section html start -->
            <div class="override-callback secondary-overlay" style="background-image: url(assets/images/TG\ 13.jpg);">
               <div class="container">
                  <div class="section-heading section-heading-white">
                     <div class="row">
                        <div class="col-lg-7">
                          
                           <h2>JOIN WITH US & GET WONDERFULL EXPERIENCES!!</h2>
                           <p>Our tour guides have a compelling zeal and passion for what they do. They do not have to be locals to be a guide in an area. They have enough passion to learn the history of an area, naturally, tell the story and explain their knowledge with enthusiasm to eager guests. They provide you best service ever.</p>
                           <a href="#" class="button-primary">JOINS US NOW</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- callback html end -->
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