<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Lettuce Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .main-image img {
            border: 2px solid #ddd;
            width: 100%;
            height: auto;
        }

        .thumb-images img {
            width: 80px;
            height: 80px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: transform 0.3s, border-color 0.3s;
        }

        .thumb-images img:hover {
            transform: scale(1.1);
            border-color: #007bff;
        }

        .thumb-images img.active {
            border-color: #007bff;
        }

        .price .text-danger {
            font-weight: bold;
        }

        .actions button {
            width: 120px;
        }

        .detail-wrapper {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .tab-content {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            margin-top: 10px;
            background-color: #fff;
        }
        .nav-tabs .nav-link.active {
            background-color: #28a745 !important;
            color: white !important;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <!-- <div class="detail-wrapper"> -->
            <div class="row">
                <!-- Image Section -->
                <div class="col-md-6">
                        <div class="detail-wrapper">
                        <div class="main-image mb-3 product-image-container bg-white">
                            <img id="main-image" src="image/honeyR1.jpg" alt="Green Lettuce" class="img-fluid rounded">
                        </div>
                        <div class="thumb-images d-flex">
                            <img src="image/honeyR1.jpg" alt="Thumb 1" class="img-thumbnail me-2 thumbnail active">
                            <img src="https://via.placeholder.com/150/FF0000" alt="Thumb 2" class="img-thumbnail me-2 thumbnail">
                            <img src="https://via.placeholder.com/150/00FF00" alt="Thumb 3" class="img-thumbnail me-2 thumbnail">
                            <img src="https://via.placeholder.com/150/0000FF" alt="Thumb 4" class="img-thumbnail thumbnail">
                        </div>
                    </div>
                    </div>

                <!-- Details Section -->
                <div class="col-md-6">
                        <div class="detail-wrapper">
                        <h1>Green Lettuce</h1>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-success me-2">★★★★★</span>
                            <span>(02 Customer Reviews)</span>
                        </div>
                        <div class="price mt-3">
                            <span class="text-danger fs-4">$18.00</span>
                            <span class="text-muted text-decoration-line-through ms-2">$20.00</span>
                            <span class="badge bg-warning ms-2">-16%</span>
                        </div>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Ut sit neque consectetur cras tempor ornare libero. 
                            Lacus imperdiet sem pretium ac xmassa.
                        </p>
                        <div class="stock-status mb-3">
                            <strong>Quantity:</strong>
                            <span class="badge bg-success ms-2">In Stock</span>
                        </div>
                        <div class="quantity d-flex align-items-center mb-3">
                            <button class="btn btn-outline-secondary me-2">-</button>
                            <input type="text" value="1" class="form-control text-center" style="width: 60px;">
                            <button class="btn btn-outline-secondary ms-2">+</button>
                        </div>
                        <div class="size mb-3">
                            <strong>Size:</strong>
                            <div class="btn-group ms-2" role="group">
                                <button type="button" class="btn btn-outline-primary">1/5 Kg</button>
                                <button type="button" class="btn btn-outline-primary">01 Kg</button>
                                <button type="button" class="btn btn-outline-primary">02 Kg</button>
                            </div>
                        </div>
                        <div class="actions mb-3">
                            <button class="btn btn-primary me-2">Add to Cart</button>
                            <button class="btn btn-success">Buy Now</button>
                        </div>
                        <div class="product-info">
                            <p><strong>SKU:</strong> AF-001-KT</p>
                            <p><strong>Category:</strong> Vegetables</p>
                            <p><strong>Free Shipping:</strong> Free shipping on orders over $120.</p>
                        </div>
                        <div class="share mt-3">
                            <strong>Share:</strong>
                            <a href="#" class="btn btn-outline-secondary btn-sm ms-2"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>



    <!--  -->
    <div class="container py-5">
        <div class="card">
            <div class="card-body">
                <!-- Navigation Tabs -->
                <ul class="nav nav-tabs" id="productTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">
                            Description
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">
                            Reviews
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="productTabContent">
                    <!-- Description Tab -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <h5>Description:</h5>
                        <p>
                            Our fresh, crisp lettuce is the perfect base for your salads, sandwiches, and wraps. Grown with care, this nutrient-rich leafy green is a kitchen staple, known for its refreshing taste and versatility. Whether you’re preparing a light salad, adding crunch to your burgers, or crafting a healthy wrap, our lettuce provides the perfect balance of flavor and texture.
                        </p>
                        <h6>Key Features:</h6>
                        <ul>
                            <li><strong>Type:</strong> Specify type (e.g., Romaine, Iceberg, Butterhead, etc.)</li>
                            <li><strong>Freshness:</strong> Harvested daily to ensure maximum crispness</li>
                            <li><strong>Nutrition:</strong> Low in calories, high in vitamins A and K, and a good source of fiber</li>
                            <li><strong>Storage:</strong> Keep refrigerated to maintain freshness for up to a week</li>
                        </ul>
                        <h6>Why Choose Our Lettuce?</h6>
                        <p>
                            Our lettuce is sourced from local farms that prioritize sustainable and organic farming practices. Each head of lettuce is carefully selected for its quality, ensuring that you receive only the freshest and most flavorful produce.
                        </p>
                    </div>

                    <!-- Reviews Tab -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <h5>Customer Reviews:</h5>
                        <div class="review">
                            <p><strong>John D:</strong> ★★★★★ "The lettuce was incredibly fresh and flavorful. Perfect for my salad!"</p>
                        </div>
                        <div class="review">
                            <p><strong>Jane S:</strong> ★★★★☆ "Great quality! I loved how crisp the lettuce was."</p>
                        </div>
                        <p class="text-muted">Leave your review below:</p>
                        <textarea class="form-control mb-2" rows="3" placeholder="Write your review here..."></textarea>
                        <button class="btn btn-primary">Submit Review</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Select the main image and all thumbnail images
        const mainImage = document.getElementById('main-image');
        const thumbnails = document.querySelectorAll('.thumbnail');

        // Add event listeners to all thumbnails
        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function () {
                // Change the main image's src to the clicked thumbnail's src
                mainImage.src = this.src;

                // Remove the 'active' class from all thumbnails
                thumbnails.forEach(thumb => thumb.classList.remove('active'));

                // Add the 'active' class to the clicked thumbnail
                this.classList.add('active');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>