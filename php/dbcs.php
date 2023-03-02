<?php
// Connect to the MySQL database
$host = 'localhost';
$user = 'root';
$password = 'server@123';
$dbname = 'shrinathAyurved';

$conn = mysqli_connect($host, $user, $password, $dbname);
if($conn)
{
   //echo "Success";
}
else
{
   
   die("Error".mysqli_connect_error());
}

?>