<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Product Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/3Rax1h5DqJ/4En9/3yIHqgSOzK4e+U45hB6+w5" crossorigin="anonymous">
  <style>
    .product-image {
      height: 400px;
      object-fit: cover;
    }
    .product-description {
      font-size: 16px;
      line-height: 1.5;
    }
    .product-page {
      margin-top: 100px; /* Adjust based on your header height */
    }
  </style>
</head>
<body>
  <div class="container product-page">
    <div class="row">
      <div class="col-lg-6">
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://via.placeholder.com/600x400" class="d-block w-100 product-image" alt="Product Image 1">
            </div>
            <div class="carousel-item">
              <img src="https://via.placeholder.com/600x400" class="d-block w-100 product-image" alt="Product Image 2">
            </div>
            <div class="carousel-item">
              <img src="https://via.placeholder.com/600x400" class="d-block w-100 product-image" alt="Product Image 3">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-lg-6">
        <h2 class="my-3">Product Title</h2>
        <p class="product-description">
          This is a detailed description of the product. It includes features, benefits, and other relevant information that helps the customer make a purchasing decision.
        </p>
        <p class="product-price"><b>Price: &#8377; 240 (Pack Of 2)</b></p>
        <button type="button" class="btn btn-success w-100 my-2">Add to Cart</button>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz3VrPa8AZGzG7N0QUjdY3G8ga4iJc6AdYZkfx6UBByh" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-QnxglxmvcOLqtnA2bDbLwK4sTcwh9GMwIM8ux9h7Xk2y7NjQHFlpGS1BThjjv3vS" crossorigin="anonymous"></script>
</body>
</html>
