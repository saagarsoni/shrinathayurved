<?php
include("encryptDecrypt.php");
// Database connection details
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "shrinathayurved";

// Create a database connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the ID from the query parameter
// Storingthe cipher method
$ciphering = "AES-128-CTR";
$options = 0;
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891033321';
// Storing the decryption key
$decryption_key = "shrinathAyurved";
// Using openssl_decrypt() function to decrypt the data
$id = openssl_decrypt($_GET['id'], $ciphering, $decryption_key, $options, $decryption_iv);

//echo $_GET['id'];

// Retrieve the record details from the database
$sql = "SELECT * FROM tblbusinessregister WHERE id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

// Display the record details on the page
echo "<h1>Record Details</h1>";
echo "<p>ID:" . $row['id'] . "</p>";
echo "<p>Company Name: " . $row['companyName'] . "</p>";
echo "<p>Registration Type: " . $row['registrationType'] . "</p>";
echo "<p>Auth Person Name: " . $row['authPersonName'] . "</p>";
echo "<p>Present Bussiness Name: " . $row['presentBussinessName'] . "</p>";
echo "<p>Year Of Starting Bussiness: " . $row['yearOfStartingBussiness'] . "</p>";
echo "<p>No Of Sales Person: " . $row['noOfSalesPerson'] . "</p>";
echo "<p>Applicant Full Name: " . $row['applicantFullName'] . "</p>";
echo "<p>GST Number: " . $row['gstNumber'] . "</p>";
echo "<p>Population Of Town(Lakh): " . $row['populationOfTown'] . "</p>";
echo "<p>No. Of Retailers: " . $row['numberOfRetailers'] . "</p>";
echo "<p>Official Email: " . $row['officialEmail'] . "</p>";
echo "<p>Mobile Number: " . $row['mobileNumber'] . "</p>";
echo "<p>Company Address: " . $row['companyAddress'] . "</p>";
echo "<p>Constitution: " . $row['constitution'] . "</p>";
echo "<p>Investement Capibility: " . $row['investmentCapibility'] . "</p>";
echo "<p>State: " . $row['state'] . "</p>";
echo "<p>Distrit: " . $row['district'] . "</p>";
echo "<p>Tehsil: " . $row['tehsil'] . "</p>";
echo "<p>Pin Code: " . $row['pinCode'] . "</p>";
echo "<p>Enquiry Date: " . date("d M Y", strtotime($row['tdate'])) . "</p>";

// Close the database connection
mysqli_close($conn);
?>