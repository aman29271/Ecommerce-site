<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {   header('location: products.php'); }
?>
<html>
    <head>
        <title>Html and css assignment</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/jquery-3.2.1.min.js" type="text/javascript"></script>
        <style>
            body{
    height:100%;
    width:100%;
    margin:0;
}

a{
    text-decoration:none;
    background-color: transparent;
    color: #ededed;
}

a:hover{
    text-decoration: none;
    color: #fff;
}
.content{
    min-height: 600px;
    background-color: #515151;
    background-size: cover;
    margin-bottom: 20px;
}
footer{
                 padding:10px 0px;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
                margin-top: 0%;
            }
            .content{
    min-height: 600px;
    background: url("img/intro-bg.png");
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
    background-color: rgba(0, 0, 0, 0.3); 
    color: #fff;
    padding-bottom: 30px;
}
.button{
    background-color: #c9302c;
   
    display: inline-block;
 
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
                        <a href="signup.php" class="button"><img src="img/signup1.jpg" alt="signup"/></a></div>
                        
                         </div>
        </div></center>
        
            
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>



