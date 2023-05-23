 <?php
 include_once ("includes/head.php");
 ?>
 <div class="container mb-5">
    <h2>Forgot Password</h2>
    <form id="forgotPasswordForm" method="POST">
      <div class="form-group mb-5">
        <label for="email">Email ID:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <button type="submit" class="btn btn-primary">Send OTP</button>
    </form>
  </div>

  <script>
    $(document).ready(function () {
      $('#forgotPasswordForm').submit(function (event) {
        event.preventDefault(); // Prevent form submission

        var email = $('#email').val();

        // Send an AJAX request to the server to generate and send OTP
        $.ajax({
          url: '/mail-otp.php', // Replace with your server endpoint that handles sending OTP
          method: 'POST',
          data: {
            email: email
          },
          success: function (response) {
            // Handle success response
            alert('OTP sent to your email!');
            // Redirect to a page where user can enter the received OTP
            window.location.href = '/mail-otp.php'; // Replace with your OTP verification page URL
          },
          error: function (xhr, status, error) {
            // Handle error response
            alert('Failed to send OTP. Please try again later.');
          }
        });
      });
    });
  </script>

  <?php
  include_once ("includes/footer.php");
  include_once ("includes/end.php");
  ?>


