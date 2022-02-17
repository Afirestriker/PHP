

<!--
PHP variable variable is a concept where we use the value of one variable, to point to the another variable.

e.g. in below example:
$var1 content value "Welcome"
$$var1 content value " To PHP"

Now, double $ ($$var1) means that the value of $var1 (Welcome) is used as a variable name to store value " To PHP".
 
Note: When using $$var1, the value of $var1 must not contain any whitespae, i.e it should follow the rules of identifier/variable.
 -->

<?php 

	$var1 = "Welcome_";
	$$var1 = " To PHP";

	echo $var1, $Welcome_;

?>