
<?php
/*
$sql_seller = $dbc->query("SELECT * FROM products WHERE seller_id = '$user' ORDER BY name DESC");
$row_seller = mysqli_fetch_row;
 
 
$seller_products = '';
 	while($row_seller = mysqli_fetch_array($sql_seller, MYSQLI_ASSOC)){
    $name = $row_seller['name'];
    $price = $row_seller['price'];
    $name = ucfirst($name);
 
    $seller_products.='<div class="col-md-4" style="color:grey;">';
    $seller_products.='<div style="border: 1px solid grey; border-radius: 5px; background-color:none;">';
    $seller_products.='Title:'.$name.'';
    $seller_products.='<p>Price: &euro; '.$price.'</p>';
    $seller_products.='';
    $seller_products.='';
    $seller_products.='';
    $seller_products.='<br />';
    $seller_products.='<input id="sell" class="btn btn-success" type="submit" name="sell" value="Sell">';
    $seller_products.='<input id="edit" class="btn btn-warning" type="submit" name="edit" value="Edit">';
    $seller_products.='<input id="delete" class="btn btn-danger" type="submit" name="delete" value="Delete">';
    $seller_products.='</div>';
    $seller_products.='</div>';
 	}
 	*/
 	
 	//cia padaryti modal kad butu galima edit ir kad butu galima delete reikia panaudoti is bad project

//style="border: 1px solid grey; border-radius: 5px;


?>

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
                            <li>
                                <p class="navbar-btn">
                                    <a href="#" class="btn btn-default" style="width:200px; border:none; background-color:none;"><span style="color:red;">2 </span><span class="glyphicon glyphicon-envelope" style="color:red"></span> Messages</a>
                                    <!-- jei yra zinuciu padaryti raudona spalva ir parodyti kiek neperskaitytu zinutciu yra
                                    cia dar irgi reikes susiziureti  kaip padaryti kad jos perskaitytos ar ne
                                    dar susigalvoti koks style bus zinuciu
                                    padaryti atskira zinuciu puslapi
                                    ir pradeti galvoti koks dizainas bus
                                    tai kad rodytu nuo ko ji
                                    laika
                                    tema
                                    kas per zinute
                                    ja galetum paskaityi 
                                    atsakyti 
                                    istrinti
                                    nu zodziu kaskas kaip email bet paprasciau-->
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
            
           
        </div>
    </div>
<?php include "../includes/footer.php"?>