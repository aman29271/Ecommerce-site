<?php
include 'includes/common.php';
$user_email= $_SESSION ['email'];
$item_id = $_GET['id'];
$mysqli_query_user = "SELECT id FROM users WHERE email='$user_email'";
$mysqli_query_result = mysqli_query($con, $mysqli_query_user) or die(mysqli_error($con));
$mysqli_string= mysqli_fetch_row($mysqli_query_result);
$cart_addition_query = "INSERT INTO user_items (user_id,item_id,status,reg_time) VALUES ('$mysqli_string[0]','$item_id','Added to cart',CURRENT_TIMESTAMP) ";
$cart_query_execution = mysqli_query($con, $cart_addition_query) or die(mysqli_error($con));
echo 'Added to cart successfully.';
header('location:products.php');
