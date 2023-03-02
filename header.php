<?php
session_start();
// session_destroy();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<header class="header py-3">
  <div class="container">
  </div>
</header>

<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary"> -->
<nav class="navbar navbar-expand-lg bg-light fixed-top">
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
        <div class="m-2">
          <a href="login.php" class="btn btn-outline-success">Login</a>
        </div>
        <?php
      }
      ?>

      <?php

      if (isset($_SESSION['uName']) && !empty($_SESSION['uName'])) {

        ?>
        <form action="logout.php">

          <div class="m-2">
            <a href="logout.php" name="logoutButton" class="btn btn-outline-success">Logout</a>
          </div>
        </form>
        <?php
      }
      ?>
    </div>
  </div>
</nav>