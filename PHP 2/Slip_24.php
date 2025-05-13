<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course = $_POST['course'];
    $xml = simplexml_load_file("Slip_24.xml");
    
    echo "<h2>Students in $course</h2><table border='1'><tr><th>Roll No</th><th>Name</th><th>Address</th><th>College</th><th>Course</th></tr>";
    
    foreach ($xml->student as $s) {
        if (strcasecmp($s->course, $course) == 0) {
            echo "<tr><td>{$s->roll_no}</td><td>{$s->name}</td><td>{$s->address}</td><td>{$s->college}</td><td>{$s->course}</td></tr>";
        }
    }
    
    echo "</table>";
}
?>

<form method="post">
    <label>Course:</label>
    <input type="text" name="course" required>
    <input type="submit" value="Search">
</form>
