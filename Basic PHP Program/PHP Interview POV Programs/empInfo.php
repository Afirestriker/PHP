
<!DOCTYPE html>
<html>
<head>
	<title>Employee Information</title>
</head>
<body>

	<h1>Employee Information</h1>

	<hr>

	<form method="post">
		Enter Name: <input type="text" name="name"> <br>
		Enter Age: <input type="text" name="age"> <br>
		Enter Salary: <input type="text" name="sal"> <br>
		Enter City <input type="text" name="city"> <br>
		<input type="submit">
	</form>

</body>
</html>

<?php
	if($_POST)
	{
		echo "Name is: " . $_POST['name'];
		echo "<br>";
		echo "Age is: " . $_POST['age'];
		echo "<br>";
		echo "Salary is: " . $_POST['sal'];
		echo "<br>";
		echo "City is: " . $_POST['city'];
		echo "<br>";
	}
?>
