<?php

include("header.php");
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
        </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shrinath Ayurved</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

    <style>
        .center {
            text-align: center;
            border: 3px solid green;
        }
    </style>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- To Read Text File -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
</head>

<body>
    <header class="header py-3">
        <div class="container">
            <h3 class="text-center">Header</h3>
        </div>
    </header>
    <div class="row center py-20">
        <h2>Our Products</h2>
    </div>

    <div class="input-group mb-5">
        <input type="text" class="form-control" placeholder="Type to Search Any Product"
            aria-label="Recipient's username" aria-describedby="button-addon2" id="searchTextbox">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="clearText()">Clear</button>
    </div>

    <div class="row row-cols-md-5">
        <!-- Chyawanprash Regular(500 gm) Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1674370361/shrinathAyurved/Chyawanprash_Front_e0k3fy.jpg"
                    height="500" class="card-img-top img-responsive" alt="Chawanprash Regular" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Chyawanprash Regular(500 gm)</h5>
                        <p class="card-text" id="chawanprashCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 180 for 500 gm</b> </p>
                        <button type="button" class="btn btn-info" data-toggle="modal"
                            data-target="#chawanprashRegularBuy">Buy Now</button>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#chawanprashRegular">Know More</button>
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Buy Now Start -->
        <div class="modal" id="chawanprashRegularBuy" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="list-group">
                            <a href="https://www.amazon.in/Generic-AYURVED-INDIA-CHYAWANPRASH/dp/B08RJZ4GWQ"
                                target="_blank" class="list-group-item list-group-item-action"
                                aria-current="true">Amazon</a>
                            <a href="https://www.flipkart.com/search?q=AYURVED+INDIA+CHYAWANPRASH&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=off&as=off "
                                target="_blank" class="list-group-item list-group-item-action">Flipkart</a>
                            <a href="https://www.bigbasket.com/pd/40221740/ayurved-india-chyawanprash-awleh-immunity-booster-improves-stamina-strength-500-g-bottle/?nc=as"
                                target="_blank" class="list-group-item list-group-item-action">Big Basket</a>
                            <a href="https://www.jiomart.com/p/groceries/ayurved-india-chyawanprash/596838245"
                                target="_blank" class="list-group-item list-group-item-action">Jio Mart</a>
                            <a href="https://www.1mg.com/otc/ayurved-india-chyawanprash-awleh-otc824271 
                    https://www.1mg.com/otc/ayurved-india-chyawanprash-awleh-otc824270?qv=NaN&iv=undefined"
                                target="_blank" class="list-group-item list-group-item-action">Tata 1Mg</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now End -->
        <!-- Chyawanprash Regular (500 gm ) End-->

        <!-- Chyawanprash Regular(1 Kg) Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1674382713/shrinathAyurved/Chavanprash_One_Kg_lsvwrs.jpg"
                    height="500" class="card-img-top img-responsive" alt="Chawanprash Regular" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Chyawanprash Regular (1 Kg)</h5>
                        <p class="card-text" id="chawanprashCard1kg"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 340 for 1 kg</b> </p>
                        <button type="button" class="btn btn-info" data-toggle="modal"
                            data-target="#chawanprashRegularBuy1Kg">Buy Now</button>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#chawanprashGudWala">Know More</button>
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Buy Now Start -->
        <div class="modal" id="chawanprashRegularBuy1Kg" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="list-group">
                            <a href="https://www.amazon.in/Generic-AYURVED-INDIA-CHYAWANPRASH/dp/B08RJZ4GWQ"
                                target="_blank" class="list-group-item list-group-item-action"
                                aria-current="true">Amazon</a>
                            <a href="https://www.flipkart.com/search?q=AYURVED+INDIA+CHYAWANPRASH&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=off&as=off "
                                target="_blank" class="list-group-item list-group-item-action">Flipkart</a>
                            <a href="https://www.bigbasket.com/pd/40221740/ayurved-india-chyawanprash-awleh-immunity-booster-improves-stamina-strength-500-g-bottle/?nc=as"
                                target="_blank" class="list-group-item list-group-item-action">Big Basket</a>
                            <a href="https://www.jiomart.com/p/groceries/ayurved-india-chyawanprash/596838245"
                                target="_blank" class="list-group-item list-group-item-action">Jio Mart</a>
                            <a href="https://www.1mg.com/otc/ayurved-india-chyawanprash-awleh-otc824271 
                    https://www.1mg.com/otc/ayurved-india-chyawanprash-awleh-otc824270?qv=NaN&iv=undefined"
                                target="_blank" class="list-group-item list-group-item-action">Tata 1Mg</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now End -->
        <!-- Chyawanprash Regular(1 Kg) End-->

        <!-- GULKAND Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1675841213/shrinathAyurved/Gulkand_1_300x500_apehke.jpg"
                    height="500" class="card-img-top img-responsive" alt="Gulkand" />
                    <div class="card-body">
                        <h6 class="card-title product-name">Gulkand</h6>
                        <p class="card-text" id="gulkandCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 190 for 500 gm</b> </p>
                        <!-- <a href="#" class="btn btn-info align-content-center">Buy Now</a> -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#gulkandBuy">Buy
                            Now</button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#gulkand">Know
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Buy Now Start -->
        <div class="modal" id="gulkandBuy" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="list-group">
                            <a href="https://www.1mg.com/otc/ayurved-india-chyawanprash-awleh-otc824270?qv=NaN&iv=undefined"
                                target="_blank" class="list-group-item list-group-item-action">Big Basket</a>

                            <a href="https://www.1mg.com/otc/ayurved-india-gulkand-otc824279" target="_blank"
                                class="list-group-item list-group-item-action">Tata 1Mg</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now End -->
        <!-- GULKAND End -->

        <!--ROSE SHARBAT Start -->
        <!-- Card Start-->
        <form action="manage_cart.php" method="post" class="product">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1674382714/shrinathAyurved/Rose_Front_yicmbv.jpg"
                    height="500" class="card-img-top img-responsive"/>
                    <div class="card-body">
                        <h5 class="card-title product-name">Rose Sharbat</h5>
                        <p class="card-text" id="roseSharbatCard">details for rose sharbat.</p>
                        <p class="card-text"><b> <span>&#8377;</span> 205 for 900 ml</b> </p>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#roseSharbatBuy">Buy
                            Now</button>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#roseSharbat">Know
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Buy Now Start -->
        <div class="modal" id="roseSharbatBuy" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Buy Rose Sharbat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group">

                            <a href="https://www.amazon.in/Rose-Sharbat-Delicious-Shrinath-Ayurved/dp/B09ZJ8R9XW"
                                target="_blank" class="list-group-item list-group-item-action" aria-current="true"><img
                                    src="./images/amazon.svg" width="60px" height="20px" alt="Amazon"> </a>
                            <a href="https://www.flipkart.com/shrinath-ayurved-rose-sharbat-e-khass/p/itmdbc313d9df46d?pid=CNCGHHHRGM9VFZKD"
                                target="_blank" class="list-group-item list-group-item-action"><img
                                    src="./images/flipkart.svg" width="60px" height="20px" alt="Flipkart"> </a>
                            <a href="https://www.bigbasket.com/pd/40222459/sharbat-e-khass-rose-sharbat-750-ml/?nc=as"
                                target="_blank" class="list-group-item list-group-item-action"><img
                                    src="./images/Screenshot 2023-02-07 131018.jpg" width="70px" height="30px"
                                    alt="Big Basket"> </a>
                            <a href="https://www.jiomart.com/p/groceries/rose-sharbat/596815235" target="_blank"
                                class="list-group-item list-group-item-action">Jio Mart</a>
                            <a href="https://www.1mg.com/otc/shrinath-ayurved-sharbat-e-khass-otc824293" target="_blank"
                                class="list-group-item list-group-item-action"><img src="./images/TATA_1mg.svg"
                                    width="60px" height="27px" alt="Tata 1 Mg"></a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now End -->
        <!-- ROSE SHARBAT End -->

        <!--KHUS SHARBAT Start -->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://dummyimage.com/430x300/000/d11e68&text=Khus+Sharbat" width="300" height="400"
                        class="card-img-top img-fluid" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Khass Sharbat</h5>
                        <p class="card-text" id="khasCard">Khus Card</p>
                        <p class="card-text"><b> <span>&#8377;</span> 205 for 900 ml</b> </p>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#khusBuy">Buy
                            Now</button>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#khasSharbat">Know
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Buy Now Start -->
        <div class="modal" id="khusBuy" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="list-group">
                            <a href="https://www.amazon.in/Rose-Sharbat-Delicious-Shrinath-Ayurved/dp/B09ZJ8R9XW"
                                target="_blank" class="list-group-item list-group-item-action"
                                aria-current="true">Amazon</a>
                            <a href="https://www.flipkart.com/shrinath-ayurved-rose-sharbat-e-khass/p/itmdbc313d9df46d?pid=CNCGHHHRGM9VFZKD"
                                target="_blank" class="list-group-item list-group-item-action">Flipkart</a>
                            <a href="https://www.bigbasket.com/pd/40222459/sharbat-e-khass-rose-sharbat-750-ml/?nc=as"
                                target="_blank" class="list-group-item list-group-item-action">Big Basket</a>
                            <a href="https://www.jiomart.com/p/groceries/rose-sharbat/596815235" target="_blank"
                                class="list-group-item list-group-item-action">Jio Mart</a>
                            <a href="https://www.1mg.com/otc/shrinath-ayurved-sharbat-e-khass-otc824293" target="_blank"
                                class="list-group-item list-group-item-action">Tata 1Mg</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now End -->
        <!--KHUS SHARBAT End -->

        <!-- DISHWASH - LEMON & SALT Start -->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1674370603/shrinathAyurved/Dishwash_Gel_gsgwmc.jpg"
                         height="500" class="card-img-top img-responsive" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title product-name">DISHWASH - LEMON & SALT</h5>
                        <p class="card-text" id="dwLemonCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 240 (Pack Of 2)</b> </p>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dwLemonBuy">Buy
                            Now</button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#dwLemon">Know
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Buy Now Start -->
        <div class="modal" id="dwLemonBuy" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="list-group">
                            <a href="https://www.amazon.in/Shrinath-Ayurved-Dishwash-Superior-Cleaning/dp/B09B2PV7ZK"
                                target="_blank" class="list-group-item list-group-item-action"
                                aria-current="true">Amazon</a>
                            <a href="https://www.flipkart.com/shrinath-ayurved-dishwash-gel-dish-cleaning/p/itmb99a234a131ae?pid=DCGG4H9APQBZWEQX"
                                target="_blank" class="list-group-item list-group-item-action">Flipkart</a>
                            <a href="https://www.bigbasket.com/pd/40220238/shrinath-ayurved-dish-washing-gel-liquid-500-ml/?nc=as"
                                target="_blank" class="list-group-item list-group-item-action">Big Basket</a>
                            <a href="https://www.jiomart.com/p/groceries/dishwash-liquid/596848313" target="_blank"
                                class="list-group-item list-group-item-action">Jio Mart</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now End -->
        <!-- DISHWASH - LEMON & SALT End-->

        <!-- DISHWASH - NEEM & ALOEVERA Start -->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1675694120/shrinathAyurved/DISHWASH_GREEN_FRONT_dcfsct.jpg"
                         height="500" class="card-img-top img-responsive" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Neem and Aloevera Dishwash Liquid</h5>
                        <p class="card-text" id="dwNeemCard"></p>
                        <p class="card-text">
                        <b> <span>&#8377;</span> 240 (Pack Of 2)</b> 
                        </p>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dwNeemBuy">Buy
                            Now</button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#dwNeem">Know
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                            <!-- <div class="accordion-item">
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
                            </div> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Buy Now Start -->
        <div class="modal" id="dwNeemBuy" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="list-group">
                            <a href="https://www.amazon.in/Shrinath-Dishwash-Superior-Cleaning-AloeveraI/dp/B0BCZ6PMHP"
                                target="_blank" class="list-group-item list-group-item-action"
                                aria-current="true">Amazon</a>
                            <a href="https://www.flipkart.com/shrinath-ayurved-neem-aloevera-based-dish-cleaning-gel/p/itm82521107a2fe7?pid=DCGGH47H4KVQVFKZ"
                                target="_blank" class="list-group-item list-group-item-action">Flipkart</a>
                            <a href="https://www.jiomart.com/p/groceries/dishwash-liquid-antibacterial/596907289"
                                target="_blank" class="list-group-item list-group-item-action">Jio Mart</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now End -->
        <!-- DISHWASH - NEEM & ALOEVERA End -->

        <!-- HONEY Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product">
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
                                <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1674382714/shrinathAyurved/Honey_Front_yxdfxu.jpg"
                                height="500" class="card-img-top img-responsive">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Honey Regular</h5>
                                    <!-- <p>Some representative placeholder content for the first slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                            <a data-bs-toggle="modal" data-bs-target="#honeyYoutubeModal">
                                <img src="https://dummyimage.com/600x400/000/e01979&text=Youtube" height="500" class="card-img-top img-responsive">
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
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#honeyBuy">Buy
                            Now</button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#honeyModal">Know
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <!-- End Example Code -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Buy Now Start-->
        <div class="modal" id="honeyBuy" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                    <div class="modal-body">
                        <!-- <p>Modal body text goes here.</p> -->
                        <div class="list-group">
                            <a href="https://www.amazon.in/HONEY-SHRINATH-AYURVED-REAL-HONEY/dp/B0BQN4JN9R"
                                target="_blank" class="list-group-item list-group-item-action"
                                aria-current="true">Amazon</a>
                            <a href="https://www.flipkart.com/shrinath-ayurved-honey-pure-sure/p/itm91e5eea9c21e7?pid=HNYGHGB2DHU3NVB5"
                                target="_blank" class="list-group-item list-group-item-action">Flipkart</a>
                            <a href="https://www.jiomart.com/p/groceries/honey-pure-sure/596769953" target="_blank"
                                class="list-group-item list-group-item-action">Jio Mart</a>
                            <a href="https://youtu.be/8nGSf5yrn4Q" target="_blank"
                                class="list-group-item list-group-item-action">Watch On Youtube</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now Ends -->
        <!-- HONEY End-->


        <!-- HONEY Squeezy Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product">
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
                                <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1675692677/shrinathAyurved/SQUEEZY_FRONT_hzqoku.jpg"
                                height="500" class="card-img-top img-responsive">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Honey Squeezy</h5>
                                </div>
                            </div>

                            <div class="carousel-item">
                            <a data-bs-toggle="modal" data-bs-target="#honeyYoutubeModal">
                                <img src="https://dummyimage.com/600x400/000/e01979&text=Youtube" height="500" class="card-img-top img-responsive">
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
                    <!-- <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1674382714/shrinathAyurved/Honey_Front_yxdfxu.jpg"
                    width="300" height="400" class="card-img-top img-fluid" alt="Hollywood Sign on The Hill" /> -->
                    <div class="card-body">
                        <h5 class="card-title product-name">Honey</h5>
                        <p class="card-text" id="honeyCard1"></p>
                        
                        <p class="card-text"><b> <span>&#8377;</span> 240 (Pack Of 2 [125 gm each])</b> </p>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#honeyBuy">Buy
                            Now</button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#honeyModal1">Know
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
                    <div class="modal fade" id="honeyYoutubeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Shrinath Ayurved Honey</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/8nGSf5yrn4Q" title="SHRINATH AYURVED HONEY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <!-- End Example Code -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Buy Now Start-->
        <div class="modal" id="honeyBuy" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                    <div class="modal-body">
                        <!-- <p>Modal body text goes here.</p> -->
                        <div class="list-group">
                            <a href="https://www.amazon.in/HONEY-SHRINATH-AYURVED-REAL-HONEY/dp/B0BQN4JN9R"
                                target="_blank" class="list-group-item list-group-item-action"
                                aria-current="true">Amazon</a>
                            <a href="https://www.flipkart.com/shrinath-ayurved-honey-pure-sure/p/itm91e5eea9c21e7?pid=HNYGHGB2DHU3NVB5"
                                target="_blank" class="list-group-item list-group-item-action">Flipkart</a>
                            <a href="https://www.jiomart.com/p/groceries/honey-pure-sure/596769953" target="_blank"
                                class="list-group-item list-group-item-action">Jio Mart</a>
                            <a href="https://youtu.be/8nGSf5yrn4Q" target="_blank"
                                class="list-group-item list-group-item-action">Watch On Youtube</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now Ends -->
        <!-- HONEY Squeezy End-->


        <!-- Rose Water Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://dummyimage.com/300x500/000/d11e68&text=Rose+Water" 
                    height="500" class="card-img-top img-responsive" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Rose Water</h5>
                        <p class="card-text" id="roseWaterCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 150 for 100 ml</b></p>
                        <a href="#" class="btn btn-info align-content-center">Buy Now</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roseWater">Know
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Buy Now -->
        <div class="modal" id="honeyBuy" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                    <div class="modal-body">
                        <!-- <p>Modal body text goes here.</p> -->
                        <div class="list-group">
                            <a href="https://www.amazon.in/HONEY-SHRINATH-AYURVED-REAL-HONEY/dp/B0BQN4JN9R"
                                target="_blank" class="list-group-item list-group-item-action"
                                aria-current="true">Amazon</a>
                            <a href="https://www.flipkart.com/shrinath-ayurved-honey-pure-sure/p/itm91e5eea9c21e7?pid=HNYGHGB2DHU3NVB5"
                                target="_blank" class="list-group-item list-group-item-action">Flipkart</a>
                            <a href="https://www.jiomart.com/p/groceries/honey-pure-sure/596769953" target="_blank"
                                class="list-group-item list-group-item-action">Jio Mart</a>
                            <a href="https://youtu.be/8nGSf5yrn4Q" target="_blank"
                                class="list-group-item list-group-item-action">Watch On Youtube</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now Ends -->
        <!-- Rose Water End-->

        <!-- Pottali Start-->
        <!-- Card Start -->
        <form action="manage_cart.php" method="post" class="product">
            <div class="col product d-flex align-items-stretch">
                <div class="card h-100 product">
                    <img src="https://res.cloudinary.com/dvthtodtk/image/upload/v1674382713/shrinathAyurved/Potli_qevtok.jpg" width="300" height="400px"
                    height="500" class="card-img-top img-responsive" />
                    <div class="card-body">
                        <h5 class="card-title product-name">Painkiller Potli</h5>
                        <p class="card-text" id="pottaliCard"></p>
                        <p class="card-text"><b> <span>&#8377;</span> 350 for 250 gm</b> </p>
                        <a href="#" class="btn btn-info align-content-center">Buy Now</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#potli">Know
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Buy Now -->
        <div class="modal" id="honeyBuy" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                    <div class="modal-body">
                        <!-- <p>Modal body text goes here.</p> -->
                        <div class="list-group">
                            <a href="https://www.amazon.in/HONEY-SHRINATH-AYURVED-REAL-HONEY/dp/B0BQN4JN9R"
                                target="_blank" class="list-group-item list-group-item-action"
                                aria-current="true">Amazon</a>
                            <a href="https://www.flipkart.com/shrinath-ayurved-honey-pure-sure/p/itm91e5eea9c21e7?pid=HNYGHGB2DHU3NVB5"
                                target="_blank" class="list-group-item list-group-item-action">Flipkart</a>
                            <a href="https://www.jiomart.com/p/groceries/honey-pure-sure/596769953" target="_blank"
                                class="list-group-item list-group-item-action">Jio Mart</a>
                            <a href="https://youtu.be/8nGSf5yrn4Q" target="_blank"
                                class="list-group-item list-group-item-action">Watch On Youtube</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now Ends -->
        <!-- Pottali End-->

        <!-- Test Start-->
        <!-- <div class="col">
            <div class="card h-100">
                <img src="https://picsum.photos/450/300?random=42" class="card-img-top"
                    alt="Hollywood Sign on The Hill" />
                <div class="card-body">
                    <h5 class="card-title">Test Data</h5>
                    <p class="card-text" id="testText">
                        
                    </p>
                    <a href="#" class="btn btn-info align-content-center">Buy Now</a>
                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#chawanprashRegular">Know More</button>
                </div>
            </div>
        </div> -->
        <!-- Test End-->
    </div>

    <marquee width="100%" behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();">  
