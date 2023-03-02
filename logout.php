<?php
session_start();
$showMsg = false;
if (!empty($_SESSION['loggedIn'])) {
   session_destroy();
   unset($_SESSION['loggedIn']);
   unset($_SESSION['uName']);
   //header("location:login.php");
   $showMsg = true;
   // echo'Logout Successful';
}
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Logout</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

   <div class="alert alert-warning text-center" role="alert">
      <strong>Logout Successful</strong><br><a href="login.php" class="alert-link">Click To Login</a><br>
      <a href="index.php" class="alert-link">Go To Home</a>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
</body>

</html>