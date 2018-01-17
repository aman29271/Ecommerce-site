<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {   header('location: products.php'); };
$msg="";
if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($con,$_POST[$_SESSION['str_un']]);
$password = mysqli_real_escape_string($con,$_POST[$_SESSION['str_pass']]);
$password_value= md5($password);
$mysqli_result = "SELECT id,email,password FROM users WHERE email='$email' ";
$mysqli_query_result = mysqli_query($con,$mysqli_result) or die(mysqli_error($con));
$mysqli_array = mysqli_fetch_array($mysqli_query_result);
$mysqli_check_rows= mysqli_num_rows($mysqli_query_result);
if($mysqli_check_rows==0)
{$msg="You are not registered with us.";}
 else if ($mysqli_array['password'] == $password_value) {
     $_SESSION['email'] = $email;
   $_SESSION['id'] = mysqli_insert_id($con);
   header('location:products.php');
}
 else {
     $msg = "You have entered wrong password.";
   
    
}}
?>


<html>
    <head>
        <title>login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
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
               }a:hover{
                   text-decoration: none;
               }
               .para{
                   font-size: 15px;
               }
               .warning{
                   color: red;
               }
                       </style>
    </head>
   
   
    <body>
       <?php
       include 'includes/header.php';
       ?>
        <div class="jumbotron"><div class="container">
            <div class="row row_style">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Login Here
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="post" action="login.php">
                            <div class='row'>
                                <div class='col-lg-12'>
                                    <div class='form-group'>
                                        <h5 class="warning"><?php if($msg!= ""){echo $msg;}?></h5>
                                        <label for='email'>Email</label>
                                        <input type='email' id='email' class='form-control' autofocus="autofocus" name="<?php
       $str = "qwertyuiopasdfghjklzxcvbnm1234567890";    
       $str = str_shuffle($str);
       $str = substr($str, 0, 10);
       $_SESSION['str_un'] = $str;
       echo $_SESSION['str_un'] ?>
" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class='form-group'>
                                        <label for='password'>Password</label>
                                        <input type='password' id='password' class="form-control" name="<?php
       $str = "qwertyuiopasdfghjklzxcvbnm1234567890";    
       $str = str_shuffle($str);
       $str= substr($str, 10, 10);
       $_SESSION['str_pass'] = $str;
       echo $_SESSION['str_pass'] ?>
" required="" pattern=".{4,}">
                                    </div>
                                    <p class="text-right "><b><a href="forget_password.php" class="text-danger para">Forget password</a></b></p>
                                    <button type='submit' class='btn btn-primary btn-block' name="submit">Login</button>
                                        
                                </div>
                            </div>
                                
                        </form>
                        </div>
                        <div class="panel-footer">
                            <b>Don't have an account?    </b>
                            <a href="signup.php"><b>Register</b></a>  
                            </div>
                    
                    </div>
                
                </div>
            </div>
            </div></div>
        <?php
       include 'includes/footer.php';
        ?>
    </body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

