<?php
$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['loginButton'])) {
    include('php/dbcs.php');
    $emailId = strip_tags($_POST['emailId']);
    $passwd = $_POST['passwd'];

    $sqlQuery = "SELECT * FROM tblregister WHERE email='$emailId'";
    $result = mysqli_query($conn, $sqlQuery);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
      while ($row = mysqli_fetch_assoc($result)) {
        $userName = $row['name'];
        $userId=$row['id'];
        if (password_verify($passwd, $row['password'])) {
          $login = true;
          session_start();
          $_SESSION['loggedIn'] = true;
          $_SESSION['uName'] = $userName;
          $_SESSION['uId'] = $userId;

          header("location:index.php");
        } else {
          $showError = "Invalid Credentials";
        }
      }
    } else {
      $showError = "Invalid Credentials";

    }
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
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
<!-- Header Start -->
<header class="header py-3">
    <div class="container">
      <h3 class="text-center">Header</h3>
    </div>
  </header>
  <!-- Header End -->
<!-- Navigation Start -->
<?php require('header.php') ?>
<!-- Navigation End -->
<!-- Stylesheet Start-->
<link rel="stylesheet" href="css/loginRegister.css">
<!-- Stylesheet End-->
<?php
if ($login) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Welcome</strong>&nbsp' . $_SESSION['uName'] . ' You are Logged In
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($showError) {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Error</strong> ' . $showError . '
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<body>
  <!-- Login Start -->
  <div style="display: flex; align-items: center; height: 100vh;">
    <div class="container" style=" margin: auto;">
      <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-12 mx-auto">
          <form autocomplete="off" action="login.php" method="post">
            <h2>Login</h2>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="emailId" autofocus>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="passwd" autoComplete="new-password">
            </div>
            <button type="submit" name="loginButton" class="btn btn-primary mt-3 py-2">Login</button>
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
              data-bs-target="#businessRegistration">Bussiness Registration</button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Choose Modal End-->
</body>
<!-- Footer -->
<?php require('php/footer.php') ?>
<!-- Footer -->

</html>