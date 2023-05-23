<?php
require_once ("util/verify-login.php");
include_once ("includes/head.php");
include_once ("includes/navbar.php");
?>
<section>
  <div class="container mt-4">
    <h2>User Profile</h2>
    <div class="row m-5">
      <div class="col-md-6">
        <form id="profileForm" method="POST">
          <div class="form-group m-3">
            <label for="fullName">Full Name:</label>
            <input type="text" class="form-control" id="fullName" value="<?= $user_profile->user_name ?>" required>
          </div>
          <div class="form-group m-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" value="<?= $user_profile->user_email ?>">
          </div>
          <button type="submit" class="btn btn-primary mx-3">Save Profile</button>
        </form>
      </div>
    </div>
  </div>
</section>


<?php
include_once ("includes/footer.php");
include_once ("includes/end.php");
?>