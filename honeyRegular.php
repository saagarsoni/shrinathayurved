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
                <img src="./images/honeyR1.jpg" class=" w-100 img-fluid" alt="Lemon Squash"style="height: 400px;">
            </div>
            <div class="carousel-item">
                <img src="./images/honeyR2.jpg" class=" w-100 img-fluid" alt="Lemon Squash"  style="height: 450px;">
            </div>
            <div class="carousel-item">
                <img src="./images/honeyR3.jpg" class=" w-100 img-fluid" alt="Lemon Squash"  style="height: 450px;">
            </div>
            <div class="carousel-item">
                                <a data-bs-toggle="modal" data-bs-target="#honeyYoutubeModal">
                                    <img src="./images/youtube-logo.png" class="imageResize w-100 img-fluid">
                                </a>
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
    <p class="card-text"><b> <span>&#8377;</span> 225 For 500 gm</b></p>
    <button type="submit" name="addToCart" style="width: 100%;" class="btn bg-success text-light fw-bold">Add To Cart <i
            class="fas fa-shopping-cart"></i></button>
    <input type="hidden" name="item_name" value="Honey Regular">
    <input type="hidden" name="price" value="1">
</div>
         <div class="col-lg-6">
            <div class="w-100 fs-6 bg-warning p-1 fw-bold fs-4 rounded text-center">Honey Regular</div>
               <p id="honeyDetail" class="text-sm-start lh-sm"></p>
         </div>
      </div>
   </div>

        <!-- Youtube Modal Start-->
        <div class="modal fade" id="honeyYoutubeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Shrinath Ayurved Honey</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/8nGSf5yrn4Q"
                            title="SHRINATH AYURVED HONEY" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Youtube Modal End-->
</form>

<script>
   //Lemon Squash
   $("#honeyDetail").load("./text/honeyDetail.txt");

   $("#honeyYoutubeModal").on("hidden.bs.modal", function () {
        var _this = this,
            youtubeSrc = $(_this).find("iframe").attr("src");

        if ($(_this).find("iframe").length > 0) {                     // checking if there is iframe only then it will go to next level
            $(_this).find("iframe").attr("src", "");                // removing src on runtime to stop video
            $(_this).find("iframe").attr("src", youtubeSrc);        // again passing youtube src value to iframe
        }
    });
</script>