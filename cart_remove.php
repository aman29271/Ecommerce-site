<?php
include 'includes/common.php';
$user_email= $_SESSION ['email'];
$item_id = $_GET['id'];
$mysqli_query_user = "SELECT id FROM users WHERE email='$user_email'";
$mysqli_query_result = mysqli_query($con, $mysqli_query_user) or die(mysqli_error($con));
$mysqli_string= mysqli_fetch_row($mysqli_query_result);
$cart_addition_query = "DELETE FROM user_items WHERE user_id='$mysqli_string[0]' AND item_id='$item_id'AND status='Added to cart'";
$cart_query_execution = mysqli_query($con, $cart_addition_query) or die(mysqli_error($con));
echo 'Items removed successfully';
header('location:cart.php');