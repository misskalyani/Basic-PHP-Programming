<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    setcookie("font_style", $_GET['font_style'], time() + (86400 * 30), "/");
    setcookie("font_size", $_GET['font_size'], time() + (86400 * 30), "/");
    setcookie("font_color", $_GET['font_color'], time() + (86400 * 30), "/");
    setcookie("bg_color", $_GET['bg_color'], time() + (86400 * 30), "/");

    echo "Saved!<br>";
    echo "Font Style: ".$_GET['font_style']."<br>";
    echo "Font Size: ".$_GET['font_size']."px<br>";
    echo "Font Color: ".$_GET['font_color']."<br>";
    echo "Background Color: ".$_GET['bg_color']."<br><br>";
    echo "<a href='Preferences_disp.php'>See Result</a>";
}
?>
