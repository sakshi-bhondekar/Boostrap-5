<?php
// Start the Session
session_start();

$getEmail = $_POST["auth_email"];
$getPassword = $_POST["auth_password"];


// DB Connection :: Start
try{
	$connection = new PDO("mysql:host=localhost;dbname=bs5", 'admin', 'admin');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connection successfully established";

}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}
// DB Connection :: End


$sth = $connection->prepare("SELECT * FROM `users` WHERE `user_email` = '{$getEmail}' AND `user_password` = '{$getPassword}'");

$sth->setFetchMode(PDO:: FETCH_OBJ);
$sth->execute();
$count = $sth->rowCount();

if($count > 0){
    $_SESSION["auth_status"] = true;
    header("Location: activity.php");
}else{
    $_SESSION["auth_status"] = false;
    header("Location: activity.php");
}
?>