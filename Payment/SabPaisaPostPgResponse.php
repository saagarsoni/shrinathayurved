<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>
</html>

<?php
error_reporting(E_ALL ^ E_NOTICE);

include ('Authentication.php');
$query = $_REQUEST['encResponse'];
//LC
//$authKey = '010odVxdUGZNTjFd';
//$authIV = 'Sr6Uh4RSLAItInMY';

//TC
 $authKey = '0jeOYcu3UnfmWyLC';
 $authIV = 'C28LAmGxXTqmK0QJ';

$decText = null;
$AesCipher = new AesCipher();
$decText = $AesCipher->decrypt($authKey, $authIV, $query);
//echo $decText;

// $amount= $_COOKIE['tAmount'];

$token = strtok($decText, "&");
//echo $token;
$i = 0;

/* response value After Decryption
payerName=YUVRAJ MISHRA&payerEmail=yuvraj.mishra@sabpaisa.in&payerMobile=7004069540&clientTxnId=1907&payerAddress=NA&amount=10.0
&clientCode=NITE5&paidAmount=10.1&paymentMode=Debit Card&bankName=BOB&amountType=INR&status=FAILED&statusCode=0300&challanNumber=null
&sabpaisaTxnId=883602112220421050&sabpaisaMessage=Sorry, Your Transaction has Failed.&bankMessage=DebitCard&bankErrorCode=null
&sabpaisaErrorCode=null&bankTxnId=101202235510088892&transDate=Wed Dec 21 16:26:28 IST 2022&udf1=NA&udf2=NA&udf3=NA&udf4=NA&udf5=NA
&udf6=NA&udf7=NA&udf8=NA&udf9=null&udf10=null&udf11=null&udf12=null&udf13=null&udf14=null&udf15=null&udf16=null&udf17=null&udf18=null
&udf19=null&udf20=nulli- */

session_start();

$cartData = $_SESSION['cart_data'];
print_r($cartData); // or var_dump($cartData);

while ($token !== false) {
    $i = $i + 1;
    $token1 = strchr($token, "=");
    $token = strtok("&");
    $fstr = ltrim($token1, "=");

    //echo "i-". $i . '='. $fstr;
    //echo '<br>';

    //echo $fstr;
    if ($i == 2)
        $payerEmail = $fstr;
    if ($i == 3)
        $payerMobile = $fstr;
    if ($i == 4)
        $clientTxnId = $fstr;
    if ($i == 5)
        $payerAddress = $fstr;
    if ($i == 6)
        $amount = $fstr;
    if ($i == 7)
        $clientCode = $fstr;
    if ($i == 8)
        $paidAmount = $fstr;
    if ($i == 9)
        $paymentMode = $fstr;
    if ($i == 10)
        $bankName = $fstr;
    if ($i == 11)
        $amountType = $fstr;
    if ($i == 12)
        $status = $fstr;
    if ($i == 13)
        $statusCode = $fstr;
    if ($i == 14)
        $challanNumber = $fstr;
    if ($i == 15)
        $sabpaisaTxnId = $fstr;
    if ($i == 16)
        $sabpaisaMessage = $fstr;
    if ($i == 17)
        $bankMessage = $fstr;
    if ($i == 18)
        $bankErrorCode = $fstr;
    if ($i == 19)
        $sabpaisaErrorCode = $fstr;
    if ($i == 20)
        $bankTxnId = $fstr;
    if ($i == 21)
        $transDate = $fstr;

    if ($token == true) {

        // $up = "UPDATE  buy_now SET txid='$pgTxnId', tx_dt='$transDate', status='1' WHERE student_id='$userid'";
        //$up = "UPDATE  buy_now SET txid='$pgTxnId', tx_dt='$transDate', status=1 WHERE student_id=$ufd20";
        // echo $up;
        //  mysqli_query($conn,$up);	    
    }
}
echo "<br>";
echo 'Amount=' . $amount;
echo "<br>";
echo 'Status=' . $status;
echo "<br>";
echo 'Code=' . $statusCode;
echo "<br>";
echo 'FSTR=' . $fstr;

