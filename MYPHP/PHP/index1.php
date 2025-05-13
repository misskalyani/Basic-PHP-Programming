<?php
	$font_style=isset($_COOKIE['font_style']) ? $_COOKIE['font_style']:'Arial';
	$font_size=isset($_COOKIE['font_size']) ? $_COOKIE['font_size']:'16px';
	$font_color=isset($_COOKIE['font_color']) ? $_COOKIE['font_color']:'#000000';
	$bg_color=isset($_COOKIE['bg_color']) ? $_COOKIE['bg_color']:'#FFFFFF';
?>
<html>
	<head>
		<title>Change Prerefernces</title>
	</head>
	<body>
		<form action="index2.php" method="POST">
			Font Style :
			<select name="font_style">
				<option value="Arial"<?php if(font_style=="Arial") echo"Selected";?>>Arial</option>
				<option value="Times_New_Roman"<?php if(font_style=="Times_New_Roman") echo"Selected";?>>Times New Roman</option>
				
			</select><br>
			Font Size :
			<select name="font_size">
				<option value="14px"<?php if(font_size=="14px") echo"Selected";?>>14px</option>
				<option value="16px"<?php if(font_style=="16px") echo"Selected";?>>16px</option>
				<option value="18px"<?php if(font_style=="18px") echo"Selected";?>>18px</option>
			</select><br>
			Font Color :
			<input type="color" name="font_color" value="<?php echo $font_color;?>"><br>
			BackGround Color :
			<input type="color" name="bg_color" value="<?php echo $bg_color;?>"><br>
			<input type="submit" value="Apply Prerefernece"><br>

			
		</form>
	</body>
</html>