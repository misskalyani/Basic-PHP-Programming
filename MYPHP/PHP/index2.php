<?php
	$font_style=$_POST["font_style"];
	$font_size=$_POST["font_size"];
	$font_color=$_POST["font_color"];
	$bg_color=$_POST["bg_color"];

	setcookie('font_style',$font_style,time()+(86400*30),"/");
	setcookie('font_size',$font_size,time()+(86400*30),"/");
	setcookie('font_color',$font_color,time()+(86400*30),"/");
	setcookie('bg_color',$bg_color,time()+(86400*30),"/");

	header('Location:index3.php');
	exit();	
?>