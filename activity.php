<?php
 require_once("util/verify-login.php");
?>
<br>
<br>
<br>
<center><a href="profile.php">User Profile</a></center>
<br>
<center><a href="delete.php?email=<?= $user_profile->user_email ?>">Delete Account</a></center>
<br>
<center><a href="log-out.php">Logout Account</a></center>
