
<!-- PHP global keyword -->

<?php

	//Global variable, can be access only outside variable.
	$name = "ABC";

	function fun()
	{
		//Lobal variable, can be access only inside variable in which declared.
		$name = "abc";
		echo $name;

		echo "<br>";

		//Accessing global variable, using the keyword global.
		global $name;
		Print "Global: " . $name;
	}

	fun();

?>
