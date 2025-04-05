<?php
	session_start();
 	$total = $_SESSION['basic'] + $_SESSION['da'] = $_SESSION['hra'];	
?>
<html>
	<head>
		<title>Employee Details</title>
	</head>

	<body>
	

		<table border = "1">
			<tr>
				<th>Employee Number</th>
				<th>Employee Name</th>
				<th>Employee Address</th>
				<th>Basic Salary</th>
				<th>DA</th>
				<th>HRA</th>
				<th>Total Salary</th>
			</tr>
			<tr>
				<td><?php echo htmlspecialchars($_SESSION['eno'])?> </td>
				<td><?php echo htmlspecialchars($_SESSION['ename'])?> </td>
				<td><?php echo htmlspecialchars($_SESSION['address'])?> </td>
				<td><?php echo htmlspecialchars($_SESSION['basic'])?> </td>
				<td><?php echo htmlspecialchars($_SESSION['da'])?> </td>
				<td><?php echo htmlspecialchars($_SESSION['hra'])?> </td>
				<td><?php echo htmlspecialchars($total) ?> </td>
			
			</tr>
		</table>

	</body>
</html>
