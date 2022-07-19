
<!DOCTYPE html>
<html>
<head>
	<title>Collect LIC Details</title>

	<style type="text/css">
		
		hr{border:  1px solid red}
		h1{text:align: center; color: red}
		body{background-color: yellow}

	</style>

</head>
<body>

	<h1>LIC Information</h1>
	<hr>

	<form action="Emp_Cookies3.php" method="post">
		Policy No.: <input type="text" name="pno"><br>
		Policy Name: <input type="text" name="pname"><br>
		Enter Premium Account: <input type="text" name="pa"><br>

		<input type="submit"><br>
	</form>

</body>
</html>

<?php
	setcookie("ename", $_POST["name"]);
	setcookie("eaddress", $_POST["address"]);
	setcookie("emobile", $_POST["mobileno"])
?>