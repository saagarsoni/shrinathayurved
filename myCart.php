<?php
include("header.php");
//include 'Authentication.php';
include 'Payment/SabPaisaPostPgResponse.php';
session_start();
include('php/dbcs.php');
error_reporting(0);

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['purchase'])) 
//     {
if (!isset($_SESSION['loggedIn']) && empty($_SESSION["uName"])) {
   //echo "User Name Is " . $_SESSION["uName"] . ".<br>";
   print_r($_SESSION['uName']);

   echo '<div class="alert alert-warning text-center py-5 mt-5" role="alert">
         Please <a href="login.php" class="alert-link">Login </a>&nbsp;/ Fill Below Details to Purchase.
       </div>';
} 
// else {
//    //echo "Welcome " . $_SESSION["uName"] . ".<br>";
// }
//     }
// }

$sql = "SELECT * FROM tblregister where id='{$_SESSION['uId']}'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   // output data of each row
   while ($row = $result->fetch_assoc()) {
      //echo "id: " . $row["id"] . "<br>" . "Name: " . $row["name"] . " <br>" . "Phone Number: " . $row["phone"] . "<br>" . "Email: " . $row["email"] . " " . "<br>" . "Address: " . $row["address"] . "<br>";
      
      //echo var_dump($row);
      
      // $session['user_Name'] = $row["name"];
      // $session['cell_Phone'] = $row["phone"];
      // $session['e_mail'] = $row["email"];
      // $session['user_Address'] = $row["address"];
   }
} else {
   //echo "0 results";
}
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
               <h5 class="text-right" id="gtotal" name="gtotal"> </h5>
               <br>
               <?php
               if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0)
                {
                  ?>

                  <form action="confirm.php" method="post">
                     <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname"
                           placeholder="Please Enter Full Name" required value="<?php echo $session['user_Name'] ?>">
                     </div>
                     <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Please Enter Email"
                           required value="<?php echo $session['e_mail'] ?>">
                     </div>
                     <div class="mb-3">
                        <label class="form-label">Phone Number(+91)</label>
                        <input type="text" pattern="[789][0-9]{9}" maxlength="10" class="form-control" name="phone_no"
                           id="phone_no" placeholder="Enter Phone Number" required
                           value="<?php echo $session['cell_Phone'] ?>">
                     </div>
                     <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" id="address" class="form-control" placeholder="Enter Full Address"
                           cols="30" rows="6" required><?php echo $session['user_Address'] ?></textarea>
                     </div>
                     <button class="btn btn-warning btn-block form-control" name="purchase" onclick="validation()">Make
                        Purchase</button>
                     <!-- Hidden Field -->
                     <input type="hidden" name="encData" value="<?php echo $data ?>" id="frm1">
                     <input type="hidden" name="clientCode" value="<?php echo $clientCode ?>" id="frm2">
                  </form>
                  <?php
               }
               ?>
            </div>
         </div>
      </div>
   </div>

   <script>
      var myvar = '<?php echo $$_SESSION['loggedIn']; ?>';
      var gt = 0;
      var iprice = document.getElementsByClassName('iprice');
      var iquantity = document.getElementsByClassName('iquantity');
      var itotal = document.getElementsByClassName('itotal');
      var gtotal = document.getElementById('gtotal');
      var tAmsount = document.getElementById('tAmount');

      function subTotal() {
         gt = 0;
         for (i = 0; i < iprice.length; i++) {
            itotal[i].innerText = '\u20B9 ' + (iprice[i].value) * (iquantity[i].value);
            gt = gt + (iprice[i].value) * (iquantity[i].value);
         }
         gtotal.innerText = '\u20B9 ' + gt;
      }
      subTotal();
      document.cookie = "tAmount=" + gtotal.innerText.slice(2);
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "http://localhost/shrinathAyurved/confirm.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
         if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            console.log("Variable stored successfully");
         }
      };
      xhr.send("myVariable=" + encodeURIComponent(gtotal.innerText.slice(2)));
      // Validations
      function validation() {
         if (myvar.length != 0) {
            document.getElementById("fullname").readonly = true;
            document.getElementById("email").readonly = true;
            document.getElementById("phone_no").readonly = true;
            document.getElementById("address").readonly = true;
         }
      }
   </script>
</body>
<?php
//  include('footer.php');
include('php/footer.php');
?>

</html>