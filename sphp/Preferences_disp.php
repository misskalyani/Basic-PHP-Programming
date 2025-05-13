<?php
$font_style = $_COOKIE['font_style'];
$font_size = $_COOKIE['font_size'];
$font_color = $_COOKIE['font_color'];
$bg_color = $_COOKIE['bg_color'];
?>

<h1 style="
    font-family: <?= $font_style ?>;
    font-size: <?= $font_size ?>px;
    color: <?= $font_color ?>;
    background-color: <?= $bg_color ?>;
">
    DISPLAY RESULT 
</h1>