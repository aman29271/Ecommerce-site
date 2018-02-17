<?php
require 'includes/common.php';
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
                          {       
                          echo 'Your password has been updated.';
                          } 
                            else {
        
                        echo 'Password has not successfully updated.';}
        }
        else{
                echo 'Password do not match.';
             }   

    } 
    else {
                echo 'You have entered wrong password';
            }


