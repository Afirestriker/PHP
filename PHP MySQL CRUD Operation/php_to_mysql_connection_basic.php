<?php 

echo "PHP connection to MySQL using diffent methods<br><br>";

/*****************(MySQLi Object-Oriented)*****************/
$servername = "localhost";
$username = "root";
$password = "";
$database = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	echo "Database Connected successfully using MySQLi Object Oriented<br><br>";


/*****************(MySQLi Procedural)*****************/
$servername = "localhost";
$username = "root";
$password = "";
$database = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Database Connected successfully using MySQLi Procedural<br><br>";


/*****************(Php Data Object)*****************/
/*The major advantage of using pdo is that it has exception feature*/
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  
  // set the PDO error mode to exception
    /*
     *By default it is set to ERRORMODE_SILENT. Due to which php only shows 0 or 1, and not the reason. So we change it to ERRORMODE_EXCEPTION.
    */
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Database Connected successfully using PDO";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>