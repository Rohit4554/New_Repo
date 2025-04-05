<?php

	$font_style = $_COOKIE['font_style']??'Arial';
	$font_size = $_COOKIE['font_size']??'16px';
	$font_color = $_COOKIE['font_color']??'#000000';
	$bg_color = $_COOKIE['bg_color']??'#FFFFFF';
?>

<html>
	<head>
		<title>Head with Preferences Applied</title>
		<style>
			body{
				font-family: <?php echo htmlspecialchars($font_style)?>;
				font-size: <?php echo htmlspecialchars($font_size)?>;
				color: <?php echo htmlspecialchars($font_color)?>;
				background-color: <?php echo htmlspecialchars($bg_color)?>;
			}
		</style>
	</head>
	
	<body>
		<h1>Your Preferences are applied<h1>
		<p>This page is styled according to your preferences</p>
		<a href = "a31.php">Go back to Preferences</a>
	</body>
</html>
