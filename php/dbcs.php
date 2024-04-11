<?php
// Connect to the MySQL database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'shrinathayurved';

$conn = mysqli_connect($host, $user, $password, $dbname);
// if(!$conn)
// {
// //   die("Error".mysqli_connect_error());
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }
// Check connection
if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   exit();
 }
