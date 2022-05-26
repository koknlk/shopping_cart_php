<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Newdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//get data from database
  $sql = "SELECT * FROM Productdb";
  $result = $conn->query($sql);

 


?>