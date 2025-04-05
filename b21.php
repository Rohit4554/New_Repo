<?php
 session_start();
 
 if($_SERVER['REQUEST_METHOD'] === 'POST')
 {
  $_SESSION['eno'] = $_POST['eno'];
  $_SESSION['ename'] = $_POST['ename'];
  $_SESSION['address'] = $_POST['address'];

  header('location: b22.php');
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
			<label for ="eno">Employee Number:</label>
			<input type = "text" name = "eno" required><br><br>

  			<label for ="ename">Employee Name:</label>
                        <input type = "text" name = "ename" required><br><br>

  			<label for ="address">Employee Address:</label>
                        <input type = "text" name = "address" required><br><br>

			<button type = "submit">Next</button>

		</form>
	</body>
</html>
