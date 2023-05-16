<?php
include_once ("includes/head.php");
include_once ("includes/navbar.php");
?>

<div class="container">
    <h2>User Profile</h2>
    <div class="row">
      <div class="col-md-6">
        <form id="profileForm" method="POST">
          <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" readonly>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" readonly>
          </div>
          <button type="submit" class="btn btn-primary">Save Profile</button>
        </form>
      </div>
    </div>
  </div>
  <script>
     $(document).ready(function () {
        // Populate the form with user data
        var userData = {
          fullName: 'John Doe', // Replace with user's full name retrieved from the server
          email: 'johndoe@example.com', // Replace with user's email retrieved from the server
          password: '********' // Replace with user's password retrieved from the server
        };

        $('#fullName').val(userData.fullName);
        $('#email').val(userData.email);
        $('#password').val(userData.password);

        $('#profileForm').submit(function (event) {
          event.preventDefault(); // Prevent form submission

           // Get the updated values from the form
                  var updatedFullName = $('#fullName').val();

                  // Send an AJAX request to the server to update the profile
                  $.ajax({
                    url: '/update-profile', // Replace with your server endpoint that handles profile updates
                    method: 'POST',
                    data: {
                      fullName: updatedFullName
                    },
                    success: function (response) {
                      // Handle success response
                      alert('Profile updated successfully!');
                    },
                    error: function (xhr, status, error) {
                      // Handle error response
                      alert('Failed to update profile. Please try again later.');
                    }
                  });
                });
              });
  </script>

  <?php
  include_once ("includes/footer.php");
  include_once ("includes/end.php");
  ?>
