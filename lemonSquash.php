<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<form action="manage_cart.php" method="post" class="product p-2">
   <!-- Product Description Page -->
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center border rounded bg-info my-3">
            <h3>Lemon Squash</h3>
         </div>
         <div class="col-lg-6">
            <img src="./images/lemonSquash.jpg"
               class="imageResize img-fluid mx-auto d-block object-fit: scale-down; thumbnail border borer-2"
               alt="Lemon Squash" />
            <p class="card-text "><b> <span>&#8377;</span> 180 for 750 ml</b> </p>
            <button type="submit" name="addToCart" style="width: 100%;" class=" btn bg-success text-light fw-bold">Add To Cart <i
                  class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="item_name" value="lemonSquash">
            <input type="hidden" name="price" value="1">
         </div>

         <div class="col-lg-6">
            <div class="w-100 fs-6 bg-warning">Details</div>
            <div class="overflow-y-auto" style="height:18%">
               <p id="lemonSquashDetail" class="text-sm-start lh-sm"></p>
            </div>

            <div class="w-100 fs-6 bg-warning">Ingredients</div>
            <div class="overflow-y-auto" style="height:18%">
               <p id="lemonSquashIngredients" class="text-sm-start lh-sm"></p>
            </div>

            <div class="w-100 fs-6 bg-warning">Nutritional Facts</div>
            <div class="overflow-y-auto" style="height:18%">
               <p id="lemonSquashFacts" class="text-sm-start lh-sm"></p>
            </div>

            <!-- <div class="w-100 fs-6 bg-warning">Price</div>
            <div class="overflow-y-auto" style="height:18%">
               <p><span>&#8377;</span> 180 for 750 ml</p>
            </div> -->

         </div>
      </div>
   </div>
</form>
<script>
   //Lemon Squash
   $("#lemonSquashCard").load("./text/lemonSquashCard.txt");
   $("#lemonSquashDetail").load("./text/lemonSquashDetail.txt");
   $("#lemonSquashIngredients").load("./text/lemonSquashIngredients.txt");
   $("#lemonSquashFacts").load("./text/lemonSquashFacts.txt");
</script>