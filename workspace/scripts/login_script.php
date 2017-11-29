<?php 
require_once('../connect/connect.php');
session_start();

$username = $_POST["username"];  
$password = $_POST["password"];  

$sql = "SELECT * FROM users WHERE username='$username' && password='$password' ";
$result = $dbc->query($sql);

if(!mysqli_fetch_row($result)){
    echo 0;
}
else{
    $_SESSION['user'] = $_POST['username'];
    echo 1;
}

?>