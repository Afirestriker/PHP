
<!-- Check is user is eligible to vote -->

<<!DOCTYPE html>
<html>
<head>
	<title>Vote Eligibility</title>
</head>
<body>

	<?php
		if($_POST["age"] >= 18)
		{
			echo "Eligible to Vote";
		}
		else
		{
			echo "Not Eligible to vote";
		}
	?>

</body>
</html>
