<body>
  <h1>Chess board </h1>
  <br>

</body>



<?php
echo "<table border='1' style='border-collapse: collapse;'>";
$k = 0;
for ($i = 1; $i <= 8; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 8; $j++) {
        $k++;
        if ($k % 2 == 0) {
            echo "<td style='background-color:black; width:30px; height:30px'></td>";
        } else {
            echo "<td style='background-color:white; width:30px; height:30px'></td>";
        }
    }
    echo "</tr>";
    $k++; 
}
echo "</table>";
?>
