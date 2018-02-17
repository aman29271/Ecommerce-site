        <nav class="nav navbar-default navbar-fixed-top">   
        <div class="container">    
        <div class="navbar-header">     
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
                <span class="icon-bar"></span>             
                <span class="icon-bar"></span>        
                <span class="icon-bar"></span>        
            </button>          
            <a class="navbar-brand" href="index.php">E-store</a>     
        </div>     
        <div class="collapse navbar-collapse" id="myNavbar"> 
            <ul class="nav navbar-nav navbar-right">          
       <?php               
       if (isset($_SESSION['email'])) {?> 
                <li><div class="text-capitalize "><a><h4>WELCOME</h4><h4><?php $user_email= $_SESSION ['email'];

$name = "SELECT name FROM users WHERE email='$user_email'";
$name_query = mysqli_query($con, $name) or die(mysqli_error($con));
$name_array = mysqli_fetch_row($name_query);
echo $name_array[0];
?> </h4></a></div></li>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user">Settings</span></a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</span></a></li><?php
       }   
       else {                    
           ?>                    
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>    
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="aboutus.php"><span class="glyphicon glyphicon-log-in"></span> About Us</a></li>
                <li><a href="contactus.php"><span class="glyphicon glyphicon-log-in"></span> Contact Us</a></li>
                  <?php              
                  }               
                  ?>          
            </ul>        
        </div>    
    </div> 
    </nav> 
    




