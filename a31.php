<?php
  
  if($_SERVER['REQUEST_METHOD'] === 'POST')
  {
   setcookie('font_style', $_POST['font_style'], time()+ 365*24*60*60*1);
   setcookie('font_size', $_POST['font_size'], time() + 365*24*60*60*1);
   setcookie('font_color', $_POST['font_color'], time()+ 365*24*60*60*1);
   setcookie('bg_color', $_POST['bg_color'], time() + 5);
   header('location: a32.php');
   exit();
  }
 
?>

<html>
	<head>
		<title>Set Preferences</title>
	</head>
	
	<body>
  		<h1>Set Preferences</h1>
 		<form method = "post" action = "">
			<label for = "font_style">Font Style</label>
			<select id = "font_style" name = "font_style">
				<option value = "Arial">Arial</option>
				<option value = "Verdana">Verdana</option>
				<option value = "Times New Roman">Times New Roman</option>
				<option value = "Courier New">Courier New</option>
			</select><br><br>

			<label for = "font_size">Font Size</label>
 			<select id = "font_size" name = "font_size">
 				<option value = "16px">16px</option>
				<option value = "18px">18px</option>
				<option value = "20px">20px</option>
				<option value = "22px">22px</option>

			</select><br><br>

   			<label for "font_color">Font Color</label>
 			<input type = "color" id = "font_color" name = "font_color">
			<br><br>
 
 			<label for = "bg_color">Background color</label>
			<input type = "color" id = "bg_color" name = "bg_color">
			<button type = "submit">Save Preferences</button><br><br>
		</form>
  	</body>

</html>
