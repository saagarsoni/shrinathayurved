<! DOCTYPE html>
   <html>

   <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   </head>
   <title> Confirm Purchase </title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <style>
      body {
         margin: auto;
         margin-top: 25px;
         width: 50%;
         border: 2px solid green;
         padding: 5px;
         height: 84%;
      }
   </style>
   <?php
   session_start();
   include ('payment/Authentication.php');
   $encData = null;

   //New Test Credentials
$clientCode = 'DCRBP';
$username = 'userph.jha_3036';
//$username = 'nishant.jha_3036';
$password = 'DBOI1_SP3036';
$authKey = '0jeOYcu3UnfmWyLC';
$authIV = 'C28LAmGxXTqmK0QJ';
   
   //Live Credentials
   // $clientCode = 'TUSH99';
   // $username = 'contact_8349';
   // $password = 'TUSH99_SP8349';
   // $authKey = '010odVxdUGZNTjFd';
   // $authIV = 'Sr6Uh4RSLAItInMY';

   $payerName = $_POST['fullname'];
   $payerEmail = $_POST['email'];
   $payerMobile = $_POST['phone_no'];
   $payerAddress = $_POST['address'];
   // Retrieve and unserialize the cart data
  $cartData = unserialize(base64_decode($_POST['cart_data']));

// Serialize and encode cart data for passing to the next page
$encodedCartData = base64_encode(serialize($cartData));
   
   $clientTxnId = rand(1000, 9999);

   //$amount = $_COOKIE['tAmount'];
   //$amount = $_POST['gtotal'];
   $amount1 = (float) preg_replace('/[^\d.]/', '', $_POST['gtotal']);
   $amount = $amount1;
   //echo "<br>";
    //echo "Total Amount = " . $amount1;
   // echo "<br>";
   $amountType = 'INR';
   $mcc = 5137;
   $channelId = 'W';
   $callbackUrl = 'http://localhost/shrinathAyurved/Payment/SabPaisaPostPgResponse.php';
   //$callbackUrl = 'http://localhost/shrinathAyurved/testpage.php';
   //$callbackUrl = 'http://localhost/shrinathAyurved/confirm.php';
   
   $encData = "?clientCode=" . $clientCode . "&transUserName=" . $username . "&transUserPassword=" . $password . "&payerName=" . $payerName .
      "&payerMobile=" . $payerMobile . "&payerEmail=" . $payerEmail . "&payerAddress=" . $payerAddress . "&clientTxnId=" . $clientTxnId .
      "&amount=" . $amount . "&amountType=" . $amountType . "&mcc=" . $mcc . "&channelId=" . $channelId . "&callbackUrl=" . $callbackUrl."&udf1=$encodedCartData";
   //."&udf1=".$Class."&udf2=".$Roll;
   
   $AesCipher = new AesCipher();
   $data = $AesCipher->encrypt($authKey, $authIV, $encData);
   ?>
   </head>
   

   <body>
      <?php
      

      // Retrieve cart data from session
      if (isset($_SESSION['cart_data'])) {
         $cartData = $_SESSION['cart_data'];
         // Display cart items for confirmation
         foreach ($cartData as $item) {
            echo "Item Name: " . $item['item_name'] . ", Price: " . $item['price'] . ", Quantity: " . $item['quantity'] . " Total Qty: " . ($item['price']) * ($item['quantity']) . "<br>";
         }
      } else {
         // Handle case when cart data is not set
         echo "Cart is empty.";
         exit();
      }
      
// Check if the form is submitted and the gtotal value is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["gtotal"])) {
   // Retrieve the gtotal value from the POST data
   $gtotal = $_POST["gtotal"];
   // Now you can use $gtotal as needed, for example:
   echo "Grand Total: " . $gtotal;
   echo "<label> ( Rs. 45 Shipping Charges Included. )</label><br>";
} else {
   // If the form is not submitted or gtotal value is not set, handle the case accordingly
   echo "No Grand Total value received.";
}
      ?>

      <form action="https://stage-securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1" method="post">
      <!-- <form action="https://securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1" method="POST"> -->
         <div class="p-2 fs-5 text-center fw-bold">Please Verify Below Details
         </div>
         <!-- Full Name -->
         <div class="input-group mb-1  ">
            <span class="input-group-text">Full Name</span>
            <input type="text" class="form-control" value="<?php echo $_POST["fullname"] ?>" readonly>
         </div>
         <!-- Email -->
         <div class="input-group mb-1">
            <span class="input-group-text">Email</span>
            <input type="text" class="form-control" value="<?php echo $_POST['email'] ?>" readonly>
         </div>
         <!-- Phone Number -->
         <div class="input-group mb-1 ">
            <span class="input-group-text">Phone Number</span>
            <input type="text" class="form-control" value="<?php echo $_POST['phone_no'] ?>" readonly>
         </div>
         <!-- Address -->
         <div class="input-group mb-1 ">
            <span class="input-group-text">Address</span>
            <input type="text" class="form-control" value="<?php echo $_POST['address'] ?>" readonly>
         </div>

         <button class="btn btn-warning btn-block form-control text-center" name="purchase">Continue Purchase</button>
         <div>
            <input type="text" class="form-control" value="<?php echo $clientCode ?>" readonly>
            <input type="text" class="form-control" value="<?php echo $data ?>" readonly>
         </div>
         <div>

         </div>
         <!-- Hidden Field -->
         <div class="d-none">
            <input type="hidden" name="encData" class="d-none" value="<?php echo $data ?>" id="frm1">
            <input type="hidden" name="clientCode" class="d-none" value="<?php echo $clientCode ?>" id="frm2">
            <input type="hidden" name="cartData" class="d-none" value="<?php echo $cartData?>" id="frm3"> 
            
         </div>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
         crossorigin="anonymous"></script>
   </body>

   </html>