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
                <!-- content -->
            </div>
           
        </div>
    </div>
<?php include "../includes/footer.php"?>