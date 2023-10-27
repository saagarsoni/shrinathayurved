<?php 
session_start();
include 'Authentication.php';

$encData=null;

//Test Credentials
$clientCode='NITE5';
$username='Ish988@sp';
$password='wF2F0io7gdNj';
$authKey='zvMzY0UZLxkiE6ad';
$authIV='iFwrtsCSw3j7HG15';

// $payerName='Test YUVRAJ';
// $payerEmail='Testyuvraj@sabpaisa.in';
// $payerMobile='9988776655';
// $payerAddress='BSL, Maharashtra';

// $clientTxnId=rand(1000,9999);
// $amount=3;
// $amountType='INR';

//Storing Form Values to 
$payerName = $_POST['fullname'];
$payerEmail = $_POST['email'];
$payerMobile = $_POST['phone_no'];
$payerAddress = $_POST['address'];

$clientTxnId = rand(1000, 9999);
$amount = $_COOKIE['tAmount'];

$amountType = 'INR';
$mcc = 5137;


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

<form action="https://stage-securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1"method="post">
<input type="hidden" name="encData" value="<?php echo $data?>" id="frm1">
<input type="hidden" name="clientCode" value ="<?php echo $clientCode?>" id="frm2">
<input type="submit" id="submitButton" name="submit">
</form>