<?php
 require 'includes/common.php';
 
 ?>
<html>
    <head>
        <title>Products page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="bootstrap/jquery-3.2.1.min.js" type="text/javascript"></script>
        <style>
            .jumbotron{
                margin-top: 80px;
                padding-top: 20px;
            }
            .caption{
                text-align: center;
            }
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
                color: #fff;
            }
            
           
           
        </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <?php
        include 'includes/check_if_added.php';
        ?>
        <div class="container ">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row">
                <div class="col-xs-3 ">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price:36000.00</p>
                    <?php  
                      if  (isset($_SESSION['email'])){
                                                
                                                $check = check_if_added_to_cart(1,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=1" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>
                      
                        </div>
                            
                    </div>
                     <div class="thumbnail">
                        <img src="img/18.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price:13000.00</p>
                            <?php  
                      if  (isset($_SESSION['email'])){
                                               
                                                $check = check_if_added_to_cart(5,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=5" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>
                            
                        </div>
                            
                    </div>
                     <div class="thumbnail">
                        <img src="img/22.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>H $ W</h3>
                            <p>Price:800.00</p>
                            <?php  
                      if  (isset($_SESSION['email'])){
                                              
                                                $check = check_if_added_to_cart(9,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=9" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>
                        </div>
                            
                    </div>
                     
                </div>
                                <div class="col-xs-3 ">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>Nicon DSLR</h3>
                            <p>Price:40000.00</p>
<?php  
                      if  (isset($_SESSION['email'])){
                                                
                                                $check = check_if_added_to_cart(2,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=2" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>                        </div>
                            
                    </div>
                     <div class="thumbnail">
                        <img src="img/19.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price:3000.00</p>
<?php  
                      if  (isset($_SESSION['email'])){
                                               
                                                $check = check_if_added_to_cart(6,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=6" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>                        </div>
                            
                    </div>
                     <div class="thumbnail">
                        <img src="img/23.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price:1000.00</p>
<?php  
                      if  (isset($_SESSION['email'])){
                                                
                                                $check = check_if_added_to_cart(10,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=10" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>                        </div>
                            
                    </div>
                     
                </div>
                                <div class="col-xs-3 ">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price:50000.00</p>
<?php  
                      if  (isset($_SESSION['email'])){
                                               
                                                $check = check_if_added_to_cart(3,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=3" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>                        </div>
                            
                    </div>
                     <div class="thumbnail">
                        <img src="img/20.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price:8000.00</p>
<?php  
                      if  (isset($_SESSION['email'])){
                                             
                                                $check = check_if_added_to_cart(7,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=7" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>                        </div>
                            
                    </div>
                     <div class="thumbnail">
                        <img src="img/24.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>john Zok</h3>
                            <p>Price:1500.00</p>
<?php  
                      if  (isset($_SESSION['email'])){
                                              
                                                $check = check_if_added_to_cart(11,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=11" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>                        </div>
                            
                    </div>
                     
                </div>
                                <div class="col-xs-3 ">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price:80000.00</p>
<?php  
                      if  (isset($_SESSION['email'])){
                                                
                                                $check = check_if_added_to_cart(4,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=4" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>                        </div>
                            
                    </div>
                     <div class="thumbnail">
                        <img src="img/21.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>Faber luba #111</h3>
                            <p>Price:18000.00</p>
<?php  
                      if  (isset($_SESSION['email'])){
                                                
                                                $check = check_if_added_to_cart(8,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=8" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>                        </div>
                            
                    </div>
                     <div class="thumbnail">
                        <img src="img/25.jpg" alt="image_responsive" class="img-responsive"/>
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price:1300.00</p>
<?php  
                      if  (isset($_SESSION['email'])){
                                           
                                                $check = check_if_added_to_cart(12,$_SESSION['email']);
                                               if ($check == 0){
                                                            ?><a href="cart_add.php?id=12" name="add" class="btn btn-primary btn-block">Add to cart</a><?php
                                                                }
                                                else{?><a href="" class="btn btn-primary btn-block disabled">Added to cart</a><?php
                                                }

                                          }
                                          else{
                                          ?><a href="login.php" class="btn btn-primary btn-block">Shop Now</a><?php
                                    }
                                    ?>                        </div>
                            
                    </div>
                     
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>