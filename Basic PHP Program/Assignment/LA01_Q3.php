
<!-- 
3.	Accept a number from the user and 
	1. Check if it is prime
	2. Check if it is perfect
	3. Check if it is Armstrong
	4. Check if it is palindrome
	5. Find factors of the number
	6. Print factorial of the number
	7. Fibonacci Series
	8. Print Reverse of the number
 -->

<!-- Backend -->
<?php
	function prime($num)
	{
		$i=0;
		for($i=2; $i<=$num/2; $i++)
		{
			if($num%$i==0)
			{
				return "Not a Prime Number";
				break;
			}
		}

		if($i>$num/2)
		{
			return "Prime Number";
		}
	}
	// prime() close


	function factors_perfect($num, $operation)
	{
		$sum = 0;
		$count = 0;
		$factors = array();
		for($i=1; $i<=$num/2; $i++)
		{
			if($num%$i==0)
			{
				$factors[$count] = $i;
				$sum = $sum + $i;
			}
			$count+=1;
		}

		if($operation == "factors")
		{
			return $factors;
		}

		if($operation == "perfect")
		{
			return ($sum==$num) ? "Perfect Number." : "Not a perfect number.";
		}		
	}
	// factors_perfect() close


	function factorial($num)
	{
		$fact = 1;
		while($num>1)
		{
			$fact = $fact * $num;
			$num--;
		}
		return $fact;
	}
	// factorial() close


	function armstrong($num, $num_length)
	{
		// pow(x, y) function: raise x to the power of y.
		$sum = 0;
		$temp = $num;
		while($temp > 0)
		{
			$digit = $temp%10;
			$sum = $sum + pow($digit, $num_length);
			$temp = $temp/10;
		}

		return ($sum == $num) ? "Armstrong number." : "Not a Armstrong number.";
	}
	// armstrong() close


	function reverse_palindrome($num, $operation)
	{
		$temp = $num;
		$reverse = 0;

		while($temp > 1)
		{
			$digit = $temp % 10;
			$reverse = ($reverse * 10) + $digit;
			$temp = $temp / 10;
		}

		if($operation == "reverse")
		{
			return $reverse;
		}
		
		if($operation == "palindrome")
		{
			return ($reverse == $num) ? "Plindrome Number." : "Not a palindrom number.";
		}
	}
	// reverse_palindrome() close

	
	function fibonacci($num)
	{
		$arr_fibonacci = array(0, 1);
		$a=0;
		$b=1;
		for($i=2; $i<$num; $i++)
		{
			$c = $a+$b;
			$arr_fibonacci[$i] = $c;
			$a=$b;
			$b=$c;
		}

		return $arr_fibonacci;
	}
	// fibonacci() close
	
?>


<!-- Frontend -->
<!DOCTYPE html>
<html>
<head>
	<title>Advanced Arithmetic</title>
</head>
<body>
	
	<form method="get" action="">
		<table>
			<tr>
				<td align="center" colspan="2"> <h2> Advanced Arithmetic </h2> </td>
			</tr>

			<tr>
				<td>Enter Number: </td>
				<td><input type="number" name="num" placeholder="Enter Number" autofocus required></td>
			</tr>

			<tr>
				<td>Select Operation:</td>
				<td>
					<select name="operation" required>
						<option>Select</option>
						<option value="prime">Check If Prime</option>
						<option value="factors">Find Factors</option>
						<option value="perfect">Check If Perfect</option>
						<option value="factorial">Print Factorial</option>
						<option value="armstrong">Check If Armstrong</option>
						<option value="reverse">Reverse the number</option>
						<option value="palindrome">Check If Palindrome</option>
						<option value="fibonacci">Print Fibonacci</option>
					</select>
				</td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Check"></td>
			</tr>
		</table>
	</form>
	<br>
</body>
</html>

<?php
	if($_GET)
	{
		$num = $_GET["num"];
		$operation = $_GET["operation"];
		
		$num_length = strlen($num);
		// converting string type num into integer
		$num *=1;
		
		echo "Result: ";

		switch ($operation)
		{
			case 'prime': echo prime($num);
							break;
			
			case 'factors': $arr_factors = factors_perfect($num, $operation);
							foreach ($arr_factors as $factors)
							{
								echo $factors . ", ";
							}
							break;

			case 'perfect': echo factors_perfect($num, $operation);
							break;

			case 'factorial': echo factorial($num);
							break;			
			
			case 'armstrong': echo armstrong($num, $num_length);
							break;

			case 'reverse': echo reverse_palindrome($num, $operation);
							break;

			case 'palindrome': echo reverse_palindrome($num, $operation);
							break;

			case 'fibonacci': $ar_fib = fibonacci($num);
							  foreach ($ar_fib as $fibonacci_values)
							  {
							  	echo $fibonacci_values . ", ";
							  }
							break;

			default: echo "Select the Operation to perform";
					break;
		}
		// switch close
	}
	// if close
?>