<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (isset($_POST['addToCart'])) {
      if (isset($_SESSION['cart'])) {
         $myitems = array_column($_SESSION['cart'], 'item_name');
         if (in_array($_POST['item_name'], $myitems)) {
            //print_r($_SESSION['cart']);
            //echo "<script>alert('Item Already Added');</script>";
            echo "<script>window.location.href ='product.php'; </script>";
         } else {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array('item_name' => $_POST['item_name'], 'price' => $_POST['price'], 'quantity' => 1);
            //print_r($_SESSION['cart']);
            //echo "<script>alert('Item Added');</script>";
            echo "<script>window.location.href ='product.php'; </script>";
         }
      } else
    {
         $_SESSION['cart'][0] = array('item_name' => $_POST['item_name'], 'price' => $_POST['price'], 'quantity' => 1);
         //print_r($_SESSION['cart']);
         //echo "<script>alert('Item Added');</script>";
         echo "<script>window.location.href ='product.php'; </script>";
      }
   }
   if (isset($_POST['remove_item'])) {
      foreach ($_SESSION['cart'] as $key => $value) {
         if ($value['item_name'] == $_POST['item_name']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo "<script>alert('Item Removed')</script>";
            echo "<script>window.location.href ='myCart.php'; </script>";
         }
      }
   }
   if (isset($_POST['mod_quantity'])) {
      foreach ($_SESSION['cart'] as $key => $value) {
         if ($value['item_name'] == $_POST['item_name']) {
            $_SESSION['cart'][$key]['quantity'] = $_POST['mod_quantity'];
            //print_r($_SESSION['cart']);
            echo "<script>window.location.href ='myCart.php'; </script>";
         }
      }
   }
}