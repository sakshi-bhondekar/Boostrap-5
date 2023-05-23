<?php
// Start the Session
session_start();

if (!ISSET($_SESSION["auth_status"])){
    header("Location: login.php");
    exit();
}

if(!$_SESSION["auth_status"]){
    echo "You must login first, or check your login id or password";
    header("refresh:5; url= login.php");
}else{
    echo "User login was successful, now user can access all the pages that needs login";

    $user_profile = $_SESSION["user_profile"];
}
?>
<center><a href="delete.php?email=<?= $user_profile->user_email ?>">Delete Account</a></center>
