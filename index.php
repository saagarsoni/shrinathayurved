<?php

// include("header.php");
//  session_start();
//  if(!isset($_SESSION['loggdIn']) || $_SESSION['loggdIn']!=true)
//  {
//   header("location:login.php");
//   exit;

//  }
// ?>
<!doctype html>
<html lang="en">

<head>
<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
  <script type="text/javascript" src="./js/index.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Shrinath Ayurved</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

  <!-- contactUs CSS -->
  <link rel="stylesheet" type="text/css" media="screen" href="./css/contactUs.css" />

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" media="screen" href="./css/style.css" />
  <!-- To Read Text File -->
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/5ac440c930.js" crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>

  <!-- BootStrap Icon  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <style>
.warranty-container {
  display: flex;
  align-items: center;
  justify-content: center; /* Center align horizontally */
}

.warranty-icon,
.shipping-icon,
.secure-icon,
.gst-icon {
  margin-right: 5px;
  font-size: 75px; /* Increase icon size */
  padding: 10px;
  margin-right: 2px;

}

.warranty-text {
  font-size: 14px;
  color: #333;
  display: flex; */
   flex-direction: column;
  align-items: center; /* Center align text vertically */
  justify-content: center;
}
.text-line {
  margin-bottom: 5px; /* Add some vertical spacing between lines */
  text-align: center;
  margin-right: 100px;
  font-size: 20px;
}

.warranty-container .warranty-text span:not(:last-child)::after {
  content: "\00a0\00a0\00a0"; /* Add space between icons */
}



/* CSS */
.my-icon {
  
  animation: pop-up 0.3s ease-in-out; /* specify the animation property */
}

.my-icon:hover {
  transform: scale(1.2); /* set the desired size or scale factor for the icon on hover */
}

/* Add this CSS rule to reset the transform property after hover ends */
.my-icon:hover:after {
  transform: scale(1);
}

  </style>
</head>

<body>
  <!-- Header Start -->
  <header class="header py-3">
    <div class="container">
      <h3 class="text-center text-white">Header</h3>
    </div>
  </header>
  <!-- Header End -->

  <!-- Navigation Start -->
  <?php require('header.php') ?>
  <!-- Navigation End -->

  <!-- Image Carousel Start-->
  <div id="carouselExampleIndicators" class="carousel slide py-2" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1677238765/shrinathAyurved/Web1_xghx3j.jpg"
          class="d-block w-100 img-fluid">
      </div>
      <div class="carousel-item">
        <img src="./images/sharbatMix.jpg"
          class="d-block w-100 img-fluid">
      </div>
      <div class="carousel-item">
        <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1677238765/shrinathAyurved/Web2_t0zhbl.jpg"
          class="d-block w-100 img-fluid">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Image Carousel End-->
  <hr>
  <!-- Product List -->

  <h4 class="lead text-center p-2 bg-warning">
    <!-- There are wide range of products at Shrinath Ayurved, click to know more -->
    <a href="product.php"> Click Here</a>&nbsp;to know about more products
  </h4>

  <div class="warranty-container">
  <!-- <i class="fas fa-shield-alt warranty-icon" style="color:green;"></i> -->
  <span class="warranty-text">
    <!-- <span class="text-line">1 Year Warranty, 7 Days Replacement,</span> -->
    <i class="bi bi-truck shipping-icon my-icon" style="color:green;"></i>
    <!-- <i class="fas fa-sharp fa-regular fa-truck-fast shipping-icon" style="color:green;"></i> -->
    <span class="text-line">Free Shipping above, Rs 599</span>

    <i class="bi bi-shield-lock secure-icon my-icon" style="color:green;"></i>
    <!-- <i class="fas fa-regular fa-lock secure-icon" style="color:green;"></i> -->
    <span class="text-line">Secure Checkout</span>
    <i class="bi bi-receipt gst-icon my-icon" style="color:green;"></i>
    <!-- <i class="fas fa-receipt gst-icon" style="color:green;"></i> -->
    <span class="text-line">GST Billing</span>
  </span>
</div>


  <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active p-1">
        <a href="product.php">
          <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1675261473/shrinathAyurved/Final_eoulcc.jpg"
            class=" img-fluid">
        </a>
      </div>
    </div>
  </div> -->
  <!-- Marquee Start -->
<div style="background-color :#03C04A">
  <marquee width="100%" behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();"
    style="color:white; font-weight:bold">
    Free Delivery on Purchase Above <span>&#8377;</span> 599
    
  </marquee>
