
<?php require "dbConnection.php" ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Employee Details</title>

	<link rel="stylesheet" type="text/css" href="../CSS/index.css">
</head>
<body>

	<div class="status">
		<?php
			/*here we use 'status' in if condition mandatoryly because, if we use only $_GET then it will throw error that 'status' is undefiend. Since it is set only when any insert, update or delete occur*/
			if(isset($_GET['status'])){
				if($_REQUEST['status'] == "insertSuccess"){?>
					<span>Data Inserted Successfully with ID <?php echo $_REQUEST['id'] ?></span>
				<?php }

				if($_REQUEST['status'] == "updateSuccess"){?>
					<span>Record with ID <?php echo $_REQUEST['id'] ?> Updated Successfully</span>
				<?php }

				if($_REQUEST['status'] == "deleteSuccess"){?>
					<span>Record with ID <?php echo $_REQUEST['id'] ?> Deleted Successfully</span>
				<?php }
			}
		?>
	</div>

<?php 
	$stmt = $conn->prepare("SELECT * FROM employee");
	$stmt->execute();
	$employees = $stmt->fetchAll();

	foreach ($employees as $employee) {
	?>
	<form action="updateEmployeeDetails.php" method="post">
		<div class="grid-container">
			
			<a class="navigate-link" href="index.php">Register New</a>

			<div class="spanGrid grid-item formTitle grid-item1">Employee #<?php echo $employee['id']; ?> Details
				<input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
			</div>

			<div class="grid-item grid-item2"><label> Firstname: </label> <br> <input type="name" name="firstname" placeholder="Firstname" value="<?php echo $employee['firstname']; ?>" > </div>
			
			<div class="grid-item grid-item3"> <label> Lastname: </label> <br> <input type="name" name="lastname" placeholder="Lastname" value="<?php echo $employee['lastname']; ?>"> </div>
			
			<div class="spanGrid grid-item grid-item4"> <label>Email:</label> <br> <input type="email" name="email" placeholder="Enter Email" value="<?php echo $employee['email']; ?>"> </div>

			<div class="grid-item grid-item5"><label>Mobile:</label> <br> <input type="number" name="mobile" placeholder="Mobile Number" value="<?php echo $employee['mobile']; ?>"> </div>

			<!-- Logic depends on gender value -->
			<div class="grid-item grid-item6">
				<label>Gender:</label> <br>
				<input type="radio" name="gender" value="M" <?php if($employee['gender'] == "M") { echo "checked"; } ?> >Male
				<input type="radio" name="gender" value="F" <?php if($employee['gender'] == "F") { echo "checked"; } ?>>Female
				<input type="radio" name="gender" value="O" <?php if($employee['gender'] == "O") { echo "checked"; } ?>>Other
			</div>
			<!-- Logic depends on gender value -->

			<div class="spanGrid grid-item grid-item7"><label>Address:</label> <br> <input type="name" name="address" placeholder="Address" value="<?php echo $employee['address']; ?>"> </div>

			<div class="spanGrid grid-item grid-item8">
				<button class="updateButton" style="background-color: indianred; border: none; margin-right: 20px;"><a href="deleteEmployeeDetails.php?id=<?php echo $employee['id']; ?>" > DELETE </a></button>
				
				<input class="updateButton" type="submit" value="UPDATE">
			</div>
		</div>
	</form>


<?php }//foreach close ?>

</body>
</html>