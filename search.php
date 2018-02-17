<?php
require 'includes/common.php';
if (isset($_SESSION['email'])){
    
}
 else {
    header('location:index.php');
}


?><html>
    <head>
        <title>Search Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="bootstrap/jquery-3.2.1.min.js" type="text/javascript"></script>

        <style>
            footer{
                padding: 10px 0px;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
                margin-top: 20%;
            }
            a:hover{
                text-decoration: none;
            }
            .row_style{
                padding-top: 100px;
            }
            .form-group{
                display: block;
            }
            .img_height{
                height: 100px;
            }
            .row_border{
                
                padding-left: 10px; 
            }
            h3{
                display: block;
                background-color: #2aabd2;
                border-radius: 5px;
                color: #101010;
                margin-top: 0px;
            }
            .form-align{
                text-align: center;
            }
            .form_class{
                background-color: #999999;
                border-radius: 5px;
                
            }
            
        </style>
        
    </head>
    <body>
        <?php
        require 'includes/header.php';
        ?>
        <?php
        include 'includes/check_if_added.php';
        ?>
        <div class="container">
            
           
                            
        <div class="row row_border row_style">
        <div class="col-xs-2">    
           
                <form method="post" action="" class="form_class">
                    
                        
                            <div class="text-center"><h3>TYPE</h3></div>
                            <div class="form-group form-align">
                                
                                <input type="checkbox" name="camera" id="camera" ><label for="camera">cameras</label>
                            </div>
                            <div class="form-group form-align">
                                
                                <input type="checkbox" name="watch" id="watch" ><label for="watch" >Watches</label>
                            </div>
                            <div class="form-group form-align">
                                
                                <input type="checkbox" name="t-shirts" id="t-shirts"><label for="t-shirts">T-shirts</label>
                            </div>
                            <div class="text-center"><h3>PRICE</h3></div>
                            <div class="form-group form-align">
                                
                                <input type="checkbox" name="less_than_1000" id="less_than_1000" ><label for="less_than_1000" >less than 1000</label>
                            </div>
                            <div class="form-group form-align">
                                
                                <input type="checkbox" name="less_than_2000" id="less_than_2000" ><label for="less_than_2000">less than 2000</label>
                            </div>
                            <div class="form-group form-align">
                                
                                <input type="checkbox" name="less_than_3000" id="less_than_3000" ><label for="less_than_3000">less than 3000</label>
                            </div>
                            <div class="form-group form-align">
                                
                                <input type="checkbox" name="less_than_5000" id="less_than_5000" ><label for="less_than_5000">less than 5000</label>
                            </div>
                            <div class="form-group form-align">
                                
                                <input type="checkbox" name="less_than_10000" id="less_than_10000" ><label for="less_than_10000">less than 10000</label>
                            </div>
                            <div class="form-group form-align">
                                
                                <input type="checkbox" name="less_than_30000" id="less_than_30000" ><label for="less_than_30000">less than 30000</label>
                            </div>
                            <div class="form-group form-align">
                                
                                <input type="checkbox" name="less_than_60000" id="less_than_60000" ><label for="less_than_60000">less than 60000</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><h5><b>Filter</b></h5></button>
                        
                    
                </form>
           
        </div>
            <div class=" col-xs-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center><h2>Showing Result of <?php ?> </h2></center>
                    </div>
                 <div class="thumbnail">  
                        <img src=<?php echo $row['location']?> alt="img_responsive" class="img-responsive">
                        <div class="caption">
                            <div class="text-center">
                                <h2><?php echo $row['name']?></h2>
                                <h4>Price:<?php echo $row['price']?></h4>
                        <?php if (isset($_session['email'])){
                            $check = check_if_added_to_cart($row['id'],$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=1" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }
                        }  
 else { ?>
     <a href="login.php">Shop Now</a> <?php
 } ?>
                            </div>
                            
                        </div></div></div>
                    
                </div>
            

        </div> 
        </div>
        <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>



