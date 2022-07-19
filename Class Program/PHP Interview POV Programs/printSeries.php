
<!-- 
write a program to print the following series
0  3  8  15  24 ........n
 -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Printing Series</title>
</head>
<body>

	<h1>Printing Series</h1>

	<form action="" method="post">
		Number: <input type="text" name="num"> <br>
		<input type="submit" name=""> <br>
	</form>

</body>
</html>

<?php 

	if($_POST)
	{

		$num = $_POST['num'];

		for($i=1; $i<=$num; $i++)
		{
			$s = $i*$i - 1;
			echo $s . " ";
		}
	}
?>
