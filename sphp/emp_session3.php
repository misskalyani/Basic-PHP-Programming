<?php
session_start();
$total = $_SESSION['basic'] + $_SESSION['da'] + $_SESSION['hra'];
echo "Eno: {$_SESSION['eno']}<br>";
echo "Ename: {$_SESSION['ename']}<br>";
echo "Address: {$_SESSION['address']}<br>";
echo "Basic: {$_SESSION['basic']}<br>";
echo "DA: {$_SESSION['da']}<br>";
echo "HRA: {$_SESSION['hra']}<br>";
echo "Total: $total<br>";
session_destroy();
?>