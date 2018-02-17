<?php
require 'includes/common.php';
if (isset($_SESSION['email'])){
    
}
 else {
    header('location:index.php');
}


?>

<html>
    <head>
        <title>login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/jquery-3.2.1.min.js" type="text/javascript"></script>
        <style>
            .row_style{
                padding-top: 100px;
            }
            
            footer{
                 padding:10px 0px;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
                margin-top: 8%;
            }
            .jumbotron{
                width: 60%;
                margin: auto;
            }
            btn-primary{
                text-align: center;
            }
               footer{
      background-color: #000; 
      color:#fff;
      font-size: 20px;
}
a:hover{
                text-decoration: none;
                color: #fff;
            }

        </style>
    </head>
   
   
    <body>
       <?php
       include 'includes/header.php';
       ?>
    <?php    $user_email= $_SESSION ['email'];
$status_id = $_GET['order'];
$mysqli_query_user = "SELECT id FROM users WHERE email='$user_email'";
$mysqli_query_result = mysqli_query($con, $mysqli_query_user) or die(mysqli_error($con));
$mysqli_string= mysqli_fetch_row($mysqli_query_result);
$cart_inquiry = "SELECT id FROM user_items WHERE user_id=$mysqli_string[0] AND status='Added to cart' ";
$cart_inquiry_result = mysqli_query($con, $cart_inquiry) or die(mysqli_error($con));
$inquiry = mysqli_num_rows($cart_inquiry_result);
if ($inquiry == 0){ ?>
    <div class="jumbotron">
            <div class="container">
            <div class="row row_style">
                <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                          WARNING!  
                        </div>
                        <div class='panel-body'><h3>Add items to the cart first.</h3></div>   
                        <div class='panel-footer'></div>
                    </div>
                        
                </div>
                    
            </div>
                
            </div></div> 
    <?php }
 else { 
         $cart_addition_query = "UPDATE user_items SET status='Confirmed',confirm_time=CURRENT_TIMESTAMP WHERE user_id=$mysqli_string[0] AND status='Added to cart' ";
    $cart_query_execution = mysqli_query($con, $cart_addition_query) or die(mysqli_error($con));
        ?>

        <div class="jumbotron">
            <div class="container">
            <div class="row row_style">
                <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            SUCCESS
                        </div>
                        <div class='panel-body'><h3>Your Order has been placed successfully.</h3></div>   
                        <div class='panel-footer'></div>
                    </div>
                        
                </div>
                    
            </div>
                
            </div>   
        </div>
       <?php
 } ?>
 <?php
       include 'includes/footer.php';
        ?>
    </body>
</html>