if ($status === 'SUCCESS' && $statusCode === '0000') {
    // Connect to the MySQL database
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'shrinathayurved';

    $conn = mysqli_connect($host, $user, $password, $dbname);
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    } else {

        // Decode the URL-encoded string
        $decodedText = urldecode($decText);

        // Explode the string into an array using "&" as the delimiter
        $parts = explode("&", $decodedText);

        // Define an associative array to store key-value pairs
        $parsedData = [];

        // Loop through each part and split it into key and value
        foreach ($parts as $part) {
            // Split each part into key and value
            list($key, $value) = explode("=", $part);

            // Store the key-value pair in the associative array
            $parsedData[$key] = $value;
        }

        // Now you can access specific values using their keys
        $payerName = $parsedData['payerName'];
        $payerMobile = $parsedData['payerMobile'];
        $payerEmail = $parsedData['payerEmail'];
        $payerAddress = $parsedData['payerAddress'];

        // Print the values
        //echo "Payer Name: $payerName<br>";
        //echo "Payer Mobile: $payerMobile<br>";
        //echo "Payer Email: $payerEmail<br>";
        // Similarly, you can access other values like payerMobile, payerEmail, etc.

        if (isset($_SESSION['cart_data'])) {
            $cartData = $_SESSION['cart_data'];
            $fullname = $payerName;
            $email = $payerEmail;
            $phone_number = $payerMobile;
            $address = $payerAddress;

            $sqlQuery = "INSERT INTO `tbluser` (`id`, `full_name`, `email`, `phone_number`, `address`, `tdate`) VALUES (NULL, '$fullname', '$email', '$phone_number', '$address', current_timestamp())";

            $result = mysqli_query($conn, $sqlQuery);

            if ($result) {
                $user_id = $conn->insert_id; // Get the ID of the inserted user
                //echo "<br>";
                //echo "User Id is  = " . $user_id;

                // Generate a unique order ID
                $orderId = uniqid();

                //echo "<br>";
                //var_dump($_SESSION['cart_data']);
                // Loop through each item in the cart
                foreach ($cartData as $item)
                // foreach ($_SESSION['cart'] as $record) 
                {
                    // Escape variables for security to prevent SQL injection
                    $productName = mysqli_real_escape_string($conn, $item['item_name']);
                    $productPrice = mysqli_real_escape_string($conn, $item['price']);
                    $productQty = mysqli_real_escape_string($conn, $item['quantity']);
                    $productTotal = $productPrice * $productQty;

                    // Prepare INSERT statement for transaction details
                    $sql_transaction = "INSERT INTO tbltrans (id,userId,orderId,productName,productPrice,productQty,productTotal,tDate) VALUES (NULL,'$user_id','$orderId','$productName','$productPrice','$productQty','$productTotal',current_timestamp())";

                    //echo "<br>";
                    //echo $sql_transaction;
                    // Execute transaction query
                    $result1 = mysqli_query($conn, $sql_transaction);
                }
            } else {
                // Handle case when cart data is not set
                echo "<br>";
                echo "Cart is empty.";
                echo "<br>";
                //var_dump($_SESSION['cart_data']);
                exit();
            }

            if ($result1) {
                echo '<br>';
                //echo "New record created successfully";
                echo '<div class="alert alert-success alert-dismissible fade show w-50" role="alert">
                <strong>Success!</strong><br>Your Order with ID: ' . $orderId . '  is Successfully placed...!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"  onclick="redirectToHomePage()"></button>
                </div>';
            } else {
                echo '<br>';
                //echo '<div class="text-center fs-5 fw-bold alert alert-danger" role="alert"> Something Went Wrong... </div>';
                echo "Error: " . $sql_transaction . "<br>" . $conn->error;
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>OOPS!</strong><br>Server Error Occured...!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        } else {
            echo '<div class="text-center fs-5 fw-bold alert alert-danger" role="alert"> Something Went Wrong... </div>';
        }
    }
} else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>OOPS!</strong><br>Some Error Occured...!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
// Close database connection
//$conn->close();
?>
<script>
    function redirectToHomePage() {
        // Redirect to the home page
        window.location.href = "http://localhost:8082/shrinathAyurved/index.php"; //  home page
    }
</script>

<div class="page-content-wrapper">
    <div class="page-content">
        <!-- <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Payment Success Page</div>
                </div>
            </div>
        </div>  -->
        <br>
        <!-- <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-body " id="bar-parent2">
                        <div class="row">
                        <h4>Thank You, Your paymednt for Rs. <?php echo round($whatIWant, 2) ?>  </h4>   -->
        <!-- <h1>Thank You, Your payment for Rs. <?php echo $amount; ?> is <?= $status; ?>. You can have your reciept by clicking on print button given below. </h1> -->
        <!-- <div class="col-md-6 col-sm-6">
                                    <a href="pdf/fpdf/add_receipt.php?user_id=<?php echo $userid ?>&pay_type=Pros_Fee" class="btn btn-success" target="_blank">Print Receipt</a>
                                    <a href="download_prospectus.php?user_id=<?php echo $userid ?>" class="btn btn-primary">Download Prospectus</a>
                                    <br>
                                     <br>
                                    <p> <span class="badge badge-sucess">Note:</span> You can print recipt any time if required.</p>
                                </div> -->
        <!-- </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->
    </div>
</div>