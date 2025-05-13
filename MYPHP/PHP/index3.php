<?php
	$font_style=isset($_COOKIE['font_style']) ? $_COOKIE['font_style']:'Arial';
	$font_size=isset($_COOKIE['font_size']) ? $_COOKIE['font_size']:'16px';
	$font_color=isset($_COOKIE['font_color']) ? $_COOKIE['font_color']:'#000000';
	$bg_color=isset($_COOKIE['bg_color']) ? $_COOKIE['bg_color']:'#FFFFFF';
?>

<html>
	<head>
		<title>Display Prerefernces</title>
	</head>
	<body style="background-color:<?php echo $bg_color ;?>;font-family:<?php echo $font_style ; ?>;font-size:<?php echo $font_size ; ?>;font-color:<?php echo $font-color ; ?>">
	<h1>Your Selected Preferences</h1>
	<p>Font Style :<?php echo $font_style ; ?></p>
	<p>Font Size :<?php echo $font_size ; ?></p>
	<p>Font Color :<span style="color":<?php echo $font_color ; ?>;"<?php echo $font_color ; ?></sapn></p>
	<p>Background Color :<span style="color":<?php echo $bg_color ; ?>;"<?php echo $bg_color ; ?></sapn></p>
	
	<p><a href="index1.php">Go Back to change prerefernce</a></p>
	</body>
</html>