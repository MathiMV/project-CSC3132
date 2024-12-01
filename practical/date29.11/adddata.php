<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="adddata.php" method="POST">
		<table>
			<tr>
				<td align="right">Registration Number:</td>
				<td><input type="text" name="regno" /></td>
			</tr>
			<tr>
				<td align="right">Name:</td>
				<td><input type="text" name="name" /></td>
			</tr>
			<tr>
				<td align="right">Age:</td>
				<td><input type="number" name="age" /></td>
			</tr>
			<tr>
				<td align="right">Course:</td>
				<td>
					<select name="course">
						<option value="IT">IT</option>
						<option value="AMC">ICT</option>
						<option value="CSC">CSC</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Add a new student" /></td>
			</tr>
		</table>
	</form>
	<?php
	require_once 'dbconf.php';
	function AddData($connect,$regno,$name,$age,$course){
		try {
		
			$sql = "INSERT INTO students VALUES('$regno','$name',$age,'$course')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				echo "New student record created sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$regno = $_POST['regno'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$course = $_POST['course'];
		AddData($connect,$regno,$name,$age,$course);
	}
	

	?>

</body>
</html>