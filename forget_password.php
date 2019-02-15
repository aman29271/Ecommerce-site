<?php

?>
<html>
    <head>
        <title>forget password</title>
        <link href="bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <style>
            .col-style{
                padding-top: 100px;
            }
            footer{
      background-color: #000; 
      color:#fff;   
      font-size:14px; 
 
}
        </style>
    </head>
    <body>
        <?php require 'includes/header.php';?>
        <div class="container">
            <div class=" col-xs-offset-4 col-xs-4 col-style">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3>Forget password</h3></div>
                            <div class="panel-body">
                                <form action="forget_password.php" method="post">
                                    <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-warning">Request password
                                    </button>
                                </form>
                            </div>
                    <div class="panel-footer"></div></div>
            </div>
            
        </div>
        <?php require 'includes/footer.php';?>
    </body>
</html>