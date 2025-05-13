<?php
$xml = new DOMDocument();
$xml->load("Slip_07.xml");

$movies = $xml->getElementsByTagName("Movie");

echo "<table border='1'>";
echo "<tr><th>Movie Title</th><th>Actor Name</th></tr>";

foreach ($movies as $movie) {
    $title = $movie->getElementsByTagName("MovieTitle")->item(0)->nodeValue;
    $actor = $movie->getElementsByTagName("ActorName")->item(0)->nodeValue;

    echo "<tr>";
    echo "<td>{$title}</td>";
    echo "<td>{$actor}</td>";
    echo "</tr>";
}

echo "</table>";
?>
