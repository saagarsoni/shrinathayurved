<?php
 declare(strict_types=1);
// Connect to the MySQL database
$host = 'localhost';
$user = 'upkvwkyf_shrinathAyurved';
$password = '5nj*VW9*7';
$dbname = 'upkvwkyf_shrinathAyurved';

$conn = mysqli_connect($host, $user, $password, $dbname);
if(!$conn)
{
  die("Error".mysqli_connect_error());
}
?>