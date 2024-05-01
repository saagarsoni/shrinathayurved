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
         <div class="col-lg-6">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/gulkand-19.jpg" class=" w-100 img-fluid" alt="Gulkand"style="height: 400px;">
            </div>
            <div class="carousel-item">
                <img src="./images/gulkand-20.jpg" class=" w-100 img-fluid" alt="Gulkand"  style="height: 450px;">
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
    <p class="card-text"><b> <span>&#8377;</span> 190 for 500 gm</b></p>
    <button type="submit" name="addToCart" style="width: 100%;" class="btn bg-success text-light fw-bold">Add To Cart <i
            class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="item_name" value="Gulkand">
                        <input type="hidden" name="price" value="2">
</div>
         <div class="col-lg-6">
            <div class="w-100 fs-6 bg-warning p-1 fw-bold fs-4 rounded text-center">Gulkand</div>
               <p id="gulkandDetail" class="text-sm-start lh-sm"></p>
         </div>
      </div>
   </div>
</form>
<script>
   //Lemon Squash
   $("#gulkandDetail").load("./text/gulkandDetail.txt");
</script>