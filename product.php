<?php

//include("header.php");
// session_start();
?>
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
    
    <div class="row row-cols-md-5 p-2">
        <!-- Chyawanprash Regular(500 gm) Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch" >
                <div class="card h-100 product" style="display: flex;">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1674370361/shrinathAyurved/Chyawanprash_Front_e0k3fy.jpg"
                        class="imageResize thumbnail zoom" alt="Chawanprash Regular" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Chyawanprash Regular(500 gm)</h5>
                        <p class="card-text" id="chawanprashCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 180 for 500 gm</b> </p>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#chawanprashRegular">Know More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Chyawanprash Regular(500 gm)">
                        <input type="hidden" name="price" value="150">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Modal Start -->
        <div class="modal fade" id="chawanprashRegular" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Chawanprash Regular(500 gm)</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion accordion-flush" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="chawanprashDetail"></p>
                                    </div>
                                </div>
                            </div>
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
                                        <p id="chawanprashIngredients"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        Nutritional Facts
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="chawanprashFacts"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="card-text"><span>&#8377;</span> 180 for 500 gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Chyawanprash Regular (500 gm ) End-->

        <!-- Chyawanprash Regular(1 Kg) Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product" style="display: flex;">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1674382713/shrinathAyurved/Chavanprash_One_Kg_lsvwrs.jpg"
                        class="imageResize thumbnail zoom" alt="Chawanprash Regular" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Chyawanprash Regular (1 Kg)</h5>
                        <p class="card-text" id="chawanprashCard1kg"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 340 for 1 kg</b> </p>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#chawanprashGudWala">Know More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Chyawanprash Regular(1Kg)">
                        <input type="hidden" name="price" value="340">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Modal Start -->
        <div class="modal fade" id="chawanprashGudWala" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Chawanprash Regular(1 Kg)</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion accordion-flush" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="chawanprashDetail1kg"></p>
                                    </div>
                                </div>
                            </div>
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
                                        <p id="chawanprashIngredients1kg"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        Nutritional Facts
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="chawanprashFacts1kg"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="card-text"><span>&#8377;</span> 340 for 1 kg</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Chyawanprash Regular(1 Kg) End-->

        <!-- GULKAND Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch" id=gc>
                <div class="card h-100 product" style="display: flex;">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1680282010/shrinathAyurved/gulkand_t0mssv.png" class="imageResize thumbnail zoom" alt="Gulkand"/>
                    <div class="card-body">
                        <h5 class="card-title product-name">Gulkand</h5>
                        <p class="card-text" id="gulkandCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 190 for 500 gm</b> </p>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#gulkand">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Gulkand">
                        <input type="hidden" name="price" value="190">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Modal Start -->
        <div class="modal fade" id="gulkand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Gulkand</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Example Code -->
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="gulkandDetail"></p>
                                    </div>
                                </div>
                            </div>
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
                                        <p id="gulkandIngredients"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        Nutritional Facts
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="gulkandFacts"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>&#8377;</span> 190 for 500 gm
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Example Code -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- GULKAND End -->

        <!--ROSE SHARBAT Start -->
        <!-- Card Start-->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679740883/shrinathAyurved/roseSharbat_ajgmmx.png" class="imageResize thumbnail zoom" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Rose Sharbat</h5>
                        <p class="card-text" id="roseSharbatCard">details for rose sharbat.</p>
                        <p class="card-text"><b> <span>&#8377;</span> 205 for 900 ml</b> </p>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#roseSharbat">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Rose Sharbat">
                        <input type="hidden" name="price" value="205">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Modal Start -->
        <div class="modal fade" id="roseSharbat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Rose Sharbat</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="roseSharbatDetail"></p>

                                    </div>
                                </div>
                            </div>
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
                                        <p id="roseSharbatIngredients"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        Nutritional Facts
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="roseSharbatFacts"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>&#8377;</span> 205 For 900 ml
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- ROSE SHARBAT End -->

        <!--KHUS SHARBAT Start -->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679740081/shrinathAyurved/khash_ee4oem.png" class="imageResize thumbnail zoom" alt="Khash Sharbat" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Khass Sharbat</h5>
                        <p class="card-text" id="khasCard">Khus Card</p>
                        <p class="card-text"><b> <span>&#8377;</span> 205 for 900 ml</b> </p>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#khasSharbat">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Khass Sharbat">
                        <input type="hidden" name="price" value="205">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Modal Start -->
        <div class="modal fade" id="khasSharbat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Khas Sharbat</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="khasDetail"></p>
                                    </div>
                                </div>
                            </div>
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
                                        <p id="khasIngredients"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        Nutritional Facts
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="khasFacts"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <b> <span>&#8377;</span>205 For 900 ml</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->

        <!--KHUS SHARBAT End -->

        <!-- DISHWASH - LEMON & SALT Start -->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679741033/shrinathAyurved/Dishwash_Gel_gsgwmc_xhqbw5.png" class="imageResize thumbnail zoom" />
                    <div class="card-body">
                        <h5 class="card-title product-name">DISHWASH - LEMON & SALT</h5>
                        <p class="card-text" id="dwLemonCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 240 (Pack Of 2)</b> </p>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#dwLemon">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Dishwash - Lemon and Salt">
                        <input type="hidden" name="price" value="240">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Modal Start -->
        <div class="modal fade" id="dwLemon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Dishwash Lemon and Salt</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="dwLemonDetail"></p>
                                    </div>
                                </div>
                            </div>
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
                                        <p id="dwLemonIngredients"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        Usage
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="dwLemonFacts"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>&#8377;</span> 240 (Pack Of 2)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- DISHWASH - LEMON & SALT End-->

        <!-- DISHWASH - NEEM & ALOEVERA Start -->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679741331/Dishwash_LemonandNeem_wqjgu4.png" class="imageResize thumbnail zoom" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Neem and Aloevera Dishwash Liquid</h5>
                        <p class="card-text" id="dwNeemCard"></p>
                        <p class="card-text"><b><span>&#8377;</span> 240 (Pack Of 2)</b></p>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#dwNeem">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Neem and Aloevera Dishwash Liquid">
                        <input type="hidden" name="price" value="240">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Modal Start -->
        <div class="modal fade" id="dwNeem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Dishwash Lemon and Salt</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="dwNeemDetail"></p>
                                    </div>
                                </div>
                            </div>
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
                                        <p id="dwNeemIngredients"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="card-text">
                                            <span>&#8377;</span> 240 (Pack Of 2)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- DISHWASH - NEEM & ALOEVERA End -->

        <!-- HONEY Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679741477/Honey_Front_yxdfxu_rlkwak.png" class="imageResize thumbnail zoom" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Honey Regular</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a data-bs-toggle="modal" data-bs-target="#honeyYoutubeModal">
                                <img src="./images/youtube-logo.png" class="imageResize">
                                </a>
                            </div>
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
                        <h5 class="card-title product-name">Honey</h5>
                        <p class="card-text" id="honeyCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 225 For 500 gm</b></p>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#honeyModal">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Honey Regular">
                        <input type="hidden" name="price" value="225">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Modal Start -->
        <div class="modal fade" id="honeyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Honey</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="honeyDetail"></p>
                                    </div>
                                </div>
                            </div>
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
                                        <p id="honeyIngredients"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        Nutritional Facts
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="honeyFacts"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>&#8377;</span> 225 For 500 gm
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- HONEY End-->

        <!-- HONEY Squeezy Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679741475/SQUEEZY_FRONT_hzqoku_jpws7q.png" class="imageResize thumbnail zoom" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Honey Squeezy</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a data-bs-toggle="modal" data-bs-target="#honeyYoutubeModal">
                                    <img src="./images/youtube-logo.png"
                                        class="imageResize">
                                </a>
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
                        <h5 class="card-title product-name">Honey</h5>
                        <p class="card-text" id="honeyCard1"></p>

                        <p class="card-text"><b> <span>&#8377;</span> 240 (Pack Of 2 [250 gm each])</b> </p>

                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#honeyModal1">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Honey Squeezy">
                        <input type="hidden" name="price" value="240">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->

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

        <!-- Modal Start -->
        <div class="modal fade" id="honeyModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Honey</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="honeyDetail1"></p>
                                    </div>
                                </div>
                            </div>
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
                                        <p id="honeyIngredients1"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        Nutritional Facts
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p id="honeyFacts1"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>&#8377;</span> 240 (Pack Of 2)[125 gm each]
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- HONEY Squeezy End-->

        <!-- Rose Water Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679674399/shrinathAyurved/RoseWaterPhotoRoom_qgjqnp.png" class="imageResize thumbnail zoom" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Rose Water</h5>
                        <p class="card-text" id="roseWaterCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 150 for 100 ml</b></p>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#roseWater">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="Rose Water">
                        <input type="hidden" name="price" value="150">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Modal Start -->
        <div class="modal fade" id="roseWater" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Rose Water</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p id="roseWaterDetail"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Ingredients
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p id="roseWaterIngredients"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Price
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <span>&#8377;</span>150 for 100 ml
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Rose Water End-->

        <!-- Pottali Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product p-2" id=pp>
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1679741645/shrinathAyurved/potli_vi7uyx.png" class="imageResize thumbnail zoom" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Painkiller Potli</h5>
                        <p class="card-text" id="pottaliCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 350 for 250 gm</b> </p>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#potli">Know
                            More</button>
                        <button type="submit" name="addToCart" class="btn bg-warning">Add To Cart <i
                                class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="item_name" value="pottali">
                        <input type="hidden" name="price" value="350">
                    </div>
                </div>
            </div>
        </form>
        <!-- Card End -->
        <!-- Modal Start -->
        
        <div class="modal fade" id="potli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Painkiller Potli</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p id="pottaliDetail">Details</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Facts
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p id="pottaliFacts">Facts</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Price
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <span>&#8377;</span>350 for 250 gm
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Pottali End-->
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