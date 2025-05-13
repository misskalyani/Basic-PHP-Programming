<?php
$xml = simplexml_load_file("Slip_05.xml");

echo "<table border='1'>";
echo "<tr><th>Item Name</th><th>Item Rate</th><th>Item Quantity</th></tr>";

foreach ($xml->Item as $item) {
    echo "<tr>";
    echo "<td>{$item->ItemName}</td>";
    echo "<td>{$item->ItemRate}</td>";
    echo "<td>{$item->ItemQuantity}</td>";
    echo "</tr>";
}

echo "</table>";
?>
