<?php
require_once "global.php";
generateHeader("Log Out");

// Destroy the session data
session_unset();  // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the login page after logout
header("Location: login.php");
exit; // Ensure no further code is executed after redirect
?>