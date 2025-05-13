<html>
	<!--
		Q. 1) Write a PHP script to keep track of number of times the web page has been accessed (Use Session Tracking). 		
	--!>
</html>
<?php 
	session_start();
	if(!isset($_SESSION['page_count']))
		$_SESSION['page_count']=1;
	else
		$_SESSION['page_count']++;

?>
<html>
<body>
	<h1>PAGE VISIT COUNTER</h1>
	<p>total visit <?php echo $_SESSION['page_count'];	?></p>
</body>
</html>