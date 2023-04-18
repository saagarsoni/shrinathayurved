<?php
$to = "sales@shrinathayurved.com";
$subject = "New Sales Bussiness Enquiry";
$headers = 'From: '.$companyName."\r\n".

$companyName = $_POST['companyName'];
   $registrationType = $_POST['registrationType'];
   $authPersonName = $_POST['authPersonName'];
   $presentBussinessName = $_POST['presentBussinessName'];
   $yearOfStartingBussiness = $_POST['yearOfStartingBussiness'];
   $noOfSalesPerson = $_POST['noOfSalesPerson'];
   $applicantFullName = $_POST['applicantFullName'];
   $gstNumber = $_POST['gstNumber'];
   $populationOfTown = $_POST['populationOfTown'];
   $numberOfRetailers = $_POST['numberOfRetailers'];
   $officialEmail = $_POST['officialEmail'];
   $mobileNumber = $_POST['mobileNumber'];
   $companyAddress = $_POST['companyAddress'];
   $constitution = $_POST['constitution'];
   $investmentCapibility = $_POST['investmentCapibility'];
   $state = $_POST['state'];
   $district = $_POST['district'];
   $tehsil = $_POST['tehsil'];
   $pinCode = $_POST['pinCode'];

   $message = "From Company: $companyName \r\n" .
      "registrationType : $registrationType \r\n" .
      "authPersonName : $authPersonName \r\n" .
      "presentBussinessName : $presentBussinessName \r\n" .
      "yearOfStartingBussiness  : $yearOfStartingBussiness \r\n" .
      "noOfSalesPerson  : $noOfSalesPerson \r\n" .
      "applicantFullName : $applicantFullName \r\n" .
      "gstNumber : $gstNumber \r\n" .
      "populationOfTown : $populationOfTown \r\n" .
      "numberOfRetailers : $numberOfRetailers \r\n" .
      "officialEmail : $officialEmail \r\n" .
      "mobileNumber : $mobileNumber \r\n" .
      "companyAddress : $companyAddress \r\n" .
      "constitution : $constitution \r\n" .
      "investmentCapibility : $investmentCapibility \r\n" .
      "state : $state \r\n" .
      "district : $district \r\n" .
      "tehsil : $tehsil \r\n" .
      "pinCode : $pinCode \r\n";

//  mail($to, $subject, $message);
//  mail($to, $subject, $message,$headers);
//  header("Location: http://www.shrinathayurved.com/");


if (mail($to, $subject, $message)) {

   echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
   <strong>Congratulations !</strong> You Request is  Successfully Submitted.<br>We will Connect with you in next 24 hrs
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
   
   } else {
   
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error !</strong> Error Occured....!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
   
   }

  exit;
?>