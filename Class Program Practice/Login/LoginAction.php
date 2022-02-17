
<!-- Aceept input from Login.php page and check if the details are right -->

<!DOCTYPE html>
<html>
<head>
	<title> Login Verification </title>
</head>
<body>

	<?php
		$username = $_POST["username"];
		$password = $_POST["password"];

		if($username != "Admin")
		{
			echo "<br> Wrong User ID. ";
	?>
			Redirect to <a href="Login.php">Login</a>
	<?php	
		} //if block close
		elseif($password != "Admin")
		{
			echo "<br> Password does not match in the database for given username.";
	?>
			Redirect to <a href="Login.php">Login</a>
	<?php
		} //elseif block close
		else
		{
			echo "<br> Login Successful, Welcome $username";
		}
		//else block close

	?>

</body>
</html>
