<?php
 require 'includes/common.php';
 $msg = "";
 if(isset($_POST['setting_submit'])){
     if (isset($_SESSION['email'])){
    
} else {
    header('location:index.php');
}
$old_password = mysqli_real_escape_string($con,$_POST['old_password']);
$old_password_hash = md5($old_password);
$new_password = mysqli_real_escape_string($con,$_POST['new_password']);
$new_password_hash = md5($new_password);
$retype_password = mysqli_real_escape_string($con,$_POST['retype_new_password']);
$retype_password_hash = md5($retype_password);
$user_email= $_SESSION ['email'];
$mysqli_query_user = "SELECT id FROM users WHERE email='$user_email'";
$mysqli_query_result = mysqli_query($con, $mysqli_query_user) or die(mysqli_error($con));
$mysqli_string= mysqli_fetch_row($mysqli_query_result);
$password_match = "SELECT id,password  FROM `users` WHERE id = $mysqli_string[0] ";
$password_match_result = mysqli_query($con, $password_match) or die(mysqli_error($con));
$password_match_array = mysqli_fetch_array($password_match_result);
$update_settings = "UPDATE `users` SET `password` ='$new_password_hash' WHERE `users`.`id` = $mysqli_string[0] ";
if ($password_match_array['password'] == $old_password_hash )
    {
    if($new_password_hash == $retype_password_hash)
        {
                      if(    $update_query_result = mysqli_query($con, $update_settings) or die(mysqli_error($con)))
                          {       $msg = "Your password has been updated.";
       setcookie('pass_change', 'password_has_been_changed', time()+24*3600, '/');
    
                          } 
                            else {
        $msg = "Password has not successfully updated.";
                       }
        }
        else{$msg ="Password do not match.";
               
             }   

    } 
    else {$msg ="You have entered wrong password" ;
                
            }



 }
 ?>

<html>
    <head>
        <title>Settings Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/jquery-3.2.1.min.js" type="text/javascript"></script>
        <style>
            footer{
                margin-top: 20%;
                padding:10px 0px;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
            }
            form{
                margin-top: 10%;
            }
            a:hover{
                text-decoration: none;
                color: #fff;
            }
            .warning{
                color: red;
                background-color: #b2dba1;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?><form method="post" action="settings.php">
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 ">
                        <div class="jumbotron">
                        <h3><b>Change Password</b></h3>
                        <center><h4 class="warning"><b><?php if($msg!=""){echo $msg;}?></b></h4></center>
                        <div class="form-group">
                        <input type="password" placeholder="Old Password" class="form-control" name="old_password">   
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="new Password" class="form-control" name="new_password"> 
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Retype New Password" class="form-control" name="retype_new_password"> 
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="setting_submit">Change</button>
                        </div></div>
                </div>
            </div>
        </form>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

