<?php
require_once "global.php";

generateHeader("Series List");

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

include 'nav.php'; 
?>
<body>
    <h1 id="msgtext">Here are your series, <?php echo $_SESSION['username']; ?>.</h1>

    <div class="">
<!-- Foreach series in DB linked to logged in account, showed in tile way, 
 after clicking it will open specific series and user will be able to see 
 seasons and episodes within seasons-->
    </div>
</body>