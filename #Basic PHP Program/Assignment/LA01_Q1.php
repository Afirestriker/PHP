
<!-- 1.	Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.  
Sample Input
1, 2
3, 2
2, 2
Sample Output:
3
5
12
 -->

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Assignment 01 Q1</title>
 </head>
 <body>
 	<br><br>
 	<form method="get" action="">
 		
 		<table>
 			<tr>
 				<td>Enter Number 1: </td>
 				<td> <input type="number" name="num1" required autofocus> </td>
 			</tr>

 			<tr>
 				<td>Enter Number 2: </td>
 				<td> <input type="number" name="num2" required autofocus> </td>
 			</tr>

 			<tr>
 				<td> </td>
 				<td> <input type="submit" value="Calculate"> <input type="reset"> </td>
 			</tr>
 		</table>

 	</form>

 	<?php 

        function calculate($n1, $n2)
        {
            if($n1 == $n2)
            {
                return ($n1+$n1)*3;
            }
            else
            {
                return $n1+$n2;
            }
        }

    	if($_GET)
    	{
    		$num1 = $_GET["num1"];
    		$num2 = $_GET["num2"];

            echo "Result: ", calculate($num1, $num2);
    	}
 	?>

 </body>
 </html>
