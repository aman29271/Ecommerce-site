<?php
$con = mysqli_connect("localhost","id4211891_root","aman29271","id4211891_store	") 
        or die(mysqli_error($con));
session_start();
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

$user_registration_query = "insert into users (name,email,password,contact,city,address) values ('$name','$email','$password_value','$contact','$city','$address')";
$user_registration_submit = mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
  $_session['email'] =$email;
  $_session['id'] = mysqli_insert_id($con);
  echo 'User Successfully registered.';;}
 else {
    echo 'User already registered.';
}
