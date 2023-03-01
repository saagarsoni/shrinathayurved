<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

  <title>Shrinath Ayurved</title>
  <script src="./js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<!-- Navigation Start -->
<?php require('header.php')?>
  <!-- Navigation End -->
  <!-- Stylesheet Start-->
<link rel="stylesheet" href="css/loginRegister.css">
<!-- Stylesheet End-->
<body>
  <!-- Login Start -->
  <div style="display: flex; align-items: center; height: 100vh;">
    <div class="container" style=" margin: auto;">
      <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-12 mx-auto">
          <form autocomplete="off">
            <h2>Login</h2>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <!-- <label class="form-check-label" for="exampleCheck1">Remember me</label> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="mt-3">
              <a class="form-check-label text-center" href="#" data-bs-toggle="modal"
                data-bs-target="#optionModal">Register Now</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Login End -->

  <!-- Choose Modal Start-->
  <div class="modal fade" id="optionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Please Choose Registration Type</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <a href="custReg.php"> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#customerRegistration">Customer Registration</button></a>
          <a href="businessReg.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#businessRegistration1">Bussiness Registration</button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Choose Modal End-->
</body>
<!-- Footer -->
<?php require('php/footer.php')?>
  <!-- Footer -->
</html>