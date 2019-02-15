<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST[$_SESSION['str_un']]);
$password = mysqli_real_escape_string($con,$_POST[$_SESSION['str_pass']]);
$password_value= md5($password);
$mysqli_result = "SELECT id,email,password FROM users WHERE email='$email' ";
$mysqli_query_result = mysqli_query($con,$mysqli_result) or die(mysqli_error($con));
$mysqli_array = mysqli_fetch_array($mysqli_query_result);
$mysqli_check_rows= mysqli_num_rows($mysqli_query_result);
if($mysqli_check_rows==0)
{
echo 'You are not registered with us.';}
 else if ($mysqli_array['password'] == $password_value) {
     $_SESSION['email'] = $email;
   $_SESSION['id'] = mysqli_insert_id($con);
   header('location:products.php');
}
 else {
    echo 'You have entered wrong password.';
    
}

