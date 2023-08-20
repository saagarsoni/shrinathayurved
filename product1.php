<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shrinath Ayurved</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

    <!--  CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/imageZoom.css" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- To Read Text File -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
</head>

<!-- Navigation Start -->
<?php require('header.php') ?>
<!-- Navigation End -->

<body>
    <header class="header py-3 p-2">
        <div class="container">
            <h3 class="text-center text-white">Header</h3>
        </div>
    </header>
    <div class="container-fluid row center py-20 p-2" style="background-color :#03C04A;color:#fff">
        <h2>Our Products</h2>
    </div>

    <div class="input-group my-2 p-2">
        <input type="text" class="form-control" placeholder="Type to Search Any Product" id="searchTextbox" autofocus>
        <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="clearText()">Clear</button>
    </div>
    <div class="container-fluid">
        <div class="row product">
            <div class="col-lg-3 mb-4 product">
                <div class="card product">
                    <img class="card-img-top" style="object-fit: scale-down;" width="250" height="250px" src="https://res.cloudinary.com/dvthtodtk/image/upload/v1674370361/shrinathAyurved/Chyawanprash_Front_e0k3fy.jpg" alt="Chawanprash_ Regular">

                    <div class="card-body Product">
                        <h6 class="card-title fw-bolder">Chyawanprash Regular(500 gm)</h6>
                        <p class="card-text" id="chawanprashCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 180 for 500 gm</b> </p>
                        <div class="d-flex">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#chawanprashRegular">Know More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
</div>
                        <input type="hidden" name="item_name" value="Chyawanprash Regular(500 gm)">
                        <input type="hidden" name="price" value="150">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="image/autumn-poolside.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the
                            card title and make up the bulk of the
                            card's content.
                        </p>

                        <a href="#" class="btn btn-primary btn-sm">
                            Know More
                        </a>
                        <a href="#" class="btn btn-primary btn-sm">
                            Add To Card
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="image/autumn-poolside.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the
                            card title and make up the bulk of the
                            card's content.
                        </p>

                        <a href="#" class="btn btn-outline-primary btn-sm">
                            Card link
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="image/autumn-poolside.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the
                            card title and make up the bulk of the
                            card's content.
                        </p>

                        <a href="#" class="btn btn-outline-primary btn-sm">
                            Card link
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="image/autumn-poolside.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the
                            card title and make up the bulk of the
                            card's content.
                        </p>

                        <a href="#" class="btn btn-outline-primary btn-sm">
                            Card link
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="image/autumn-poolside.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the
                            card title and make up the bulk of the
                            card's content.
                        </p>

                        <a href="#" class="btn btn-outline-primary btn-sm">
                            Card link
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>


   

    <!-- Footer -->
    <?php require('php/footer.php') ?>
    <!-- Footer -->
</body>

<script>
    $("#honeyYoutubeModal").on("hidden.bs.modal", function () {
        var _this = this,
            youtubeSrc = $(_this).find("iframe").attr("src");

        if ($(_this).find("iframe").length > 0) {                     // checking if there is iframe only then it will go to next level
            $(_this).find("iframe").attr("src", "");                // removing src on runtime to stop video
            $(_this).find("iframe").attr("src", youtubeSrc);        // again passing youtube src value to iframe
        }
    });

    //Dishwash Neem and Aloevera
    $("#dwNeemCard").load("./text/dwNeemCard.txt");
    $("#dwNeemDetail").load("./text/dwNeemDetail.txt");
    $("#dwNeemIngredients").load("./text/dwNeemIngredients.txt");
    $("#dwNeemFacts").load("./text/dwNeemFacts.txt");

    //Dishwash Lemon and Salt
    $("#dwLemonCard").load("./text/dwLemonCard.txt");
    $("#dwLemonDetail").load("./text/dwLemonDetail.txt");
    $("#dwLemonIngredients").load("./text/dwLemonIngredients.txt");
    $("#dwLemonFacts").load("./text/dwLemonFacts.txt");

    //Rose Sharbat
    $("#roseSharbatCard").load("./text/roseSharbatCard.txt");
    $("#roseSharbatDetail").load("./text/roseSharbatDetail.txt");
    $("#roseSharbatIngredients").load("./text/roseSharbatIngredients.txt");
    $("#roseSharbatFacts").load("./text/roseSharbatFacts.txt");

    //Khas
    $("#khasCard").load("./text/khasCard");
    $("#khasDetail").load("./text/khasDetail");
    $("#khasIngredients").load("./text/khasIngredients");
    $("#khasFacts").load("./text/khasFacts");

    //Gulkand
    $("#gulkandCard").load("./text/gulkandCard.txt");
    $("#gulkandDetail").load("./text/gulkandDetail.txt");
    $("#gulkandIngredients").load("./text/gulkandIngredients.txt");
    $("#gulkandFacts").load("./text/gulkandFacts.txt");

    //Chawanprash
    $("#chawanprashCard").load("./text/chawanprashCard.txt");
    $("#chawanprashCard1kg").load("./text/chawanprashCard.txt");
    $("#chawanprashDetail").load("./text/chawanprashDetail.txt");
    $("#chawanprashDetail1kg").load("./text/chawanprashDetail.txt");
    $("#chawanprashIngredients").load("./text/chawanprashIngredients.txt");
    $("#chawanprashIngredients1kg").load("./text/chawanprashIngredients.txt");
    $("#chawanprashFacts").load("./text/chawanprashFacts.txt");
    $("#chawanprashFacts1kg").load("./text/chawanprashFacts.txt");

    // Honey
    $("#honeyCard").load("./text/honeyCard.txt");
    $("#honeyDetail").load("./text/honeyDetail.txt");
    $("#honeyIngredients").load("./text/honeyIngredients.txt");
    $("#honeyFacts").load("./text/honeyFacts.txt");

    $("#honeyCard1").load("./text/honeyCard.txt");
    $("#honeyDetail1").load("./text/honeyDetail.txt");
    $("#honeyIngredients1").load("./text/honeyIngredients.txt");
    $("#honeyFacts1").load("./text/honeyFacts.txt");

    //Rose Water
    $("#roseWaterCard").load("./text/roseWaterCard.txt");
    $("#roseWaterDetail").load("./text/roseWaterDetail.txt");
    $("#roseWaterIngredients").load("./text/roseWaterIngredients.txt");
    $("#roseWaterFacts").load("./text/roseWaterFacts.txt");

    //Pottali
    $("#pottaliCard").load("text/pottaliCard.txt");
    $("#pottaliDetail").load("./text/pottaliDetail.txt");
    $("#pottaliFacts").load("./text/pottaliFacts.txt");

    //Search Function
    window.onload = function () {
        const searchTextbox = document.querySelector('input[type="text"]');
        const products = document.querySelectorAll('.product');

        searchTextbox.addEventListener('keyup', function () {
            const searchTerm = searchTextbox.value.toLowerCase().trim();

            for (let i = 0; i < products.length; i++) {
                const product = products[i];
                const productName = product.querySelector('.product-name').textContent.toLowerCase();
                if (productName.includes(searchTerm)) {
                    product.style.display = 'block';
                }
                else {
                    product.style.display = 'none';
                }
            }
        });
    };

    //Clear Search Textbox Value
    function clearText() {
        document.getElementById("searchTextbox").value = "";
        location.reload();
        document.getElementById("searchTextbox").focus();
    }
</script>

</html>