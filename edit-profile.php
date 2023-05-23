<?php
require_once ("util/verify-login.php");
include_once ("includes/head.php");
include_once ("includes/navbar.php");

if(ISSET($_GET["submit"])){

if((!ISSET($_GET["up_user_name"])) && (!ISSET($_GET["up_user_email"]))){
  echo "Unknown Error!";
  exit();
}else{

// Database Connection Code :: Start
try{
  $connection = new PDO("mysql:host=localhost;dbname=bs5", 'admin', 'admin');
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // echo "Connection successfully established";

}catch(PDOException $ex_msg){
  echo "Error: ". $ex_msg->getMessage();
}
// Database Connection Code :: End

$user_name = $_GET["up_user_name"];
$user_email = $_GET["up_user_email"];


$sth = $connection->prepare("UPDATE `users` SET `user_name`=:db_user_name, `user_email`=:db_user_email WHERE `user_email`= '{$user_email}'");

$sth->bindParam(":db_user_name", $user_name);
$sth->bindParam(":db_user_email", $user_email);

$sth->execute();

$countUpdates = $sth->rowCount();

if ($countUpdates == 1) {

echo "Profile Updated";
header("Location: log-out.php");

} else if($countUpdates == 0){

echo "No new changes detected in Profile";

} else {

echo "Endpoint Failure #iGERR74";

exit();

}
}
}

?>
<section>
  <div class="container mt-4">
    <h2>User Profile</h2>
    <div class="row m-5">
      <div class="col-md-6">
        <form id="updateProfileForm" method="GET">
          <div class="form-group m-3">
            <label for="fullName">Full Name:</label>
            <input type="text" class="form-control" id="fullName" value="<?= $user_profile->user_name ?>" name="up_user_name" required>
          </div>
          <div class="form-group m-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" value="<?= $user_profile->user_email ?>" name="up_user_email">
          </div>
          <button type="submit" class="btn btn-primary mx-3" name="submit" value="all">Save Profile</button>
        </form>
      </div>
    </div>
  </div>
</section>


<?php
include_once ("includes/footer.php");
include_once ("includes/end.php");
?>