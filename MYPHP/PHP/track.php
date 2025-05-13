<?php
	session_start();
	if(!isset($_SESSION['visit_count']))
		$_SESSION['visit_count']=1;
	else
		$_SESSION['visit_count']++;

	if(isset($_COOKIE['total_visit']))
		$total_visit=$_COOKIE['total_visit'];
	else
		$total_visit=0;

	$total_visit++;
	
	setcookie('total_visit',$total_visit,time()+(86400*30),"/");
?>
<html>
	<head>
		<title>Page Visit Tracker </title>
	</head>
	<body>
		<h1>Welcome to the webpage</h1>
		<p>This is your visit number <?php echo$_SESSION['visit_count'] ;?> during this session.</p>
		<p> you have visited this page a total of = <?php echo $total_visit;?>times</p>
	
	</body>
</html>