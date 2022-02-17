
<!-- 
2.	Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.  
Sample Input:
30, 0
25, 5
20, 30
20, 25
Sample Output:
bool(true)
bool(true)
bool(true)
bool(false)
 -->

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Assignment 01 Q2</title>
 </head>
 <body>
 
 	<form method="get" action="">
 		<table>
 			<tr>
 				<td> Enter Number 1: </td>
 				<td> <input type="number" name="num1" required autofocus> </td>
 			</tr>

 			<tr>
 				<td> Enter Number 2: </td>
 				<td> <input type="number" name="num2" required autofocus> </td>
 			</tr>

 			<tr>
 				<td></td>
 				<td> <input type="submit" value="True/False"> <input type="reset"> </td>
 			</tr>

 		</table>
 	</form>

 	<?php 

        function returnBool(int $num1, int $num2)
        {

            if($num1 == 30 || $num2 == 30 || $num1+$num2 == 30)
            {
                return True;
            }
            else
            {
                return False;
            }
        }

 		if($_GET)
 		{
 			$num1 = $_GET["num1"];
 			$num2 = $_GET["num2"];
            echo var_dump(returnBool($num1, $num2));
 		}
 	?>

 </body>
 </html>
 