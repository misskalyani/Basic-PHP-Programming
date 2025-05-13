<?php
$font_style = $_GET['font_style'];
$font_size = $_GET['font_size'];
$font_color = $_GET['font_color'];
$bg_color = $_GET['bg_color'];
  echo "Saved!<br>";
    echo "Font Style: ".$_GET['font_style']."<br>";
    echo "Font Size: ".$_GET['font_size']."px<br>";
    echo "Font Color: ".$_GET['font_color']."<br>";
    echo "Background Color: ".$_GET['bg_color']."<br><br>";
?>

<h1 style="
    font-family: <?= $font_style ?>;
    font-size: <?= $font_size ?>px;
    color: <?= $font_color ?>;
    background-color: <?= $bg_color ?>;
">
    DISPLAY RESULT 
</h1>


