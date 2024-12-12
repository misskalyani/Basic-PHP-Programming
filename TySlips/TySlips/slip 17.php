<?php
$array = array("Sagar" => "31", "Vicky" => "41", "Leena" => "39", "Ramesh" => "40");

echo "Original Array:<br>";
print_r($array);

echo "<br>Ascending order sort by Value:<br>";
asort($array);
print_r($array);

echo "<br>Ascending order sort by Key:<br>";
ksort($array);
print_r($array);

echo "<br>Descending order sort by Value:<br>";
arsort($array);
print_r($array);

echo "<br>Descending order sort by Key:<br>";
krsort($array);
print_r($array);
?>
