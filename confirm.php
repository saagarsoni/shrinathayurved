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
   include('payment/Authentication.php');
   $encData = null;
   //OldTest Credentials
// $clientCode='NITE5';
// $username='Ish988@sp';
// $password='wF2F0io7gdNj';
// $authKey='zvMzY0UZLxkiE6ad';
// $authIV='iFwrtsCSw3j7HG15';
   
//New Test Credentials
// $clientCode = 'DCRBP';
// $username = 'userph.jha_3036';
// $password = 'DBOI1_SP3036';
// $authKey = '0jeOYcu3UnfmWyLC';
// $authIV = 'C28LAmGxXTqmK0QJ';

   //Live Credentials
   $clientCode = 'TUSH99';
   $username = 'contact_8349';
   $password = 'TUSH99_SP8349';
   $authKey = '010odVxdUGZNTjFd';
   $authIV = 'Sr6Uh4RSLAItInMY';

   $payerName = $_POST['fullname'];
   $payerEmail = $_POST['email'];
   $payerMobile = $_POST['phone_no'];
   $payerAddress = $_POST['address'];
   //$myArray = $_SESSION['cart'];

   $clientTxnId = rand(1000, 9999);
   $amount = $_COOKIE['tAmount'];

   $amountType = 'INR';
   $mcc = 5137;
   $channelId = 'W';
   $callbackUrl = 'http://localhost:8082/shrinathAyurved/Payment/SabPaisaPostPgResponse.php';
   //$callbackUrl = 'http://localhost/shrinathAyurved/confirm.php';
   
   $encData = "?clientCode=" . $clientCode . "&transUserName=" . $username . "&transUserPassword=" . $password . "&payerName=" . $payerName .
      "&payerMobile=" . $payerMobile . "&payerEmail=" . $payerEmail . "&payerAddress=" . $payerAddress . "&clientTxnId=" . $clientTxnId .
      "&amount=" . $amount . "&amountType=" . $amountType . "&mcc=" . $mcc . "&channelId=" . $channelId . "&callbackUrl=" . $callbackUrl ;
   //."&udf1=".$Class."&udf2=".$Roll;
   
   $AesCipher = new AesCipher();
   $data = $AesCipher->encrypt($authKey, $authIV, $encData);
   ?>
   </head>

   <body>
      <?php
      session_start();


      // Retrieve cart data from session
if(isset($_SESSION['cart_data'])) {
   $cartData = $_SESSION['cart_data'];
// Display cart items for confirmation
foreach($cartData as $item) {
   echo "Item Name: " . $item['item_name'] . ", Price: " . $item['price'] . ", Quantity: " . $item['quantity'] ."Total Qty: " .( $item['price'] )* ($item['quantity']) . "<br>";
}
   
} else {
   // Handle case when cart data is not set
   echo "Cart is empty.";
   exit();
}

      // $_SESSION['cart_data'] = array();
      // foreach ($myArray as $record) {
      //    echo "Item Name: " . $record['item_name'] . ", Price: " . $record['price'] . ", Quantity: " . $record['quantity'] .", Total Qty: " .( $record['price'] )* ($record['quantity']) ."<br>";
      //    $_SESSION['cart_data'][] = $item;
      // }
      $orderId = rand(10000, 99999);
         echo "Order Id = ". $orderId;
         $grandTotal=$_COOKIE['tAmount'];
         echo '<br>';
         echo "Grand Total = ".$grandTotal;
      ?>

      <!-- <form action="https://stage-securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1" method="post"> -->
      <form action="https://securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1" method="POST">
         <div class="p-2 fs-5 text-center fw-bold">Please Verify Below Details
         </div>
         <!-- Full Name -->
         <div class="input-group mb-3  ">
            <span class="input-group-text">Full Name</span>
            <input type="text" class="form-control" value="<?php echo $_POST["fullname"] ?>" readonly>
         </div>
         <!-- Email -->
         <div class="input-group mb-3">
            <span class="input-group-text">Email</span>
            <input type="text" class="form-control" value="<?php echo $_POST['email'] ?>" readonly>
         </div>
         <!-- Phone Number -->
         <div class="input-group mb-3 ">
            <span class="input-group-text">Phone Number</span>
            <input type="text" class="form-control" value="<?php echo $_POST['phone_no'] ?>" readonly>
         </div>
         <!-- Address -->
         <div class="input-group mb-3 ">
            <span class="input-group-text">Address</span>
            <input type="text" class="form-control" value="<?php echo $_POST['address'] ?>" readonly>
         </div>

         <button class="btn btn-warning btn-block form-control text-center" name="purchase">Continue Purchase</button>
         <div>
            <input type="text" class="form-control" value="<?php echo $clientCode ?>" readonly>
            <input type="text" class="form-control" value="<?php echo $data ?>" readonly>
            <input type="text" class="form-control" name="tAmount" id="tAmount"
               value="<?php echo $_COOKIE['tAmount'] ?>" readonly>
         </div>
         <div>

         </div>
         <!-- Hidden Field -->
         <div class="d-none">
            <input type="hidden" name="encData" class="d-none" value="<?php echo $data ?>" id="frm1">
            <input type="hidden" name="clientCode" class="d-none" value="<?php echo $clientCode ?>" id="frm2">
         </div>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
         crossorigin="anonymous"></script>
   </body>

   </html>