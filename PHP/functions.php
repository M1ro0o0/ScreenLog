<?php
function generateHeader($title) {
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>" . htmlspecialchars($title) . "</title>";
    echo "<link rel='icon' href='../img/icon.png' type='image/x-icon'>";
    echo "<link rel='stylesheet' href='../CSS/Style.css'>";
    echo "</head>";
}
?>
