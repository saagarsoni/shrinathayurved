<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<form action="manage_cart.php" method="post" class="product p-2">
   
<!-- Product Description Page -->
<main class="container py-5">
  <div class="row">
    <div class="col-lg-6">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/orangeSquash1.jpg" alt="Orange Squash" class="w-100 img-fluid">
          </div>
          <div class="carousel-item">
            <img src="./images/orangeSquash2.jpg" alt="Orange Squash" class="w-100 img-fluid">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <p class="card-text"><b><span>&#8377;</span> 180 for 750 ml</b></p>
      <form action="manage_cart.php" method="post">
        <button type="submit" name="addToCart" class="btn bg-success text-light fw-bold w-100">
          Add To Cart <i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="item_name" value="orangeSquash">
        <input type="hidden" name="price" value="1">
      </form>
    </div>
    <div class="col-lg-6">
      <div class="w-100 fs-6 bg-warning p-1 fw-bold fs-4 rounded text-center">
        Orange Squash
      </div>
      <p id="orangeSquashDetail" class="text-sm-start lh-sm"></p>
    </div>
  </div>
</main>

<style>

/* Product Page Styles */
main {
  font-family: Arial, sans-serif;
}

.carousel-inner img {
  height: 400px;
  object-fit: cover;
}

.card-text {
  font-size: 1.5rem;
  color: #333;
}

.bg-success:hover {
  background-color: #2ecc71;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
  .carousel-inner img {
    height: 250px;
  }
  .col-lg-6 {
    flex: 0 0 100%;
    max-width: 100%;
  }
}
</style>
</form>
<script>
   //Orange Squash
   $("#orangeSquashDetail").load("./text/orangeSquashDetail.txt");
</script>