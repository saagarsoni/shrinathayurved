<?php
include("header.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cart</title>
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
               <h5 class="text-right" id="gtotal"> </h5>
               <br>
               <?php
               if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                  ?>
                  <form action="purchase.php" method="post">
                     <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Please Enter Full Name"
                           Required>
                     </div>

                     <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone_no" placeholder="Enter Phone Number" Required>
                     </div>

                     <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" placeholder="Enter Full Address" cols="30" rows="10"
                           Required></textarea>
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
         gtotal.innerText = '\u20B9 '+gt;
      }
      subTotal();
   </script>
</body>

</html>