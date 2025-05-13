<?php
$xml = simplexml_load_file("Slip_06.xml");

echo "<table border='1'>";
echo "<tr><th>Title</th><th>Author</th><th>Year</th></tr>";

foreach ($xml->book as $item) {
    echo "<tr>";
    echo "<td>{$item->title}</td>";
    echo "<td>{$item->author}</td>";
    echo "<td>{$item->year}</td>";
    echo "</tr>";
}

echo "</table>";
?>
