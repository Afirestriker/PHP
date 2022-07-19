
<!-- Create basic html form with text, radio, and checkbox and submit it to process.php -->

<!DOCTYPE html>
<html>
<head>
	<title> HTML Form </title>
</head>
<body>

	<br>
	<form method="post" action="process.php">
		
		<table>
			
			<tr>
				<td> Name: </td>
				<td> <input type="text" name="name" autofocus required> </td>
			</tr>

			<tr>
				<td>Gender: </td>
				<td>
					<input type="radio" name="gender" value="male" required> MALE 
					<input type="radio" name="gender" value="female"> FEMALE 
					<input type="radio" name="gender" value="other"> OTHER
				</td>
			</tr>

			<tr>
				<td>Hobby: </td>
				<td>
					<input type="checkbox" name="hobby" value="dance"> Dance

					<input type="checkbox" name="hobby" value="drama"> Drama

					<input type="checkbox" name="hobby" value="music"> Music
				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" value="Submit">
				</td>
				<td>
					<input type="reset" value="Reset">
				</td>
			</tr>

		</table>

	</form>

</body>
</html>