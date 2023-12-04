<?php
// Start or resume the current session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired location
header("Location: /scolarite/login/main.php");
exit();
?>
