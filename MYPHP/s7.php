<html>
<!--
	Q. 1) Write a PHP script to read “Movie.xml” file and print all MovieTitle and ActorName of file using 
	DOMDocument Parser. “Movie.xml” file should contain following information with at least 5 records 
	with values.  MovieInfoMovieNo, MovieTitle, ActorName ,ReleaseYear  
	
	asa kahi nahi ki dom ch use kela pahije simple_load_file()kela tri chalta
--!>
</html>

<?php

	$xml = new DOMDocument();
	$xml->load("s7.xml");
	
	$movies = $xml->getElementsByTagName("Movie");
	
	echo "<table border='1'>";
	echo "<tr><th>Movie Title</th><th>Actor Name</th></tr>";

	foreach ($movies as $movie) 
	{
    		$title = $movie->getElementsByTagName("MovieTitle")->item(0)->nodeValue;
    		$actor = $movie->getElementsByTagName("ActorName")->item(0)->nodeValue;
	
	    	echo "<tr>";
	    	echo "<td>".$title."</td>";
		echo "<td>".$actor."</td>";
   		echo "</tr>";
	}
	
	echo "</table>";

?>

