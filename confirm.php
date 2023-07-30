<! DOCTYPE html>  
<html>  
<head>  
<title> JavaScript alert Box by PHP </title>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<meta charset ="utf-8">  
<style>  
body {  
    background-color: white;  
}  
</style> 
<?php   
include ('payment/Authentication.php');

// $myVariable = $_POST['myVariable'];

$encData=null;
$clientCode='NITE5';
$username='Ish988@sp';
$password='wF2F0io7gdNj';
$authKey='zvMzY0UZLxkiE6ad';
$authIV='iFwrtsCSw3j7HG15';

$payerName=$_POST['fullname'];
 $payerEmail=$_POST['email'] ;
 $payerMobile=$_POST['phone_no'];
 $payerAddress=$_POST['address'];

 $clientTxnId=rand(1000,9999);
$amount=20;

$amountType='INR';
$mcc=5137;
 $channelId='W';
// $callbackUrl='http://localhost/shrinathAyurved/myCart.php';
// $callbackUrl='http://localhost/shrinathAyurved/Payment/SabPaisaPostPgResponse.php';

$encData="?clientCode=".$clientCode."&transUserName=".$username."&transUserPassword=".$password."&payerName=".$payerName.
"&payerMobile=".$payerMobile."&payerEmail=".$payerEmail."&payerAddress=".$payerAddress."&clientTxnId=".$clientTxnId.
"&amount=".$amount."&amountType=".$amountType."&mcc=".$mcc."&channelId=".$channelId."&callbackUrl=".$callbackUrl;
//."&udf1=".$Class."&udf2=".$Roll;
            
$AesCipher = new AesCipher(); 
$data = $AesCipher->encrypt($authKey, $authIV, $encData);
  ?>  
</head>  
<body>  
<form action="https://stage-securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1" method="post">
                     <!-- <form action="confirm.php" method="post"> -->
                     <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Please Enter Full Name"
                           value="<?php echo $_POST['fullname']?>" >
                     </div>
                     <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Please Enter Email"
                           value="<?php echo $_POST['email'] ?>">
                     </div>
                     <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone_no" placeholder="Enter Phone Number"
                           value="<?php echo $_POST['phone_no'] ?>" >
                     </div>
                     <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control"
                           placeholder="Enter Full Address" cols="30" rows="7"><?php echo $_POST['address'] ?></textarea>
                     </div>
                     <button class="btn btn-warning btn-block form-control" name="purchase">Make Purchase</button>
                     <input type="text" class="form-control" value="<?php echo $clientCode?>" readonly>
                     <input type="text" class="form-control" value="<?php echo $data?>" readonly>
                     <input type="text" class="form-control" name="tAmount" id="tAmount" value="<?php echo $_COOKIE['tAmount']?>" readonly>
                     <!-- Hidden Field -->
                     <input type="hidden" name="encData" value="<?php echo $data?>" id="frm1">
                     <input type="hidden" name="clientCode" value ="<?php echo $clientCode?>" id="frm2">
                  </form>
</body>  
</html>  