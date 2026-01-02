 
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "crud_devops_database";


  $conn = mysqli_connect($host, $user, $password, $database);


  if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
   }
 
