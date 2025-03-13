<?php
require_once "global.php";

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

if (!isset($_GET['type']))
{
    header("Location: home.php"); // Redirect to home if there is no type specified
    exit;
}

generateHeader("List of " . $_GET['type']);



include 'nav.php'; 
?>
<body>
    <h1 id="msgtext">Here are your <?php echo $_GET['type'] ?>, <?php echo $_SESSION['username']; ?>.</h1>

    <div class="">
        
    </div>
</body>