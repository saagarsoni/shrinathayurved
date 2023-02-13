<?php
// Connect to the MySQL database
$host = 'localhost';
$user = 'username';
$password = 'password';
$dbname = 'database_name';

$conn = mysqli_connect($host, $user, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert the data into the MySQL database table
$sql = "INSERT INTO form_data (name, email)
VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Data stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>