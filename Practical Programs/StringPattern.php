
<!-- 
write a program to accept the string from the user and print the following pattern:
Input: Hello
Output:
H
HE
HEL
HELL
HELLO
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
		Enter String: <input type="text" name="string"> <br>
		<input type="submit" name=""> <br>
	</form>

</body>
</html>

<?php 

	if($_POST)
	{

		$string  = $_POST['string'];

		for($i=0; $i < strlen($string); $i++)
		{
			for($j=0; $j<=$i; $j++)
			{
				echo $string[$j];	
			}
			echo "<br>";
		}
	}
?>
