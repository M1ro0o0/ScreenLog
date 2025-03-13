<?php
require_once "global.php";

generateHeader("Add to list");

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}

include 'nav.php'; 
?>
<body>
    
</body>