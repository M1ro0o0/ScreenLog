<?php
require_once "global.php";

generateHeader("Home");

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}

include 'nav.php'; 
?>
<body>
    <h1 id="msgtext">Welcome, <?php echo $_SESSION['username']; ?>!</h1>

    <div class="select">
        <a href="series.php">Series</a> 
        <p>|</p>
        <a href="films.php">Films</a>
    </div>

</body>