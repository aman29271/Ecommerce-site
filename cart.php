<?php
 require 'includes/common.php';
 if(isset($_SESSION['email'])){
     
 } else {
     header('location:index.php');
}
$user_email =$_SESSION['email'];
$mysqli_query_user = "SELECT id FROM users WHERE email='$user_email'";
$mysqli_query_result = mysqli_query($con, $mysqli_query_user) or die(mysqli_error($con));
$mysqli_string= mysqli_fetch_row($mysqli_query_result);
$fetch_data = "SELECT i.id,i.name,i.price FROM items i INNER JOIN user_items ui WHERE ui.item_id =i.id  AND ui.user_id='$mysqli_string[0]' AND ui.status='Added to cart'";
$fetch_data_query = mysqli_query($con, $fetch_data) or die(mysqli_error($con));
?>
<html>
    <head>
        <title>cart Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/bootstrap/js/bootstrap.js" type="text/javascript"></script>
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
            .table-responsive{
                padding-top: 80px;
                width: 80%;
                margin: auto;
            }
            th{
                text-align: center;
            }
            tbody{
                text-align: center;
            }
            a:hover{
                text-decoration: none;
                color: #fff;
            }

            
        </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
       ?>
        <div class="table-responsive">
            <div class="jumbotron">
                <table class="table table-striped table-bordered ">
            <tbody>
                <tr><th>Item Number</th><th>Item Name</th><th>Price</th><th></th></tr>
           <?php $sum = 0;
           while($row= mysqli_fetch_array($fetch_data_query)){
                ?><tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo "<a href='cart_remove.php?id={$row['id']}' class='btn btn-warning'>Remove</a>" ?></td>
                </tr><?php $sum = $sum + $row['price']; }?>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td> Rs <?php 
 echo "$sum";
                    ?> </td>
                    <td><a href="success.php?order=confirmed" class="btn btn-primary">confirm Order</a></td>
                </tr>
            </tbody>
                </table>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
