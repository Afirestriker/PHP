
<!-- 
5.	Write a php program to accept username in a text box and color from the user in a drop down list (list of 5 colors). After selecting the color, the program should display personalized welcome message in to the user in selected color.
 -->

<!DOCTYPE html>
<html>
<head>
	<title>Personalized Welcome Message</title>
</head>
<body>

	<form method="post" action="">
		<table>
			<tr>
				<td colspan="2"><h3>Show Personalized Text</h3></td>
			</tr>

			<tr>
				<td>Name: </td>
				<td><input type="text" name="name" autofocus required></td>
			</tr>

			<tr>
				<td>Color: </td>
				<td><input type="color" name="color" required></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Show Message"> 
					<input type="reset">
				</td>
			</tr>
		</table>
	</form>

	<br><hr>

	<?php
		if($_POST)
		{
	?>
			<h1 align="center" style="color: <?php echo $_POST['color'] ?>; font-size: 60px;">Welcome <?php echo $_POST['name'] ?></h1>
	<?php	
		}
	?>

</body>
</html>
