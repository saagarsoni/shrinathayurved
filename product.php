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
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="./css/imageZoom.css" /> -->

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- To Read Text File -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>

    <style>
        /* Custom CSS to center the input group */
        .centered-input {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; Adjust height as needed */
        }
    </style>
</head>

<!-- Navigation Start -->
<?php require ('header.php') ?>
<!-- Navigation End -->

<body>
    <header class="header py-5 p-2">
        <div class="container ">
            <h3 class="text-center text-white d-none h-25" style="background-color: transparent;">HEADER</h3>
        </div>
    </header>
    <div class="container-fluid row center py-20 p-2" style="background-color :#03C04A;color:#fff">
        <h2>Our Products</h2>
    </div>

    <div class="centered-input">
    <div class="input-group my-2 p-2 w-50">
        <input type="text" class="form-control " placeholder="Type to Search Any Product" id="searchTextbox"  >
        <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="clearText()">Clear</button>
    </div>
</div>
    <div class="row row-cols-md-5 p-2">
        <!-- Chyawanprash_Regular(500 gm)  Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-0">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product" style="display: flex;">
                    <img src="./images/Chyawanprash500.jpg"
                        class=" imageResize img-fluid mx-auto d-block object-fit: scale-down; thumbnail"
                        alt="Chyawanprash Regular(500 gm)" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Chyawanprash (500 gm)</h5>
                        <p class="card-text"><b> <span>&#8377;</span> 180 for 500 gm</b> </p>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            onclick="redirectToProductDescription('Chyawanprash500')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Chyawanprash Regular(500 gm)">
                        <input type="hidden" name="price" value="1">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->

        <!-- Chyawanprash_Regular(500 gm) End -->

        

        <!-- Chyawanprash_Regular(1 Kg)  Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-0">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product" style="display: flex;">
                    <!-- https://res.cloudinary.com/dvthtodtk/image/upload/v1674382713/shrinathAyurved/Chavanprash_One_Kg_lsvwrs.jpg -->
                    <img src="./images/chawanprash2.jpg" class=" imageResize img-fluid mx-auto d-block object-fit: scale-down; thumbnail"
                        alt="Chyawanprash Regular(1 Kg)" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Chyawanprash (1 Kg)</h5>
                        <p class="card-text"><b> <span>&#8377;</span>340 for 1 kg</b> </p>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            onclick="redirectToProductDescription('Chyawanprash1000')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning  btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Chyawanprash Regular(1Kg)">
                        <input type="hidden" name="price" value="1">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Chyawanprash_Regular(1Kg) End -->

        <!-- Orange Squash Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-0">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product" style="display: flex;">
                    <img src="./images/orangeSquash.jpg"
                        class=" imageResize img-fluid mx-auto d-block object-fit: scale-down; thumbnail"
                        alt="Orange Squash" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Orange Squash</h5>
                        <!-- <p class="card-text" id="orangeSquashCard"></p> -->
                        <p class="card-text"><b> <span>&#8377;</span> 210 for 900 ml</b> </p>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            onclick="redirectToProductDescription('orangeSquash')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="orangeSquash">
                        <input type="hidden" name="price" value="1">
                        <!-- <input type="hidden" name="price" value="190"> -->
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Orange Squash End -->

        <!-- Lemom Squash Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product" style="display: flex;">
                    <img src="./images/lemonSquash1.jpg"
                        class="imageResize img-fluid mx-auto d-block object-fit: scale-down; thumbnail"
                        alt="Lemon Squash" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Lemon Squash</h5>
                        <!-- <p class="card-text" id="lemonSquashCard"></p> -->
                        <p class="card-text"><b> <span>&#8377;</span> 210 for 900 ml</b> </p>
                        <!-- <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#lemonSquash">Know
                            More</button> -->
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            onclick="redirectToProductDescription('lemonSquash')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="lemonSquash">
                        <input type="hidden" name="price" value="2">
                        <!-- <input type="hidden" name="price" value="190"> -->
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Lemon Squash End -->

        <!-- GULKAND Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product" style="display: flex;">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1680282010/shrinathAyurved/gulkand_t0mssv.png"
                        class=" imageResize img-fluid mx-auto d-block object-fit: scale-down; thumbnail"
                        alt="Gulkand" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Gulkand.</h5>
                        <!-- <p class="card-text" id="gulkandCard"></p> -->
                        <p class="card-text"><b> <span>&#8377;</span> 190 for 500 gm</b> </p>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            onclick="redirectToProductDescription('gulkand')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Gulkand">
                        <input type="hidden" name="price" value="2">
                        <!-- <input type="hidden" name="price" value="190"> -->
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- GULKAND End -->

        <!--ROSE SHARBAT Start -->
        <!-- Card Start-->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679740883/shrinathAyurved/roseSharbat_ajgmmx.png"
                        class="imageResize  img-fluid mx-auto d-block object-fit: fill;" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Rose Sharbat.</h5>
                        <p class="card-text"><b> <span>&#8377;</span> 205 for 900 ml</b> </p>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            onclick="redirectToProductDescription('roseSharbat')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Rose Sharbat">
                        <input type="hidden" name="price" value="1">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- ROSE SHARBAT End -->

        <!--KHUS SHARBAT Start -->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679740081/shrinathAyurved/khash_ee4oem.png"
                        class="imageResize thumbnail zoom img-fluid mx-auto d-block object-fit: contain;"
                        alt="Khash Sharbat" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Khass Sharbat</h5>
                        <p class="card-text"><b> <span>&#8377;</span> 205 for 900 ml</b> </p>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            onclick="redirectToProductDescription('khushSharbat')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Khass Sharbat">
                        <input type="hidden" name="price" value="2">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!--KHUS SHARBAT End -->

        <!-- DISHWASH - LEMON & SALT Start -->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="./images/lemonSaltDishwash.png" class="imageResize " />
                    <div class="card-body">
                        <h6 class="card-title product-name">DISHWASH - LEMON & SALT</h6>
                        <p class="card-text"><b> <span>&#8377;</span> 240 (Pack Of 2)</b> </p>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            onclick="redirectToProductDescription('dwLemonSalt')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Dishwash - Lemon and Salt">
                        <input type="hidden" name="price" value="1">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- DISHWASH - LEMON & SALT End-->

        <!-- DISHWASH - NEEM & ALOEVERA Start -->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679741331/Dishwash_LemonandNeem_wqjgu4.png"
                        class="imageResize thumbnail zoom img-fluid mx-auto d-block object-fit: contain;" />
                    <div class="card-body">
                        <h6 class="card-title product-name">Dishwash -Neem and Aloevera</h6>
                        <p class="card-text"><b><span>&#8377;</span> 240 (Pack Of 2)</b></p>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            onclick="redirectToProductDescription('dwNeemAloevera')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Neem and Aloevera Dishwash Liquid">
                        <input type="hidden" name="price" value="1">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- DISHWASH - NEEM & ALOEVERA End -->

        <!-- Rose Water Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679674399/shrinathAyurved/RoseWaterPhotoRoom_qgjqnp.png"
                        class="imageResize thumbnail zoom img-fluid mx-auto d-block object-fit: contain;" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Rose Water</h5>
                        <p class="card-text"><b> <span>&#8377;</span> 150 for 100 ml</b></p>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                        onclick="redirectToProductDescription('roseWater')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Rose Water">
                        <input type="hidden" name="price" value="1">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Rose Water End-->

        <!-- HONEY Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <!-- <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div> -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679741477/Honey_Front_yxdfxu_rlkwak.png"
                                    class="imageResize thumbnail " />
                                <!-- <div class="carousel-caption d-none d-md-block">
                                    <h5>Honey Regular</h5>
                                </div> -->
                            </div>
                            <!-- <div class="carousel-item">
                                <a data-bs-toggle="modal" data-bs-target="#honeyYoutubeModal">
                                    <img src="./images/youtube-logo.png" class="imageResize">
                                </a>
                            </div> -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title product-name">Honey Regular</h6>
                        <!-- <p class="card-text" id="honeyCard"></p> -->
                        <b> <span>&#8377;</span> 225 For 500 gm</b><br>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                        onclick="redirectToProductDescription('honeyRegular')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Honey Regular">
                        <input type="hidden" name="price" value="2">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- HONEY End-->

        <!-- HONEY Squeezy Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch ">
                <div class="card h-100 product">
                    <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679741475/SQUEEZY_FRONT_hzqoku_jpws7q.png"
                                    class="imageResize thumbnail zoom img-fluid mx-auto d-block object-fit: contain;" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title product-name">Honey Squeezy</h6>
                        <b> <span>&#8377;</span> 240 (Pack Of 2 [250 gm each])</b>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                        onclick="redirectToProductDescription('honeySqueezy')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Honey Squeezy">
                        <input type="hidden" name="price" value="1">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->

        
        <!-- HONEY Squeezy End-->

        <!-- Pottali  Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 w-100 product" style="display: flex;">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679741645/shrinathAyurved/potli_vi7uyx.png"
                        class=" imageResize img-fluid mx-auto d-block object-fit: scale-down; thumbnail"
                        alt="Painkiller Potli" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Painkiller Potli</h5>
                        <b> <span>&#8377;</span> 350 for 250 gm</b><br>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                        onclick="redirectToProductDescription('painkillerPottali')">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning btn-sm">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="pottali">
                        <input type="hidden" name="price" value="1">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Pottali End -->

    </div>

    <!-- Footer -->
    <?php require ('php/footer.php') ?>
    <!-- Footer -->
</body>

<script>

    function redirectToProductDescription(product) {
        // Construct the URL for the product description page
        var productPage = product + '.php';

        // Redirect to the product description page
        window.location.href = productPage;
    }

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

    //Orange Squash
    $("#orangeSquashCard").load("./text/orangeSquashCard.txt");
    $("#orangeSquashDetail").load("./text/orangeSquashDetail.txt");
    $("#orangeSquashIngredients").load("./text/orangeSquashIngredients.txt");
    $("#orangeSquashFacts").load("./text/orangeSquashFacts.txt");

    //Lemon Squash
    $("#lemonSquashCard").load("./text/lemonSquashCard.txt");
    $("#lemonSquashDetail").load("./text/lemonSquashDetail.txt");
    $("#lemonSquashIngredients").load("./text/lemonSquashIngredients.txt");
    $("#lemonSquashFacts").load("./text/lemonSquashFacts.txt");

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