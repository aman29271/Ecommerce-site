<?php

function check_if_added_to_cart($para2, $para1){
    $con = mysqli_connect("localhost", "root", "AMAN29271", "store") or die(mysqli_error($con));
    $checking = "SELECT ui.id,u.name FROM user_items ui INNER JOIN users u  ON ui.user_id=u.id WHERE u.email='$para1' AND ui.item_id='$para2' AND ui.status='Added to cart'";
    $query_execution = mysqli_query($con, $checking) or die(mysqli_error($con));
    $num_rows = mysqli_num_rows($query_execution);
    if ($num_rows >=1)
    {
        return 1;
    }
 else {
        return 0 ;
    }
}

