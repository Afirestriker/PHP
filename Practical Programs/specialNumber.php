
<!DOCTYPE html>
<html>
<head>
	<title>Special Number</title>
</head>
<body>

	<h1>Speical Number</h1>
	<hr>

	<form action="" method="post">

		<table>
			<tr>
				<td>Enter Number: </td>
				<td><input type="text" name="number" placeholder="Enter Number" required></td>
			</tr>

			<tr>
				<td><input type="submit"></td>
			</tr>
		</table>

	</form>
</body>
</html>

<?php 

	if($_POST)
	{
		$num = $_POST['number'];

		echo "Number is: $num";

		$dupNum = $num;

		$sum = 0;
		while($dupNum > 1)
		{
			#extract digits
			$d = $dupNum % 10;

			#factorial of the digit number
			$fact = 1;
			for($i=1; $i<=$d; $i++)
			{
				$fact = $fact * $i;
			}

			#sum of number digit factorial
			echo "<br>Fact: $fact";
			$sum = $sum + $fact;

			$dupNum = $dupNum / 10;
		}

		echo "<br>Sum: $sum";
		
		if($sum == $num)
		{
			echo "<br>$num is a special Number";
		}
		else
		{
			echo "<br>$num is Not a special Number";
		}

	}

?>