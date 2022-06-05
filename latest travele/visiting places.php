<?php
require_once('./php/visiting.php');
include_once('./php/connection.php'); 
$query="select * from destination WHERE City_ID=94"; 
$result=mysqli_query($con,$query);

$query="select * from destination WHERE City_ID=91"; 
$result2=mysqli_query($con,$query);

$query="select * from destination WHERE City_ID=92"; 
$result3=mysqli_query($con,$query);

$query="select * from destination WHERE City_ID=93"; 
$result4=mysqli_query($con,$query);

$query="select * from destination WHERE City_ID=95"; 
$result5=mysqli_query($con,$query);


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
           <title>Fly to CEYLON | Visiting Places </title>
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
               <div class="inner-baner-container" style="background-image: url(assets/images/v\ place\ cover.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Visting Places</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <!-- packages html start -->
            <div id="jaffna">
            <section class="#jaffna" style="text-align:center">
               <br>
             <h2> <span>J</span>
               <span>A</span>
               <span>F</span>
               <span>F</span>
               <span>N</span>
               <span>A</span></h2>

               <div class="package-section">
                  <div class="container">
                     <div class="package-inner">
                        <div class="row">
              <?php
              	
                  while($row=mysqli_fetch_assoc($result)) 
                  {
                      component1($row['Destination_Name'],$row['Discription'], $row['Image']);
                  }
                  
                  

               ?>


            <div id="trincomalee">
            <section class="trinco" style="text-align:center">
               <br>
               <h2><span>T</span>
                  <span>R</span>
                  <span>I</span>
                  <span>N</span>
                  <span>C</span>
                  <span>O</span>
                  <span>M</span>
                  <span>A</span>
                  <span>L</span>
                  <span>E</span>
                  <span>E</span></h2>
   
              
               <div class="package-section">
                  <div class="container">
                     <div class="package-inner">
                        <div class="row">
                           
                        <?php
              	
                  while($row=mysqli_fetch_assoc($result2)) 
                  {
                      component1($row['Destination_Name'],$row['Discription'], $row['Image']);
                  }
                  
                  

               ?>


               <div id="galle">
               <section class="galle" style="text-align:center">
                  <br>
                  <h2><span>G</span>
                     <span>A</span>
                     <span>L</span>
                     <span>L</span>
                     <span>E</span>
                     </h2>
      
                  
                  <div class="package-section">
                     <div class="container">
                        <div class="package-inner">
                           <div class="row">
                             
                                       
                        <?php
              	
                  while($row=mysqli_fetch_assoc($result3)) 
                  {
                      component1($row['Destination_Name'],$row['Discription'], $row['Image']);
                  }
                  
                  

               ?>




               <div id="nuwaraeliya">
                  <section class="nuwaraeliya" style="text-align:center">
                     <br>
                     <h2>
                        <span>N</span>
                           <span>U</span>
                           <span>W</span>
                           <span>A</span>
                           <span>R</span>
                           <span>A</span>
                           <span>E</span>
                           <span>L</span>
                           <span>I</span>
                           <span>Y</span>
                           <span>A</span>
                        </h2>
         
                     <div class="package-section">
                        <div class="container">
                           <div class="package-inner">
                              <div class="row">
                              <?php
              	
                  while($row=mysqli_fetch_assoc($result4)) 
                  {
                      component1($row['Destination_Name'],$row['Discription'], $row['Image']);
                  }
                  
                  

               ?>
                                 


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

                                 <?php
              	
                  while($row=mysqli_fetch_assoc($result5)) 
                  {
                      component1($row['Destination_Name'],$row['Discription'], $row['Image']);
                  }
                  
                  

               ?>
                                   




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