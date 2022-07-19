
<!-- HTML_Form.php form action -->

<!DOCTYPE html>
<html>
<head>
	<title> process.php </title>
</head>
<body>

	<?php
		$name = $_POST["name"];
		$gender = $_POST["gender"];
		$hobby = $_POST["hobby"];

		echo $name, "<br>";

		echo $gender, "<br>";
		echo $hobby;
	?>

</body>
</html>