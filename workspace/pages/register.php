<?php
require_once('../connect/connect.php'); 
//include "../scripts/overal_general_script.php";
include "../includes/header.php";
?>
<div style="margin-top:50px;">
    <form class="registration_form" id="registration_form" action="register.php" method="post" enctype="multipart/form-data"> 
		<div class="container">
            <div class="col-md-3"></div>
            <div class="col-md-6 loginForm">
        		<h3>Personal Infomation</h3>
        		<div class="form-group">
        		    <lable for="reg_username">Username:</lable>
        			<input id="reg_username" class="form-control" type="text" name="username">
        			<span id="username_error_message"></span>
    			</div>
        		<div class="form-group">
        		    <lable for="reg_f_name">First Name:</lable>
        			<input id="reg_f_name" class="form-control" type="text" name="f_name">
    				<span id="f_name_error_message"></span>
    			</div>
    			<div class="form-group">
    				<lable for="reg_l_name">Last Name:</lable>
    			    <input id="reg_l_name" class="form-control" type="text" name="l_name">
    				<span id="l_name_error_message"></span>
				</div>
    			<div class="form-group">
    				<lable for="reg_email">Email Address:</lable>
    			    <input id="reg_email" class="form-control" type="text" name="email">
    				<span id="email_error_message"></span>
				</div>
    			<div class="form-group">
    			    <lable for="reg_password">Password:</lable>
    				<input id="reg_password" class="form-control" type="password" name="password">
    				<span id="password_error_message"></span>
				</div>
    			<div class="form-group">
    				<lable>Confirm Password:</lable>
    				<input id="reg_re_password" class="form-control" type="password" name="re_password">
    				<span id="re_password_error_message"></span>
				</div>
    			<div class="form-group">
            		<input id="reg_submit" class="btn btn-success" type="submit" name="reg_submit" value="Register">
            	</div>
       		</div>
			<div class="col-md-3"></div>
		</div>
	</form>
</div>

<?php include "../includes/footer.php"?>