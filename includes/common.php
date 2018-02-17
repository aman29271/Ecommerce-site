<?php
$con= mysqli_connect("localhost", "root", "AMAN29271", "store") or
        die(mysqli_error($con));
ini_set('session.use_only_cookies', 'TRUE');
ini_set('session.use_trans_id', 'FALSE');
ini_set('session_cookie_lifetime', 120);
session_start();



