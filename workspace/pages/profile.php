<?php
require_once('../connect/connect.php');
include "../includes/header.php";

?>
<style>

  .sidebar-nav .navbar .navbar-collapse {
    padding: 0;
    max-height: none;
    background-color: white;
  }
  .sidebar-nav .navbar ul {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
  }
  
  .change{
        font-size: 20px;
        color: silver;
    }

</style>
    <div style="margin-top:50px;">
        <?php include "../includes/sidebar.php"; ?>
               <nav class="navbar navbar-default" style="border:1px solid grey; background-color:white;">
                    <div class="container">
                        <ul class="nav navbar-nav">
                            <li>
                                <p class="navbar-btn">
                                    <a href="../pages/profile.php" class="btn btn-default" style="width:200px; border:none; background-color:none;"><span class="glyphicon glyphicon-user"> Profile</a>
                                </p>
                            </li>
                            <?php
                            
                            ?>
                            
                            <li>
                                <p class="navbar-btn">
                                    <a href="../pages/messages.php" class="btn btn-default" style="width:200px; border:none; background-color:none;"><span style="color:red;">2 </span><span class="glyphicon glyphicon-envelope" style="color:red"></span> Messages</a>
                                </p>
                            </li>
                            <li>
                                <p class="navbar-btn">
                                    <a href="#" class="btn btn-default" style="width:200px; border:none; background-color:none;"><span class="glyphicon glyphicon-cog"> Setings</a>
                                </p>
                            </li>
                            <li>
                                <p class="navbar-btn">
                                    <a href="../scripts/logout_script.php" class="btn btn-default" style="width:200px; border:none; background-color:none;"><span class="glyphicon glyphicon-log-out"> Logout</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </nav>
                
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="progress">
                                <a href="#"><div class="progress-bar progress-bar-success" role="progressbar" style="width:20%">
                                    Details
                                </div></a>
                                <div class="progress-bar progress-bar-warning" role="progressbar" style="width:20%">
                                    Image
                                </div>
                                <div class="progress-bar progress-bar-warning" role="progressbar" style="width:20%">
                                    Company
                                </div>
                                <div class="progress-bar progress-bar-warning" role="progressbar" style="width:20%">
                                    Address 
                                </div>
                                <div class="progress-bar progress-bar-warning" role="progressbar" style="width:20%">
                                    About You
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <form>
                        <div class="form-group">
            				<lable for="company">Company:</lable>
            				<select id="company" class="form-control" name="company">
            				    <option value="" disabled selected>Select Company</option>
        						<?php echo $company_list; ?>
        						<!--
        						<option id="add_new_company" value="add_new_company">Other</option>
        						-->
            				</select>
            				<span id="company_error_message"></span>
            			</div>
            			<div class="form-group">
            			    <!--
            			    <div id="containe"></div>
            			    <button id="add_new_company" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
            			     cia reikes padaryti kaip paspaudi kad atsirastu input -->
            			    <div class="input_fields_wrap">
                                <button class="btn btn-default add_field_button"><span class="glyphicon glyphicon-plus"></span> Comapany</button>
                                <div></div>
                            </div>
            			</div>
                    </form>
                </div>
                
                <script>
                    $(document).ready(function() {
                    var max_fields      = 10; //maximum input boxes allowed
                    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                    var add_button      = $(".add_field_button"); //Add button ID
                    
                    var x = 1; //initlal text box count
                    $(add_button).click(function(e){ //on add input button click
                        e.preventDefault();
                        if(x < max_fields){ //max input box allowed
                            x++; //text box increment
                            $(wrapper).append('<div><input class="form-control" type="text" name="mytext[]"/><a href="#" class="remove_field"><span class="glyphicon glyphicon-remove" style="color:red;"></span></a></div>'); //add input box
                        }
                    });
                    
                    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                        e.preventDefault(); $(this).parent('div').remove(); x--;
                    })
                });
                </script>
                
            
            </div>
           
        </div>
    </div>
<?php include "../includes/footer.php"?>