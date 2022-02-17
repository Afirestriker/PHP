<?php declare(strict_types=1); ?>

<!-- 
PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.

To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.
 -->

<?php 


	function add(int $num1) : int
	{
		return $num1 + 2;
	}

	echo add(2);

?>
