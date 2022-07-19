
<?php 

/*Mysql connection using Php Data Object method*/

try{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "demo";

  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
  catch(PDOException $e){
    echo "PDOException:" . $e->getMessage();
}

?>