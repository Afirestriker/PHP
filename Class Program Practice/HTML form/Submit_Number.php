
<!DOCTYPE html>
<html>
<head>
	<title>Submit the number and display it</title>
</head>
<body>

	<form method="post">
		<input type="text" name="num" required autofocus>
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</form>

	<?php 
		if($_POST)
		{
			$num = $_POST["num"];
			echo "Number Entered: $num";
		}
	?>

</body>
</html>