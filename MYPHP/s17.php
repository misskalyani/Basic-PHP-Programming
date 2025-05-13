<html>
	<!--
		Q. 1) Write a PHP script to create student.xml file which contains student roll no, name, address, college 
		and course. Print students detail of specific course in tabular format after accepting course as input. 

		SLIP 18,SLIP 19 same ha question
	--!>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course = $_POST['course'];
    $xml = simplexml_load_file("s24.xml");
    
    echo "<h2>Students in $course</h2><table border='1'><tr><th>Roll No</th><th>Name</th><th>Address</th><th>College</th><th>Course</th></tr>";
    
    foreach ($xml->student as $s) {
        if (strcasecmp($s->course, $course) == 0) {
            echo "<tr><td>".$s->roll_no."</td><td>".$s->name."</td><td>".$s->address."</td><td>".$s->college."</td><td>".$s->course."</td></tr>";
        }
    }
    
    echo "</table>";
}
?>

<form method="post">
    Course:
    <input type="text" name="course" >
    <input type="submit" value="Search">
</form>
