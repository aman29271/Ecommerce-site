<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {   header('location: products.php'); }
?>
<html>
    <head>
        <title>Html and css assignment</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/jquery-3.2.1.min.js" type="text/javascript"></script>
        <style>
            
.content{
    min-height: 600px;
    background: url("img/intro-bg_1_.jpg");
    background-size: cover;
    margin-bottom: 20px;
}
.banner_image{
    width: 80%;
    padding-top: 150px;
    
    
    margin: auto;
}
.inner_banner_image{
    width: 60%;
    margin: auto;
    padding-top: 20px;
    background-color: rgba(0, 0, 0, 0.7); 
    color: #fff;
    padding-bottom: 30px;
}
.button{
    background-color: #c9302c;
    font-size: 18px;
    display: inline-block;
    border-radius: 6px;
    padding-left: 20px;
    padding-right: 20px;
     
  
}


        </style>
    </head>
    <body>
        <?php 
        include 'includes/header.php';
        ?>
         
    <center>
        <div class="content">
            <div class="banner_image">
                <div class="inner_banner_image"> <h1>We sell lifestyle</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <a href="index1.php" class="button"><h4>Shop Now</h4></a></div>
                         </div>
        </div></center>
    <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="signup.php" class="thumbnail">
                    <img src="watch.jpg" alt="img_responsive" >
                    <div class="caption">
                        <center>     <h2>watches</h2>
                        <p>
                            Original watches from the best brands.
                        </p></center>
                    </div>
               </a>
              </div>  
            <div class="col-lg-4">
                <a href="signup.php" class="thumbnail">
                    <img src="shirt.jpg" alt="img_responsive" >
                    <div class="caption">
                        <center>   <h2>Shirts</h2>
                        <p>
                            All brand at low cost.
                        </p></center>
                    </div>
                </a>
            </div>
                
            <div class="col-lg-4">
                <a href="signup.php" class="thumbnail">
                    <img src="camera.jpg" alt="img_responsive" >
                    <div class="caption">
                        <center>     <h2>Cameras</h2>
                        <p>
                            Choose among the best available in the world."
                        </p></center>
                    </div>
                </a>
                </div>
            </div>
            </div>
    
        <footer>
            <div class="container">
                <p align="center">
                    Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
                </p>
                
            </div>
        </footer>
    </body>
</html>
<?php


