
<!DOCTYPE html>
<html>
<head>
    <title>Disarium Number</title>
</head>
<body>

    <h1>Disarium Number</h1>
    <hr>

    <form action="" method="post">

        <table>
            <tr>
                <td>Enter Number: </td>
                <td><input type="text" name="number" placeholder="Enter Number" required></td>
            </tr>

            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>

    </form>
</body>
</html>

<?php
    
    if($_POST)
    {
        $num = $_POST['number'];

        echo "Number is: $num";
	
		$sum = 0;
		$temp = $num;

        # Reverse the number
        $rev = 0;
        while($temp >= 1)
        {
            $d = $temp % 10;
            $rev = ($rev * 10) + $d;
            $temp = $temp / 10;
        }

        echo "<br>Reverse of number: $rev <br>";

        # sum the number to check for disarium number

        //count is helping variable for keeping tract of positioning of the digit.
        $count = 1;
        
        while($rev >= 1)
        {
            $rem = $rev % 10;

            $sum = $sum + pow($rem, $count);

            echo "Sum: $sum<br>";

            $count++;
            $rev = $rev / 10;
        }

        if($num == $sum)
            echo "It is a disarium number";
        else
            echo "It is not a disarium number";
     }   
?>
