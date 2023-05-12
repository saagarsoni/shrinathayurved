<?php
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

// Number of records to display per page
$records_per_page = 3;

// Retrieve the total number of records from the database
$sql = "SELECT COUNT(*) FROM tblbusinessregister";
$result = mysqli_query($conn, $sql);
$total_records = mysqli_fetch_array($result)[0];

// Calculate the total number of pages
$total_pages = ceil($total_records / $records_per_page);

// Retrieve the current page number from the URL query string
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting record number for the current page
$starting_record = ($current_page - 1) * $records_per_page;

// Retrieve the records for the current page from the database
if (isset($_GET['search'])) {
   $search = $_GET['search'];
   $sql = "SELECT * FROM tblbusinessregister WHERE id LIKE '%$search%' OR companyName LIKE '%$search%' OR registrationType LIKE '%$search%' LIMIT $starting_record, $records_per_page";
} else {
   $sql = "SELECT * FROM tblbusinessregister LIMIT $starting_record, $records_per_page";
}
// if (isset($_GET['reset']))
// {
//    echo 'Hi There';

// }

$result = mysqli_query($conn, $sql);

// // Retrieve the records for the current page from the database
// $sql = "SELECT * FROM tblbusinessregister LIMIT $starting_record, $records_per_page";
// $result = mysqli_query($conn, $sql);

// Display the search form
echo "<form method='GET' style='margin: 20px auto; text-align: center;'>";
echo "<label for='search'>Search:</label>";
echo "<input type='text' name='search' id='search' value='" . (isset($_GET['search']) ? $_GET['search'] : '') . "'>";
echo "<input type='submit' value='Search' style='margin-left:5'>";
echo "<input type='submit' id='reset' name='reset' value='Reset'  onclick='resetSearch()' style='margin-left:5'>";
echo "</form>";



// Display the records in a table
echo "<table style='margin: 0 auto; border-collapse: collapse;'>";
echo "<tr style='background-color: #ddd;'>";
echo "<th style='border: 1px solid #ddd; padding: 8px;'>ID</th>";
echo "<th style='border: 1px solid #ddd; padding: 8px;'>Company Name</th>";
echo "<th style='border: 1px solid #ddd; padding: 8px;'>Registration Type</th>";
echo "<th style='border: 1px solid #ddd; padding: 8px;'>Actions</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($result)) {
   echo "<tr style='border: 1px solid #ddd;'>";
   echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row['id'] . "</td>";
   echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row['companyName'] . "</td>";
   echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row['registrationType'] . "</td>";
   echo "<td style='border: 1px solid #ddd; padding: 8px;'>";
   // Storingthe cipher method
   $ciphering = "AES-128-CTR";

   // Using OpenSSl Encryption method
   $iv_length = openssl_cipher_iv_length($ciphering);
   $options = 0;

   // Non-NULL Initialization Vector for encryption
   $encryption_iv = '1234567891033321';

   // Storing the encryption key
   $encryption_key = "shrinathAyurved";

   // Using openssl_encrypt() function to encrypt the data
   $encryption = openssl_encrypt($row['id'], $ciphering, $encryption_key, $options, $encryption_iv);


   echo "<a href='details.php?id=" . $encryption . "'>View Details</a>";
   echo "</td>";
   echo "</tr>";
}
echo "</table>";

// Display the pagination links
// echo "<div style='margin: 0 auto; border-collapse: collapse;>";
// for ($page = 1; $page <= $total_pages; $page++) {
//     echo "<a href='myhome.php?page=$page'>$page</a> ";
// }
// echo "</div>";

// Display the pagination links
echo "<div style='margin: 5px auto; text-align: center;'>";
for ($i = 1; $i <= $total_pages; $i++) {
   if ($i == $current_page) {
      echo "<span style='font-weight: bold;'>" . $i . "</span>";
   } else {
      echo "<a href='?page=" . urlencode($i) . "&search=" . (isset($_GET['search']) ? $_GET['search'] : '') . "'>" . $i . "</a>";
   }
   echo " ";
}
echo "</div>";

// Close the database connection
mysqli_close($conn);
?>
<script>
function resetSearch() {
  document.querySelector("input[name='search']").value = '';
//   location.reload();
//   window.location.href = window.location.pathname;
// var url = window.location.href.split('?')[0];
//   history.replaceState({}, '', url);
// history.pushState({}, null, window.location.pathname);
//   location.reload();
// window.history.replaceState({}, '', window.location.pathname);
//   location.reload();
// window.location.reload();
// window.history.replaceState({}, '', window.location.pathname);
//   location.reload();
// header("location:adminArea/index.php");
}
</script>