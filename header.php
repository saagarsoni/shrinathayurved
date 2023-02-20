<?php 
session_start();
// session_destroy();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary"> -->
<nav class="navbar navbar-expand-lg bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1671950229/shrinathAyurved/logo_lcqcwu.jpg" width="90" height="33">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="product.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactUsPage">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutus1">About Us</a>
          </li>
        
      </ul>
      <div>
        <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
        ?>
         <a href="myCart.php" class="btn btn-outline-success">My Cart (<?php echo $count;?>)</a>
      </div>
      <div class="m-2">
         <a href="login.php" class="btn btn-outline-success">Login</a>
      </div>
    </div>
  </div>
</nav>