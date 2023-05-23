<?php
include_once ("includes/head.php");
include_once ("includes/navbar.php");
?>
<section>
<div class="container mt-4">
  <h2>User Profile</h2>
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <!-- <img class="card-img-top" src="profile_photo.jpg" alt="Profile Photo"> -->
          <img class="card-img-top rounded-circle p-5" src="https://via.placeholder.com/300x300.jpg" alt=""Profile Photo">
          <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">Edit Profile</a>
            <a href="#" class="btn btn-danger">Delete</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
include_once ("includes/footer.php");
include_once ("includes/end.php");
?>
