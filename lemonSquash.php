<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<!-- Product Description Page -->
<div class="container">
   <div class="row">
      <div class="col-lg-12 text-center border rounded bg-info my-3">
         <h1>Lemon Squash</h1>
      </div>
      <div class="col-lg-6">
         <!-- Product Details -->
         <!-- <div class="card h-100 product" style="display: flex;"> -->
         <img src="./images/lemonSquash.jpg"
            class="imageResize img-fluid mx-auto d-block object-fit: scale-down; thumbnail" alt="Lemon Squash" />
         <!-- <div class="card-body"> -->
         <!-- <h5 class="card-title product-name">Lemon Squash</h5>
         <p class="card-text" id="lemonSquashCard"></p>
         <p class="card-text"><b> <span>&#8377;</span> 210 for 900 ml</b> </p> -->
         <!-- </div> -->
         <!-- </div> -->

      </div>
      <div class="col-lg-6">
         <!-- Accordion for Product Details -->
         <div class="accordion" id="accordionExample">
            <!-- Details -->
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                     aria-expanded="true" aria-controls="collapseOne">
                     Details
                  </button>
               </h2>
               <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                  <p id="lemonSquashDetail"></p>
                  </div>
               </div>
            </div>
            <!-- Ingredients -->
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     Ingredients
                  </button>
               </h2>
               <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                  <p id="lemonSquashIngredients"></p>
                  </div>
               </div>
            </div>
            <!-- Nutritional Facts -->
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Nutritional Facts
                  </button>
               </h2>
               <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                  <p id="lemonSquashFacts"></p>
                  </div>
               </div>
            </div>
            <!-- Price -->
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                     Price
                  </button>
               </h2>
               <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                     <p><span>&#8377;</span> 210 for 900 ml</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   //Lemon Squash
   $("#lemonSquashCard").load("./text/lemonSquashCard.txt");
    $("#lemonSquashDetail").load("./text/lemonSquashDetail.txt");
    $("#lemonSquashIngredients").load("./text/lemonSquashIngredients.txt");
    $("#lemonSquashFacts").load("./text/lemonSquashFacts.txt");
   </script>