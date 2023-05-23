<?php

// session_unset();
// Remove SessionID from browser
if (isset($_COOKIE[session_name() ])) setcookie(session_name() , "", time() - 3600, "/");

// Clear session from globals
$_SESSION = array();

// Clear session from disk
session_destroy();

header("location: login.php");
?>