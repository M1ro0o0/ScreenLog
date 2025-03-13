<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: PHP/home.php"); // Redirect to home page if logged in
    exit;
} else {
    header("Location: PHP/login.php"); // Redirect to login page if not logged in
    exit;
}
?>