<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
  <style>
    .navbar-nav {
      flex-direction: row;
    }
    .nav-item {
      padding-left: 15px;
      padding-right: 15px;
    }
    .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem;
    }
    @media (max-width: 992px) {
      .navbar-nav {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1671950229/shrinathAyurved/logo_lcqcwu.jpg" width="90" height="33">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
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
      <div class="d-flex align-items-center">
        <?php
        $count = 0;
        if (isset($_SESSION['cart'])) {
          $count = count($_SESSION['cart']);
        }

        if (basename($_SERVER['PHP_SELF']) == 'product.php') {
          echo '<a href="myCart.php" class="btn btn-outline-success">My Cart (' . $count . ')</a>';
        }
        ?>
      </div>
      <div class="d-flex align-items-center">
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

        if (empty($_SESSION['loggedIn'])) {
          ?>
          <!-- <div class="m-2">
            <a href="login.php" class="btn btn-outline-success">Login</a>
          </div> -->
          <?php
        }

        if (isset($_SESSION['uName']) && !empty($_SESSION['uName'])) {
          ?>
          <div class="m-2">
            <a href="logout.php" name="logoutButton" class="btn btn-outline-success tooltiptext">Logout</a>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
</nav>
</body>
</html>
