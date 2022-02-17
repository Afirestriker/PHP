
<!DOCTYPE html>
<html>
<head>
	<title>Employee and LIC Details</title>

	<style type="text/css">
		
		hr{border:  1px solid red}
		h1{text:align: center; color: red}
		body{background-color: yellow}

	</style>

</head>
<body>

	<h1>Employee and LIC Information</h1>
	<hr>

</body>
</html>

<?php
	
	echo "<br>Name is: ". $_COOKIE["ename"];
	echo "<br>Address is: " . $_COOKIE["eaddress"];
	echo "<br>Mobile No. is: " . $_COOKIE["emobile"];

	echo "<br>LIC No is: " . $_POST["pno"];
	echo "<br>LIC Name is: " . $_POST["pname"];
	echo "<br>LIC Premium Account: " . $_POST["pa"];


?>