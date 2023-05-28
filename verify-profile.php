<?php
date_default_timezone_set("Asia/Kolkata");

$validate_db_level = false;
$dt = date('Y-m-d H:i:s', time());
$process_verification = false;
$check_user_exists = false;
$otp_matched = false;
$is_verified = 0;

if(!ISSET($_COOKIE["token"])){
  header("HTTP/1.1 403 Forbidden");
  echo '<center style="color:red;">Forbidden</center>';
  header("refresh:5; url=login.php");
  exit();
}else{
  $validate_db_level = true;
}

if($validate_db_level){
  // Database Connection Code :: Start
  try{
    $connection = new PDO("mysql:host=localhost;dbname=bs5", 'admin', 'admin');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "Connection successfully established";
  
  }catch(PDOException $ex_msg){
    echo "Error: ". $ex_msg->getMessage();
  }
  // Database Connection Code :: End

  $sth = $connection->prepare("SELECT * FROM `user_verification` WHERE `token` = '{$_COOKIE['token']}' AND `verification_expires` >= '{$dt}' AND is_verified = 0");
  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth->execute();
  $count = $sth->rowCount();

  if($count != 1){
    header("HTTP/1.1 403 Forbidden");
    echo '<center style="color:red;">Token Expired</center>';
    exit();
  }else{
    $process_verification = true;

    $sth1 = $connection->prepare("SELECT * FROM `user_verification` WHERE `token` = '{$_COOKIE['token']}'");
    $sth1->setFetchMode(PDO:: FETCH_OBJ);
    $sth1->execute();
    $data = $sth1->fetch();

    $db_email = $data->email;
    $db_verification_expires = $data->verification_expires;
    $db_otp = $data->otp;

    $sth2 = $connection->prepare("SELECT * FROM `users` WHERE `user_email` = '{$db_email}' AND is_verified = 0");
    $sth2->setFetchMode(PDO:: FETCH_OBJ);
    $sth2->execute();
    $count2 = $sth2->rowCount();

    if($count2 == 1){
      $check_user_exists = true;
    }else{
      $check_user_exists = false;
    }

  } // Nested IF Block Ends Here

}else{
  echo '<center style="color:red;">Unknown Error!</center>';
  exit();
} // Main IF Block Ends Here


if(!$check_user_exists){
    header("HTTP/1.1 403 Forbidden");
    echo '<center style="color:red;">User Does not Exists</center>';
    exit();
}else{

  if(ISSET($_GET["submit"])){
  $input_otp = $_GET["otp"];

  if($input_otp == $db_otp){
    $otp_matched = true;
    $is_verified = 1;
  }else{
    header("HTTP/1.1 403 Forbidden");
    echo '<center style="color:red;">OTP Does not Matched</center>';
    exit();
  }

  if($otp_matched){

    $sth = $connection->prepare("UPDATE `users` SET `is_verified`=:db_is_verified WHERE `user_email`= '{$db_email}'");

    $sth->bindParam(":db_is_verified", $is_verified);

    $sth->execute();

    $countUpdates = $sth->rowCount();

    if ($countUpdates == 1) {

      $sql_query = ("DELETE FROM `user_verification` WHERE email = '{$db_email}'");
      $connection->exec($sql_query);

    echo '<center style="color:green;">Profile Updated</center>';
    header("refresh:5; url=login.php");

    } else if($countUpdates == 0){

    echo '<center style="color:blue;">Unable to verify profile due to no new data available to update</center>';
    
  } else {
  
    header("HTTP/1.1 403 Forbidden");
    echo "Endpoint Failure";
  
    exit();
    }

  }

}

}

include_once ("includes/head.php");
include_once ("includes/navbar.php");
?>
<!-- Register Page :: Start -->
<section class="vh-80" style="background-color: #eee;">
  <div class="container h-80">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Verify Profile</p>

                <?php 
                if($process_verification){
                  echo '
                  <form class="mx-1 mx-md-4">
                 <!-- <form class="mx-1 mx-md-4"> -->

              

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" name="user_email" value="'.$db_email.'" disabled/>
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4cd" class="form-control" name="otp"/>
                      <label class="form-label" for="form3Example4cd">OTP</label>
                    </div>
                  </div>

                  <!--
                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" id="form2Example3c"/>
                    <label class="form-check-label " for="form2Example3">
                      I agree all statements in <a class="active" href="terms-condition.php">Terms of service</a>
                    </label>
                  </div>
                  -->

                  <div class="d-flex justify-content-center mx-4 my-1 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" name="submit" value="verify">Verify Profile</button>
                  </div>

                  <div class=" text-lg-start mt-4 pt-2">
                        <!-- <button type="button active" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;" href="profile.php">Login</button> -->
                        <p class="small fw-bold mt-2 pt-1 mb-0 text-center">Did not Receive OTP ? <a
                                class="link-danger active" href="#">Resend OTP</a></p>
                    </div>
                  
                </form>
                  ';
                }else{
                  echo '<center style="color:red;">Error!</center>';
                }
                ?>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="assets/img/img2.webp" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Register Page :: End -->

<?php
include_once ("includes/footer.php");
include_once ("includes/end.php");
?>