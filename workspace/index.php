<?php
session_start();
require_once('connect/connect.php');
include 'scripts/session_script.php';


/*
$sql = $dbc->query("SELECT * FROM products");
$row = mysqli_fetch_row;


$products = '';
	while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
        $id =  $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $image = $row['images_path'];
        $name = ucfirst($name);
        
        $products .='<div class="col-md-4 serviceBox">';
        $products .='<div class="serviceBoxTitle">';
        $products .='<p>'.$id.'</p>';
        $products .='<p>'.$name.'</p>';
        $products .='<p>'.$price.'</p>';
        $products .='<img class="product_image" src="'. $image .'" alt="" />';
        $products .='</div>';
        $products .='</div>';
        
    }
*/

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Multi-Calendar</title>
        <link rel="icon" type="image/png" href="../source/images/calendar.png">
        <link href="../source/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="source/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <!--
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Multi-Calendar</a>
                </div>
                <ul class="nav navbar-nav">
                    <!--
                    <li><a href="../pages/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    -->
                    <!--
                    <li><a type="button" name="login" id="login" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    -->
                    <?php //echo $logout; ?>
                    <!--
                </ul>
            </div>
        </nav>
        -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Multi-Calendar</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php echo $logout; ?>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="modal fade" id="loginModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">  
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title"><i class="glyphicon glyphicon-log-in"></i> Login</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <lable for="log_username">Username:</lable>
        					<input id="log_username" type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <lable for="log_password">Password:</lable>
        					<input id="log_password" type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            
                            <button id="log_submit" type="submit" name="log_submit" class="btn btn-success"><i class="glyphicon glyphicon-log-in"></i> Login</button>
                        </div>
                        <div class="form-group">
                            <a class="btn btn-success" href="../pages/register.php"><i class="glyphicon glyphicon-user"></i> Create Account</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div style="margin-top:50px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="background-color:none;">
                        <?php //echo $products; ?>
                        <!--
                        <h1 class="aboutCalendar">Multi-Calendar is Calendar for pepoles who are working in multiple Jobs</h1>
                        -->
                        
                </div>
            </div>
        </div>
        
        
<!-- footer -->   
    <div class="footer" style="position: fixed; bottom: 0; width: 100%;">
    	<div class="col-md-12 footerTop">
    		<div class="col-md-4">
			    <img src="../source/images/calendar.png" height="80" width="150" style="margin:10px;" />
			</div>
			<div class="col-md-4">
				<h4><span>Contact Us</span></h4>
    		</div>
			<div class="col-md-4">
    			<a class="btn btn-lg bookBtn">Multi-Calendar</a>
    		</div>
    	</div>
	    <div class="col-md-12 footerBottom">
		    <p>&copy; 2017 Multi-Calendar | <a href="#">All Rights Reserved</a> | <a href="#">Privacy Statement</a> </p>
		</div>
	</div>
        
        
        <script src="../source/bootstrap/js/bootstrap.min.js"></script>
        <script src="../source/js/functions.js"></script>
    </body>
</html>