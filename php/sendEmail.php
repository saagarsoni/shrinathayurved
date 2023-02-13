<?php
$to = "saagarsoniwork@gmail.com";
$subject = "New Contact Enquiry";
$headers = "From: Saagar Soni" ;

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];

$message = "From: $name \r\n".
                   "Email Id : $email \r\n".
                   "Phone No : $phone \r\n".
                   "Message : $message \r\n";

echo $_POST['name'];
echo $_POST['email'];
echo $_POST["phone"];
echo $_POST["message"];

 mail($to, $subject, $message);
?>
