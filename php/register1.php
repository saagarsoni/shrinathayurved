<?php
// Connect to the MySQL database
$host = 'localhost';
$user = 'root';
$password = 'server@123';
$dbname = 'shrinathAyurved';

$conn = mysqli_connect($host, $user, $password, $dbname);

// // Check if the connection was successful
// if (!$conn) {
//     die('Connection failed: ' . mysqli_connect_error());
// }

// Retrieve the form data
$emailId = strip_tags($_POST['emailId']);
$mobileNumber = strip_tags($_POST['mobileNumber']);
$addr = strip_tags($_POST['addr']);
$state = $_POST['state'];
$district = $_POST['district'];
$passwd = strip_tags(password_hash($_POST['passwd'],PASSWORD_DEFAULT));

echo "Email=$emailId<br>Mobile=$mobileNumber<br>Address =$addr<br>State=$state<br>District=$district<br>Password=$passwd ";
// Insert the data into the MySQL database table
// $sql = "INSERT INTO `tblregister`(`id`, `name`, `phone`, `email`, `address`, `state`, `district`, `password`, `tdate`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')";

// if (mysqli_query($conn, $sql)) {
//     echo "Registered successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// // Close the connection
// mysqli_close($conn);
?>