<?php require "dbConnection.php" ?>

<?php 

	try{

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$id = $_REQUEST['id'];
			$firstname = $_REQUEST['firstname'];
			$lastname = $_REQUEST['lastname'];
			$email = $_REQUEST['email'];
			$mobile = $_REQUEST['mobile'];
			$gender = $_REQUEST['gender'];
			$address = $_REQUEST['address'];

			echo $id . "<BR>" . $firstname . "<BR>" . $lastname . "<BR>" . $email . "<BR>" . $mobile . "<BR>" . $gender . "<BR>" . $address . "<BR><BR>";

			$updateQuery = "UPDATE employee SET firstname = '$firstname', lastname='$lastname', email='$email', mobile='$mobile', gender='$gender', address='$address' WHERE id='$id' ";

			$stmt = $conn->prepare($updateQuery);

			$stmt->execute();

			header("Location: viewEmployeeDetails.php?status=updateSuccess&id=".$id);
			exit;
		}
		else{
		    header("Location: viewEmployeeDetails.php?status=NoData");
		    exit;
		}
	}
	catch(PDOException $e){
		echo "Exception: <br>" . $e->getMessage();
	}
?>
