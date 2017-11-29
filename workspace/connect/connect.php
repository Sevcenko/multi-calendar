<?php
    $host = "localhost";
    $user = "pagerintas";                     
    $pass = "";                                  
    $db = "multiCalendar";                                  
    $port = 3306;                               
    
    $dbc = mysqli_connect($host, $user, $pass, $db, $port)or die(mysqli_error());
    
?>