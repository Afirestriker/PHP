
<!-- 
4. Accept a name and total marks of 5 subjects from the user. 
Display mark sheet (name, marks, percentage, class obtained)
 -->

<!-- Backend -->
<?php
	if($_POST)
	{
		$name = $_POST["user_name"];
		$sub1 = $_POST["sub1"];
		$sub2 = $_POST["sub2"];
		$sub3 = $_POST["sub3"];
		$sub4 = $_POST["sub4"];
		$sub5 = $_POST["sub5"];

		$percentage = (($sub1+$sub2+$sub3+$sub4+$sub5) / 500) * 100;
		$class;
		switch ($percentage) {
			case $percentage>85:
				$class = "A";
				break;
			
			case $percentage>75;
				$class="B";
				break;

			case $percentage>60;
				$class="C";
				break;

			case $percentage>45;
				$class="D";
				break;


			case $percentage<45;
				$class="F";
				break;

			default:
				echo "Percentage not defined";
				break;
		}
		// switch close
	}
	// if close
?>


<!-- Frontend -->
<!DOCTYPE html>
<html>
<head>
	<title>Display Marksheet</title>
</head>
<body>

	<form method="post" action="">
		<table>
			<tr>
				<td colspan="2"><h3> Enter Details </h3></td>
			</tr>

			<tr>
				<td>Name: </td>
				<td><input type="text" name="user_name" placeholder="Enter Name" autofocus required></td>
			</tr>

			<tr><td colspan="2">Enter Marks</td></tr>
			<tr>
				<td>Sub1:</td>
				<td><input type="number" name="sub1" max="100" min="1"></td>
			</tr>

			<tr>
				<td>Sub2:</td>
				<td><input type="number" name="sub2" max="100" min="1"></td>
			</tr>

			<tr>
				<td>Sub3:</td>
				<td><input type="number" name="sub3" max="100" min="1"></td>
			</tr>

			<tr>
				<td>Sub4:</td>
				<td><input type="number" name="sub4" max="100" min="1"></td>
			</tr>

			<tr>
				<td>Sub5:</td>
				<td><input type="number" name="sub5" max="100" min="1"></td>
			</tr>

			<tr>
				<td></td>
				<td> <input type="submit" value="Generate Marksheet"></td>
				<td> <input type="reset"></td>
			</tr>

		</table>
	</form>

	<br><hr>
	<?php 
		if($_POST)
		{
	?>
			<h2>Marksheet</h2>
			<table>
				<tr>
					<td>Name: </td>
					<td><?php echo $name;  ?></td>
				</tr>

				<tr>
					<td>Perentage: </td>
					<td><?php echo $percentage;  ?></td>
				</tr>

				<tr>
					<td>Class: </td>
					<td><?php echo $class;  ?></td>
				</tr>
			</table>
	<?php	
		}
	?>
</body>
</html>

