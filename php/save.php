<?php
// Establish database connection (replace 'localhost', 'username', 'password', and 'database_name' with your actual database credentials)
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user information from session
$fullname = $_SESSION['fullname'];
$email = $_SESSION['email'];
$phone_number = $_SESSION['phone_number'];
$address = $_SESSION['address'];

// Retrieve cart items from session
$cart_items = $_SESSION['cart'];

// Insert user information into the database
//$sql = "INSERT INTO users (fullname, email, phone_number, address) VALUES ('$fullname', '$email', //'$phone_number', '$address')";
$sql="INSERT INTO `tbluser` (`id`, `full_name`, `email`, `phone_number`, `address`, `tdate`) VALUES (NULL, '$fullname', '$email', '$phone_number', '$address', current_timestamp())";
if ($conn->query($sql) === TRUE) {
    $user_id = $conn->insert_id; // Get the ID of the inserted user
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Insert cart items into the database
foreach ($cart_items as $item) {
    $product_id = $item['id'];
    $product_name = $item['name'];
    $price = $item['price'];
    $quantity = $item['quantity'];
    $total = $item['total'];

    $sql = "INSERT INTO cart_items (user_id, product_id, product_name, price, quantity, total) VALUES ('$user_id', '$product_id', '$product_name', '$price', '$quantity', '$total')";
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
