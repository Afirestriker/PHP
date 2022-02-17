
<!DOCTYPE html>
<html>
<head>
	<title>Employee Information</title>
</head>
<body>

	<h1>Employee Information</h1>

	<hr>

	<form method="post">
		Enter Name: <input type="text" name="name" value="<?php if(isset($_POST["name"])) echo $_POST["name"] ?>"> <br>
		Enter Age: <input type="text" name="age" value="<?php if(isset($_POST["age"])) echo $_POST["age"] ?>">  <br>
		Enter Salary: <input type="text" name="sal"  value="<?php if(isset($_POST["sal"])) echo $_POST["sal"] ?>"> <br>
		Enter City <input type="text" name="city" value="<?php if(isset($_POST["city"])) echo $_POST["city"] ?>"> <br>
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
