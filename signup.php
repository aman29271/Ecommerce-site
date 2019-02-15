<?php
 require 'includes/common.php';
 if (isset($_SESSION['email'])) {   header('location: products.php'); }
 else {
     echo 'Hello Guest.';
};
$msg = "";
if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$password_value= md5($password);
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$user_email_query="SELECT id,email,password FROM users WHERE email ='$email'";
$user_email_query_execution= mysqli_query($con, $user_email_query) or die(mysqli_error($con));
$user_num_row = mysqli_num_rows($user_email_query_execution);
if ($user_num_row ==0){
$msg ="User Successfully registered.";
$user_registration_query = "insert into users (name,email,password,contact,city,address) values ('$name','$email','$password_value','$contact','$city','$address')";
$user_registration_submit = mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
  $_session['email'] =$email;
  $_session['id'] = mysqli_insert_id($con);
  ;}
 else {
     $msg = "User already registered.";
   
}}
 ?>
<html>
    <head>
        <title>Signup Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/jquery-3.2.1.min.js" type="text/javascript"></script>
        <style>
            form{
                padding-top: 50px;
                
            }
            h1{
                text-align: center;
            }
            footer{
                padding:10px 0px;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
                margin-top:5%;
            }
            .jumbotron{
                width: 60%;
                margin:auto;
            }
            .jumbo{
                
                padding-left: 10px;
                padding-right: 10px;
                width: 100%
            }
            img
            {margin-top: 20px;
                height: 900px;
                padding-top: 30px;
                width: 900px;
                padding-right: 0px;
            }
            .col-xs-8{
                padding-right: 0px;
            }
            .col-xs-4{
                padding-left: 0px;
            }
            .color23{
                color: red;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php 
         include 'includes/header.php';
         ?>
             <div class="row">
                 <div class=" col-xs-8 ">
                     <img src="img/Banner.png" alt="img-responsive" class='img-responsive' />
                 </div>
                    <div class='col-xs-4'>
                        <form method="post" action="signup.php">
                     <div class="jumbotron jumbo"><center><h2>SIGN UP </h2></center>
                     <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required="">
            </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required="">
                </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" class="form-control" required="" pattern=".{6,}">
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="tel" id="contact" name="contact" class="form-control" required="" pattern=".{10,}">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" class="form-control" required="">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control" required="">
            </div>
                         <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button></div>
                         <h3 class="color23"><?php if($msg !="") {echo "$msg";} else{} ; ?></h3>
                    </form>  </div></div>   
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
