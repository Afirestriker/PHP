
<!-- Login page accepting user id and password and verifying in next page -->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<br>
	<h1 align="center">LOGIN Table</h1>
	<form action="LoginAction.php" method="post">

		<table align="center">
			<tr>
				<td> Username: </td>
				<td> <input type="text" name="username" autofocus required> </td>
			</tr>

			<tr>
				<td> Password: </td>
				<td> <input type="password" name="password" required> </td>
			</tr>

			<tr>
				<td> <input type="submit" value="Login"> </td>
				<td> <input type="reset" value="Reset"> </td>
			</tr>
		</table>		
		
	</form>

</body>
</html>
