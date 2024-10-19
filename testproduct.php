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
         <!-- Left Section: Carousel -->
         <div class="col-lg-6 col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="./images/honeyR1.jpg" class="w-100 img-fluid" alt="Honey Regular">
                  </div>
                  <div class="carousel-item">
                     <img src="./images/honeyR2.jpg" class="w-100 img-fluid" alt="Honey Regular">
                  </div>
                  <div class="carousel-item">
                     <img src="./images/honeyR3.jpg" class="w-100 img-fluid" alt="Honey Regular">
                  </div>
                  <div class="carousel-item">
                     <a data-bs-toggle="modal" data-bs-target="#honeyYoutubeModal">
                        <img src="./images/youtube-logo.png" class="w-100 img-fluid" alt="YouTube Video">
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
            <p class="card-text mt-2"><b><span>&#8377;</span> 225 For 500 gm</b></p>
            <button type="submit" name="addToCart" class="btn bg-success text-light fw-bold w-100">
               Add To Cart <i class="fas fa-shopping-cart"></i>
            </button>
            <input type="hidden" name="item_name" value="Honey Regular">
            <input type="hidden" name="price" value="225">
         </div>

         <!-- Right Section: Product Information -->
         <div class="col-lg-6 col-md-12 mt-3 mt-lg-0">
            <div class="bg-warning p-2 fw-bold fs-4 rounded text-center">Honey Regular</div>
            <p id="honeyDetail" class="text-start lh-sm mt-2"></p>
         </div>
      </div>
   </div>

   <!-- YouTube Modal -->
   <div class="modal fade" id="honeyYoutubeModal" tabindex="-1" aria-labelledby="youtubeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="youtubeModalLabel">Shrinath Ayurved Honey</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <iframe width="100%" height="400" src="https://www.youtube.com/embed/8nGSf5yrn4Q"
                  title="Shrinath Ayurved Honey" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
</form>

<!-- jQuery Script for Content Loading -->
<script>
   $("#honeyDetail").load("./text/honeyDetail.txt");

   // Pause YouTube video when modal is closed
   $("#honeyYoutubeModal").on("hidden.bs.modal", function () {
      var youtubeSrc = $(this).find("iframe").attr("src");
      $(this).find("iframe").attr("src", ""); // Remove src to stop video
      $(this).find("iframe").attr("src", youtubeSrc); // Reapply src
   });
</script>
