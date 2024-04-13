<?php
include("header.php");
//include 'Payment/SabPaisaPostPgResponse.php';
session_start();
include('php/dbcs.php');
//error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', 1); 
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
   <style>
        /* CSS to hide the border of input elements */
        input[type="text"] {
            border: none;
        }
    </style>
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
         
            <table class="table" id ="tblmain">
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
                        $value['itotal'] = $value['price'] * $value['quantity'];
                        //session_start();
                        $_SESSION['myArray'] =$value;
                        $sr = $key + 1;
                        // $total=$total+$value['price'];
                        echo "
                        
                  <tr>
                  <td><input type='text' value='$sr' readonly></td>

                  <td><input type='text'  value='$value[item_name]' readonly></td>

                  <!--<td>$value[item_name]</td>-->
                  <td>
                  <span>&#8377; </span>$value[price]<input type='hidden' class='iprice' value='$value[price]'>
                  <input type='hidden' name='price[]' value='$value[price]' >
                  </td>
                  
                  <td>
                     <form action='manage_cart.php' method='post'>
                        <input type='number' onchange='this.form.submit();' name='mod_quantity' class='text-center iquantity' value='$value[quantity]' min='1' max='10'>
                        <input type='hidden' name='item_name' value='$value[item_name]'>
                     </form>
                  </td>
                  
                  <td class='itotal'>
                  <input type='text'  name='itotal'  value='$value[itotal]'  readonly>
                  </td>
                  
                  <td>
                  <form action='manage_cart.php' method='post'>
                  <button name='remove_item' class='btn btn-sm btn-outline-danger'>Remove</button>
                  <input type='hidden' name='item_name' value='$value[item_name]'>
                  </form>
                  </td>
                  </tr>
                  ";
                     }
                     print_r($_SESSION['cart']);
                     $_SESSION['cart_data'] = $_SESSION['cart'];
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
               if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0)
                {
                  ?>
                  <form action="confirm.php" method="post">
                     <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname"
                           placeholder="Please Enter Full Name" required value="">
                     </div>
                     <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Please Enter Email"
                           required value="">
                     </div>
                     <div class="mb-3">
                        <label class="form-label">Phone Number(+91)</label>
                        <input type="text" pattern="[789][0-9]{9}" maxlength="10" class="form-control" name="phone_no"
                           id="phone_no" placeholder="Enter Phone Number" required
                           value="">
                     </div>
                     <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" id="address" class="form-control" placeholder="Enter Full Address"
                           cols="30" rows="6" required></textarea>
                     </div>
        
                     <button class="btn btn-warning btn-block form-control" name="purchase" onclick="validation()">Make Purchase</button>
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
      var myvar = '<?php echo $_SESSION['loggedIn']; ?>';
      var iprice = document.getElementsByClassName('iprice');
      var iquantity = document.getElementsByClassName('iquantity');
      var itotal = document.getElementsByClassName('itotal');
      var gtotal = document.getElementById('gtotal');
      var tAmount = document.getElementById('tAmount');

      // function subTotal() {
      //    var gt = 0;
      //    for (var i = 0; i < iprice.length; i++) 
      //    {
      //       var subTotal=(iprice[i].value) * (iquantity[i].value);
      //       itotal[i].value='\u20B9 '+subTotal;
      //       gt+=subTotal;
      //    }
      // }
      // subTotal();

      function subTotal() {
    var gt = 0;
    for (var i = 0; i < iprice.length; i++) {
        var subTotal = (iprice[i].value) * (iquantity[i].value);
        itotal[i].value = '\u20B9 ' + subTotal;
        gt += subTotal;
    }
    // Display grand total
    gtotal.innerText = '\u20B9 ' + gt;
}
subTotal();

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
include('php/footer.php');
?>
</html>