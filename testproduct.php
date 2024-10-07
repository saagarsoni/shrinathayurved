<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .image-section {
            flex: 1 1 300px;
            margin: 10px;
        }

        .image-section img {
            width: 100%;
            height: auto;
        }

        .text-section {
            flex: 1 1 300px;
            margin: 10px;
        }

        button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        /* Large devices (desktops) */
        @media only screen and (min-width: 992px) {
            .container {
                flex-direction: row;
            }
        }

        /* Medium devices (tablets) */
        @media only screen and (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Small devices (phones) */
        @media only screen and (max-width: 576px) {
            .container {
                flex-direction: column;
                padding: 10px;
            }

            .text-section, .image-section {
                width: 100%;
                margin: 0;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="image-section">
        <!-- <img src="https://shrinathayurved.com/images/honeySqueezy.jpg" alt="Honey Bottle"> -->
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
    </div>
    <div class="text-section">
        <h2>Honey Squeezy</h2>
        <p>Shrinath Ayurved is 100% pure with no sugar adulteration</p>
        <p>It is 100% indigenous - sourced entirely from India</p>
        <p>It contains natural antioxidants and minerals that can help in strengthening your immunity.</p>
        <p>Its daily use with lukewarm water in the morning can help in maintaining healthy lipid levels.</p>
        <button>Add to Cart</button>
    </div>
</div>

</body>
</html>
