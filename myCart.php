<?php
include("header.php");
session_start();
include('php/dbcs.php');
// include('Payment/Authentication.php');
// include('Payment/SabPaisaPostPgRequest.php');
include('Payment/SabPaisaPostPgResponse.php');

// session_destroy();
// error_reporting(0);
ini_set('error_reporting', 0);
ini_set('display_errors', 0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (isset($_POST['purchase'])) {
      
      if (!isset($_SESSION['loggedIn']) && empty($_SESSION["uName"])) {
         //echo "User Name Is " . $_SESSION["uName"] . ".<br>";
          print_r($_SESSION['uName']);

         echo '<div class="alert alert-warning text-center py-5 mt-5" role="alert">
         Please <a href="login.php" class="alert-link">Login</a>&nbsp;to Purchase.
       </div>';
      } else {
         //echo "Welcome " . $_SESSION["uName"] . ".<br>";
      }
   }
}

$sql = "SELECT * FROM tblregister where id='{$_SESSION['uId']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while ($row = $result->fetch_assoc()) {
      // echo "id: " . $row["id"] ."<br>". "Name: " . $row["name"] . " <br>" ."Phone Number: ". $row["phone"] ."<br>"."Email: " . $row["email"]." " ."<br>"."Address: ". $row["address"]. "<br>";
      //echo var_dump($row);
      $GLOBALS['userName']=$row["name"];
      $GLOBALS['cellPhone']=$row["phone"];
      $GLOBALS['userAddress']=$row["address"];
   }
} else {
   echo "0 results";
}

//Payment Code
include 'Authentication.php';

$encData=null;

$clientCode='NITE5';
$username='Ish988@sp';
$password='wF2F0io7gdNj';
$authKey='zvMzY0UZLxkiE6ad';
$authIV='iFwrtsCSw3j7HG15';

$payerName='Test YUVRAJ';
$payerEmail='Testyuvraj@sabpaisa.in';
$payerMobile='9988776655';
$payerAddress='BSL, Maharashtra';

$clientTxnId=rand(1000,9999);
$amount=3;
$amountType='INR';
$mcc=5137;
$channelId='W';
$callbackUrl='http://localhost/shrinathAyurved/Payment/SabPaisaPostPgResponse.php';
              
// Extra Parameter you can use 20 extra parameters(udf1 to udf20)
//$Class='VIII';
//$Roll='1008';

$encData="?clientCode=".$clientCode."&transUserName=".$username."&transUserPassword=".$password."&payerName=".$payerName.
"&payerMobile=".$payerMobile."&payerEmail=".$payerEmail."&payerAddress=".$payerAddress."&clientTxnId=".$clientTxnId.
"&amount=".$amount."&amountType=".$amountType."&mcc=".$mcc."&channelId=".$channelId."&callbackUrl=".$callbackUrl;
//."&udf1=".$Class."&udf2=".$Roll;
				
$AesCipher = new AesCipher(); 
$data = $AesCipher->encrypt($authKey, $authIV, $encData);

?>

<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
   <title>Cart</title>
   <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
</head>
<header class="header py-3">
   <div class="container">
   </div>
</header>

<body>
<form action="https://stage-securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1"method="post">
<!-- <form th:action="@{ https://securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1}" th:method="post"> -->
<input type="hidden" name="encData" th:value="${encData}" id="frm1">
<input type="hidden" name="clientCode" th:value="${clientCode}" id="frm2">
<input type="submit" id="submitButton" name="submit">
<form>

   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center border rounded bg-info my-3">
            <h1>My Cart</h1>
         </div>

         <div class="col-lg-9">
            <table class="table">
               <thead class="text-left">
                  <tr>
                     <th scope="col">S.No</th>
                     <th scope="col">Name</th>
                     <th scope="col">Price</th>
                     <th scope="col">Quantity</th>
                     <th scope="col">Total</th>
                     <th scope="col"></th>
                  </tr>
               </thead>
               <tbody class="text-left">
                  <?php
                  // $total=0; 
                  if (isset($_SESSION['cart'])) {

                     foreach ($_SESSION['cart'] as $key => $value) {
                        //print_r($value);
                        $sr = $key + 1;
                        // $total=$total+$value['price'];
                        echo "
                  <tr>
                  <td>$sr</td>
                  <td>$value[item_name]</td>
                  <td><span>&#8377; </span>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                  
                  <td>
                     <form action='manage_cart.php' method='post'>
                        <input type='number' onchange='this.form.submit();' name='mod_quantity' class='text-center iquantity' value='$value[quantity]' min='1' max='10'>
                        <input type='hidden' name='item_name' value='$value[item_name]'>
                     </form>
                  </td>
                  
                  <td class='itotal'></td>
                  <td>
                  <form action='manage_cart.php' method='post'>
                  <button name='remove_item' class='btn btn-sm btn-outline-danger'>Remove</button>
                  <input type='hidden' name='item_name' value='$value[item_name]'>
                  </form>
                  </td>
                  </tr>
                  ";
                     }
                  }
                  ?>
               </tbody>
            </table>
         </div>

         <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
               <h4>Grand Total</h4>
               <h5 class="text-right" id="gtotal"> </h5>
               <br>
               <?php
               if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                  ?>
                  <form action="myCart.php" method="post">
                     <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Please Enter Full Name"
                           value="<?php echo $userName ?>" readonly>
                     </div>

                     <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone_no" placeholder="Enter Phone Number"
                           value="<?php echo $cellPhone ?>" readonly>
                     </div>

                     <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control"
                           placeholder="Enter Full Address" cols="30" rows="10" readonly><?php echo $userAddress ?></textarea>
                     </div>

                     <!-- <div class="form-check">
                        <input class="form-check-input" name="pay_mode" value="COD" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                           Cash On Delivery
                        </label>
                     </div> -->
                     <br>
                     <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
                  </form>
                  <?php
               }
               ?>
            </div>


         </div>


      </div>
   </div>

   <script>
      var gt = 0;
      var iprice = document.getElementsByClassName('iprice');
      var iquantity = document.getElementsByClassName('iquantity');
      var itotal = document.getElementsByClassName('itotal');
      var gtotal = document.getElementById('gtotal');

      function subTotal() {
         gt = 0;
         for (i = 0; i < iprice.length; i++) {
            itotal[i].innerText = '\u20B9 ' + (iprice[i].value) * (iquantity[i].value);
            gt = gt + (iprice[i].value) * (iquantity[i].value);
         }
         gtotal.innerText = '\u20B9 ' + gt;
      }
      subTotal();
   </script>
</body>

</html>