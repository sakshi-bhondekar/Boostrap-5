<?php

// DB Connection :: Start
try{
	$connection = new PDO("mysql:host=localhost;dbname=bs5", 'admin', 'admin');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connection successfully established";

}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}
// DB Connection :: End

$sql_query = ("DELETE FROM users WHERE user_email = '{$_GET["email"]}' ");

$connection->exec($sql_query);

echo "Record Deleted";

header("Location: log-out.php");