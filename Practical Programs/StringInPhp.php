
<!-- 2. Write a program to accept the string from the user and perform the following operations
	1) Count the number of words in the string
	2) Calculate the length of the string
	3) Reverse the string
	4) Count the number of vowels in the string
(Use radio button to select the operation)
Also use self-processing form and sticky forms
 -->

 <!DOCTYPE html>
<html>
<head>
	<title>Employee Information</title>
</head>
<body>

	<h1>Employee Information</h1>

	<hr>

	<form method="post">
		Enter String: <input type="text" name="string" value="<?php if(isset($_POST["string"])) echo $_POST["string"] ?>">

		<br>
		<input type="radio" name="operation" value="countWords" required <?php if(isset($_POST['operation'])) { if($_POST['operation'] == "countWords") { ?> checked <?php } } ?> > Count Words 
		<input type="radio" name="operation" value="length" required <?php if(isset($_POST['operation'])) { if($_POST['operation'] == "length") { ?> checked <?php } } ?> > Length 
		<input type="radio" name="operation" value="reverse" required <?php if(isset($_POST['operation'])) { if($_POST['operation'] == "reverse") { ?> checked <?php } } ?> > Reverse
		<input type="radio" name="operation" value="countVowels" required <?php if(isset($_POST['operation'])) { if($_POST['operation'] == "countVowels") { ?> checked <?php } } ?> > count Vowels
		<br>

		<input type="submit">
	</form>

</body>
</html>

<?php 

	if($_POST)
	{
		$str = $_POST['string'];
		$operation = $_POST['operation'];

		echo "<br> Strings: $str <br>";

		switch($operation)
		{
			case "countWords":
							echo "Total words count: " . str_word_count($str) . "<br>";
							break;
			case "length":
							echo "Total Lenght count: " . strlen($str) . "<br>";
							break;
			case "reverse":
							echo "Rever of string: " . strrev($str) . "<br>";
							break;
			case "countVowels":
							echo "Total Vowels in String " . preg_match_all('/[aeiou]/i',$str,$matches) . "<br>";
							break;
			default:
					echo "Not any operation performed";
					break;
		}
	}
?>
