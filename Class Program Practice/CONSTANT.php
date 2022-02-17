
<!-- Constant in PHP 

	unlike variables, 
	-> constant are immutable
	-> constant within a script is accessible to any are (global). i.e. directly inside
	   functions as well
-->

<?php

	// PHP define() function defines a constant
	// it is considered as best practise to declare constant in upper case letters only.
	
	// define("constant_name", "value", case-insensitive);  #By default case-insensitive is false
	define("NAME", "ABC", false);

	echo NAME;

	echo "<br>";

	function func()
	{
		echo NAME;
	}

	func();

?>
