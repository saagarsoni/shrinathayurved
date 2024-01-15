<?php
session_start();
// session_destroy();
?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<header class="header py-3 d-none">
  <div class="container">
  </div>
</header>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
</head>
<nav class="navbar navbar-expand-lg bg-white fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1671950229/shrinathAyurved/logo_lcqcwu.jpg"
        width="90" height="33">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./#aboutus1">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./#contactUsPage">Contact Us</a>
        </li>
      </ul>
      <div>
        <?php
        $count = 0;
        if (isset($_SESSION['cart'])) {
          $count = count($_SESSION['cart']);
        }
        ?>
        <a href="myCart.php" class="btn btn-outline-success">My Cart (
          <?php echo $count; ?>)
        </a>
      </div>

      <?php

      if (isset($_SESSION['uName']) && !empty($_SESSION['uName'])) {

        ?>
        <div class="m-2">
          <label class="m-2 btn btn-success">
            Welcome &nbsp;
            <?php echo $_SESSION['uName']; ?>
          </label>
        </div>
        <?php
      }
      ?>

      <?php

      if (empty($_SESSION['loggedIn'])) {

        ?>
        <!-- <div class="m-2">
          <a href="login.php" class="btn btn-outline-success">Login</a>
        </div> -->
        <?php
      }
      ?>

      <?php

      if (isset($_SESSION['uName']) && !empty($_SESSION['uName'])) {

        ?>
        <!-- <form action="logout.php"> -->

          <div class="m-2 tooltiptext">
            <a href="logout.php" name="logoutButton" class="btn btn-outline-success tooltiptext" >
              Logout</a>
          </div>
        <!-- </form> -->
        <?php
      }
      ?>
    </div>
  </div>
</nav>