<?php
// $to_email = "saagarsoniwork@gmail.com";
// $subject = "Simple Email Test via PHP";
// $body = "Hi, This is test email send by PHP Script";
// $headers = "From: saagarsoni3@gmail.com ";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>