Our Products are also available at 
<a href="https://www.flipkart.com/" target="_blank">Flipkart</a>&nbsp;&nbsp;
<a href="https://www.amazon.com/" target="_blank">Amazon</a>&nbsp;&nbsp;
<a href="https://www.bigbasket.com/" target="_blank">Big Basket</a>&nbsp;&nbsp;
<a href="https://www.1mg.com/search/all?name=shrinath%20ayurved" target="_blank">Tata 1 Mg</a>
</marquee>  

    <!-- Footer Start-->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Copyright  Start-->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="#">Shrinath Ayurved</a>
        </div>
        <!-- Copyright End-->
    </footer>
    <!-- Footer End-->
</body>
<!-- To Load Text In Product Description -->

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script>

    // $(document).ready(function()
    // {
    //     $(".btn-close").click(function()
    //     {
    //         $("#honeyYoutubeModal").empty();
    //     });
    // });


            $("#honeyYoutubeModal").on("hidden.bs.modal", function() {

        var _this = this,
            youtubeSrc = $(_this).find("iframe").attr("src");

        if($(_this).find("iframe").length > 0){                     // checking if there is iframe only then it will go to next level
            $(_this).find("iframe").attr("src", "");                // removing src on runtime to stop video
            $(_this).find("iframe").attr("src", youtubeSrc);        // again passing youtube src value to iframe
        }
        });


    // $(".xzoom, .xzoom-gallery").xzoom({tint: '#333', Xoffset: 5});

    $("#testText").load("./text/chawanprashIntro.txt");
    $("#gulkand").load("./text/gulkand.txt");

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