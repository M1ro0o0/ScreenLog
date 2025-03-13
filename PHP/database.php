<?php
// Database configuration
define("DB_HOST", "localhost");
define("DB_USER", "ScreenLogCon"); // Change if using a different username
define("DB_PASS", "JFF!5ByL%28uVhFe"); // Change if you have a password
define("DB_NAME", "ScreenLog"); // Change to your actual database name

// Create a connection to the database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character encoding to UTF-8 (optional but recommended)
$conn->set_charset("utf8");


?>