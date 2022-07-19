<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>

	<link rel="stylesheet" type="text/css" href="../CSS/index.css">
</head>
<body>

	<form action="insertEmployeeDetails.php" method="post">
		<div class="grid-container">

			<a class="navigate-link" href="viewEmployeeDetails.php">View Employee Details</a>

			<div class="spanGrid grid-item formTitle grid-item1">Register</div>

			<div class="grid-item grid-item2"><label> Firstname: </label> <br> <input type="name" name="firstname" placeholder="Firstname" required > </div>
			
			<div class="grid-item grid-item3"> <label> Lastname: </label> <br> <input type="name" name="lastname" placeholder="Lastname" required> </div>
			
			<div class="spanGrid grid-item grid-item4"> <label>Email:</label> <br> <input type="email" name="email" placeholder="Enter Email" required> </div>

			<div class="grid-item grid-item5"><label>Mobile:</label> <br> <input type="number" name="mobile" placeholder="Mobile Number" minlength="10" maxlength="12" required> </div>

			<div class="grid-item grid-item6"><label>Gender:</label> <br> 
				<input type="radio" name="gender" value="M" required>Male
				<input type="radio" name="gender" value="F" required>Female
				<input type="radio" name="gender" value="O" required>Other
			</div>

			<div class="spanGrid grid-item grid-item7"><label>Address:</label> <br> <input type="name" name="address" placeholder="Address" required> </div>

			<div class="spanGrid grid-item grid-item8">
				<input type="submit" value="SUBMIT">
			</div>

		</div>
	</form>

</body>
</html>