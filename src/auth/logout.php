<?php
session_start();

// Clear the "Remember Me" cookie by setting its expiration date to the past
if (isset($_COOKIE["remember_user"])) {
  setcookie("remember_user", "", time() - 3600, "/");
}

session_destroy();
session_start();
$_SESSION['logout-successful'] = 'logout-successful';
header('Location: /');
exit();
