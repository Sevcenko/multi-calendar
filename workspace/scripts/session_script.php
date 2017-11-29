<?php
if(isset($_SESSION["user"])){ 
    
    $user = $_SESSION['user'];
    $user = ucfirst($user);
    
    $logout = '';

    $logout .= '<li>';
    $logout .= '<a class="btn navButtons logedIn" style="color: white;" href="../pages/profile.php" title="Profile">Hello,<i class="loginUser"> '. $user.'</i></a>';
    // cia paskiau bus galima pakeisti kad butu dropdown menu
    $logout .= '</li>';
    $logout .= '<li>';
    $logout .= '<a class="btn navButtons logout" href="../scripts/logout_script.php" title="Logout"><span class="glyphicon glyphicon-log-out logoutUser"> Logout</span></a>';
    $logout .= '</li>';
    
}else{
    $logout .= '<li><a type="button" href="../pages/register.php"><span class="glyphicon glyphicon-pencil"></span> Register</a></li>';
    $logout .= '<li><a type="button" name="login" id="login" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
}
?>