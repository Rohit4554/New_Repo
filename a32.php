<?php

 $font_style = $_COOKIE['font_style']??'Not Set';
 $font_size = $_COOKIE['font_size']??'Not Set';
 $font_color = $_COOKIE['font_color']??'Not Set';
 $bg_color = $_COOKIE['bg_color']??'Not Set';
?>

<html>
	<head>
		<title>Display Preferences</title>
	</head>

	<body>
		<h1>Your Saved Preferences</h1>
		<ul>
			<li>Font Style: <?php echo htmlspecialchars($font_style);?></li>
			 <li>Font Size: <?php echo htmlspecialchars($font_size);?></li>
			 <li>Font color: <?php echo htmlspecialchars($font_color);?></li>
			 <li>Background Color: <?php echo htmlspecialchars($bg_color);?></li>
		</ul>
		<a href = "a33.php">Go to the page with preferences applied</a>
	</body>
</html>
