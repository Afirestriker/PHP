<?php require('dbConnection.php'); ?>

<?php 

	try{
		if(isset($_GET)){

			$id = $_REQUEST['id'];
			
			$deleteQuery = "DELETE FROM employee WHERE id=$id";

			$stmt = $conn->prepare($deleteQuery);

			$stmt->execute();

			$rowCount = $stmt->rowcount();

			if($rowCount){
				header("Location: viewEmployeeDetails.php?status=deleteSuccess&id=".$id);
				exit;
			}
		}
	}
	catch(PDOException $e){
		echo "Exception: <br>: " . $e->getMessage();
	}

?>