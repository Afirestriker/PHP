
<?php  require "dbConnection.php" ?>

<?php

try{
  if($_SERVER['REQUEST_METHOD'] == "POST"){

    // Taking all 6 values from the form field and inserting into employee table of demo database
    $firstname =  $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $gender =  $_REQUEST['gender'];
    $address = $_REQUEST['address'];

    $insertQuery = "INSERT INTO employee (firstname, lastname, email, mobile, gender, address) VALUES ('$firstname', '$lastname', '$email', '$mobile', '$gender', '$address')";

    $stmt = $conn->prepare($insertQuery);

    $stmt->execute();

    $insertedId = $conn->lastInsertId();

    header("Location: viewEmployeeDetails.php?status=insertSuccess&id=".$insertedId);
    exit;

  }
  else
  {
    header("Location: viewEmployeeDetails.php?status=NoData");
    exit;    
  }

}
catch(PDOException $e){
  echo "Exception: <br>" . $e->getMessage();
}

?>