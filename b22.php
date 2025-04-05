<?php
 session_start();
 
 if($_SERVER['REQUEST_METHOD'] === 'POST')
 {
  $_SESSION['basic'] = $_POST['basic'];
  $_SESSION['da'] = $_POST['da'];
  $_SESSION['hra'] = $_POST['hra'];

  header('location: b23.php');
  exit();

 }
?>

<html>
	<head>
		<title>Employee Details</title>
	</head>

	<body>
		<h1>Enter Employee Details</h1>
		<form method = "POST" action = "">
			<label for ="basic">Enter Basic Salary</label>
			<input type = "number" name = "basic" required><br><br>

  			<label for ="da">Enter DA</label>
                        <input type = "number" name = "da" required><br><br>

  			<label for ="hra">Enter DRA:</label>
                        <input type = "number" name = "hra" required><br><br>

			<button type = "submit">submit</button>

		</form>
	</body
</html>
