<?php
$xml = simplexml_load_file("Slip_20.xml");
if ($xml === false) {
    die("Error: Cannot load XML file.");
}

echo "<h2>Student Information</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Grade</th>
    </tr>";
foreach ($xml->student as $student) {
    echo "<tr>";
    echo "<td>{$student->id}</td>";
    echo "<td>{$student->name}</td>";
    echo "<td>{$student->age}</td>";
    echo "<td>{$student->grade}</td>";
    echo "</tr>";
}

echo "</table>";
?>
