<!-- Navigation Start -->
<?php require('header.php') ?>
<!-- Navigation End -->

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Return Policy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <style>
    h1.sticky {
      position: -webkit-sticky;
      position: sticky;
      top: 70;
      background-color: yellow;
      padding: 3px;
      font-size: 40px;
    }
  </style>
</head>

<body>
  <header class="header py-3 p-2">
    <div class="container">
      <h3 class="text-center text-white">Header</h3>
    </div>
  </header>
  <h6 class="text-start fst-italic">Updated March 14th, 2023</h6>
  <h1 class="text-center sticky">Return and Refund Policy</h1>
  <p id="privacyPolicyCard"></p>
  <!-- Footer -->
  <?php require('php/footer.php') ?>
  <!-- Footer -->
</body>

<script>
  $("#privacyPolicyCard").load("text/returnPolicy");
</script>

</html>