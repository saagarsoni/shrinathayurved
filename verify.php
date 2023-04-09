<?php
include('php/dbcs.php');
if (isset($_GET['email']) && isset($_GET['vCode'])) {
   $query = "SELECT * FROM `tblregister` WHERE email='$_GET[email]' and verificationCode='$_GET[vCode]'";
   $result = mysqli_query($conn, $query);
   if ($result) {
      if (mysqli_num_rows($result) == 1) {
         $result_fetch = mysqli_fetch_assoc($result);
         if ($result_fetch['isVerified'] == 0) {
            $update = "UPDATE `tblregister` SET `isVerified`='1' where email='$result_fetch[email]'";
            if (mysqli_query($conn, $update)) {
               echo "<script>alert('You Have Successfully Verified Your Account.');</script>";
               echo "<script>window.location.href ='index.php'; </script>";
            } else {
               echo "<script>alert('Oops...Email Verification Failed');</script>";
               echo "<script>window.location.href ='index.php'; </script>";
            }
         } else {
            echo "<script>alert('Email Already Verified.');</script>";
            echo "<script>window.location.href ='index.php'; </script>";
         }
      }
   } else {
      echo "<script>alert('Server Error Occoured.');</script>";
      echo "<script>window.location.href ='index.php'; </script>";
   }
}
?>