<?php
require_once "global.php";

generateHeader("nav");

?>

<nav>
    
            <a href="home.php">
                <img src="../Img/icon.png" alt="Logo" class="logo">
            </a>
        
        <a href="list.php?type=series" class="navlink">Series</a>
        <a href="list.php?type=films" class="navlink">Films</a>
        <a href="add.php" class="navlink">Add</a>

    <a href="logout.php" class="logout">Logout</a>
</nav>