</div>



<div id="container-fluid"  data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1686916680/shrinathAyurved/FamilyPic_gnhtye.jpg"
          class="d-inline-block w-100 h-25">
      </div>
    </div>
  </div>

<!-- Marque End -->
  <div class="container-fluid py-5">
    <div>
      <!-- About Us Start -->
      <div class="container mt-5" id="aboutus1">
        <div class="row h-20 align-items-center">
          <div class="col-lg-12 col-sm-3">
            <h1 class="display-5 fs-1">About Us</h1>
            <p class="text-success fw-light mt-3" id="aboutus"></p>
          </div>
        </div>
        <hr>
      </div>
      <!-- About Us End -->

      <!-- Contact Us Start-->
      <div class="container" id="contactUsPage">
        <div class="row">
          <div class="col-sm-6 mt-5">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.604734717705!2d75.77983820819972!3d21.024658362630888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd9a60eaaaaaaab%3A0xe4d535534119dcfc!2sAYURVED%20INDIA%20-%20MANUFACTURER%20OF%20CHYWANPRASH!5e0!3m2!1sen!2sin!4v1675595778160!5m2!1sen!2sin"
              width="100%" height="520" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="col-sm-6">
            <form onsubmit="" action="./php/sendEmail.php" method="post">
              <h1 class="font-weight-light mt-2">Quick Contact</h1>
              <div class="mb-3">
                <input type="text" name="name" id="name" class="form-control" id="formGroupExampleInput"
                  placeholder="Name" required>
              </div>
              <div class="mb-3">
                <input type="text" id="email" name="email" class="form-control" id="formGroupExampleInput2"
                  placeholder="Email" required>
              </div>
              <div class="mb-3">
                <input type="text" id="phone" name="phone" class="form-control" id="numeric-input"
                  placeholder="Phone Number" maxlength="10"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                  onkeypress="validateInput(event)" required>
              </div>
              <div class="mb-3">
                <textarea name="message" cols="20" class="form-control" rows="9" placeholder="Enter Message"
                  required></textarea>
              </div>
              <button class="btn btn-primary" type="submit">Submit</button>
          </div>
          </form>
          <div class="col-sm-12">
            <div class="card mt-4 border-0 mb-4">
              <div class="row">
              <div class="col-lg-4 col-md-4">
                  <div class="card-body d-flex align-items-center c-detail pl-0">
                    <div class="mr-3 align-self-center p-4">
                      <i class="fa-solid fa-map-location-dot fa-3x"></i>
                    </div>
                    <div class="">
                      <h6 class="font-weight-medium">Office Address</h6>
                      <p class="">52 Ramayan Nagar,Varangaon Road.
                        <br> Bhusawal-425201,<br> District - Jalgaon,<br> State - Maharashtra
                      </p>
                    </div>
                  </div>
                </div>

              <div class="col-lg-4 col-md-4">
                  <div class="card-body d-flex align-items-center c-detail pl-0">
                    <div class="mr-3 align-self-center p-4">
                      <i class="fa-solid fa-map-location-dot fa-3x"></i>
                    </div>
                    <div class="">
                      <h6 class="font-weight-medium">Factory Address</h6>
                      <p class="">C 67,Khadke MIDC.
                        <br> Bhusawal-425201,<br> District - Jalgaon,<br> State - Maharashtra
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4">
                  <div class="card-body d-flex align-items-center c-detail pl-0">
                    <div class="mr-3 align-self-center p-4">
                      <i class="fa-solid fa-phone fa-3x"></i>
                    </div>
                    <div class="">

                      <h6 class="font-weight-medium">Phone</h6>
                      <p class=""><a href="tel:919960236066">+91-9960236066</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4">
                  <div class="card-body d-flex align-items-center c-detail pl-0">
                    <div class="mr-3 align-self-center p-4">
                      <i class="fa-solid fa-envelope fa-4x"></i>
                    </div>
                    <div class="">
                      <h6 class="font-weight-medium">Email</h6>
                      <p class=""><a href="mailto:contact@shrinathayurved.com">contact@shrinathayurved.com</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Contact Us End-->

      <!-- Footer -->
      <?php require('php/footer.php') ?>
      <!-- Footer -->

      <!-- Script Start -->
      <script src="https://smtpjs.com/v3/smtp.js">
      </script>
      <script>
        $("#aboutus").load("./text/aboutus");
      </script>
      <!-- Script End -->
      
</body>
</html>