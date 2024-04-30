<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

<form action="manage_cart.php" method="post" class="product p-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center border rounded bg-info my-3">
        <h3>Quench Your Thirst with Our Refreshing Lemon Squash</h3>
      </div>
      <div class="col-lg-6">
        <img src="./images/lemonSquash.jpg"
          class="imageResize img-fluid mx-auto d-block object-fit: scale-down; thumbnail border border-2"
          alt="Lemon Squash" />
        <p class="card-text"><b>
            <span>₹</span> 180 for 750 ml
          </b>
        </p>
        <button type="submit" name="addToCart" style="width: 100%;" class="btn bg-success text-light fw-bold">
          Add to Cart <i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="item_name" value="lemonSquash">
        <input type="hidden" name="price" value="180">
      </div>

      <div class="col-lg-6">
        <div class="w-100 fs-6 bg-warning">Details</div>
        <div class="overflow-y-auto" style="height:18%">
          <p class="text-sm-start lh-sm">
            Crafted with real lemons, our refreshing lemon squash is the perfect way to beat the heat and quench your thirst
            naturally. Enjoy it chilled on its own, add it to sparkling water for a bubbly delight, or use it to create
            delicious cocktails. Made without artificial flavors or preservatives, it's a healthy and flavorful choice for
            any occasion.
          </p>
        </div>

        <div class="w-100 fs-6 bg-warning">Ingredients</div>
        <div class="overflow-y-auto" style="height:18%">
          <p class="text-sm-start lh-sm">
            Water, lemon juice, sugar, citric acid, natural flavors.
          </p>
        </div>

        <div class="w-100 fs-6 bg-warning">Nutritional Facts</div>
        <div class="overflow-y-auto" style="height:18%">
          <p class="text-sm-start lh-sm">
            Serving size: 250ml (1 cup)<br>
            Calories: 80<br>
            Total Carbohydrates: 20g<br>
            Sugars: 18g<br>
            Vitamin C: 10% Daily Value
          </p>
        </div>
      </div>
    </div>
  </div>
</form>
