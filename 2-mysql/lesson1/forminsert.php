<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $conn->beginTransaction();
  
  $sql1 = "INSERT INTO products (productname	, price	, catid)
  VALUES ('rice2', '70', 0)";
  $sql2 = "INSERT INTO products (productname	, price	, catid)
  VALUES ('rice3', '50', 0)";
  $sql3 = "INSERT INTO products (productname	, price	, catid)
  VALUES ('rice4', '80', 0)";
  
  
  // use exec() because no results are returned
  $conn->exec($sql1);
  $conn->exec($sql2);
  $conn->exec($sql3);
  
   $conn->commit();
  echo "New records created successfully";
} catch(PDOException $e) {
  echo "error in insert to DB";
}

$conn = null;


?>