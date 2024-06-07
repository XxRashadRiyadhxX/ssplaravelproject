<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shop Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
        }

        nav {
            position: fixed;
            top: 15px;
            left: 252px;
            right: 0;
            z-index: 1000;
            display: flex;
            width: 78%;
            height: 30px;
            padding: 2rem;
            flex-wrap: nowrap;
            background: rgba(255, 255, 255, 0.9);
            justify-content: space-between;
            align-items: center;
            border-radius: 25px;
            margin-top: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: black;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            padding: 16px 26px;
            display: inline-block;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #FFD700;
            color: black;
            cursor: pointer;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px;
            width: 65px;
            margin-right: 10px;
            border-radius: 70%;
        }

        .logo span {
            font-size: 24px;
            color: red;
            font-family: 'cursive';
        }

        .tabs {
            flex-grow: 1;
            display: flex;
            justify-content: center;
        }

        .tabs a {
            display: inline-block;
        }

        .register-button button {
            background-color: #FFD700;
            color: black;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .register-button button:hover {
            background-color: yellow;
            color: black;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        .search-bar button {
            margin-right: 15px;
            background-color: #FFD700;
            color: #333;
            border: none;
            padding: 10px;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .search-bar button:hover {
            background-color: yellow;
        }

        .cart-icon {
            margin-left: auto;
        }

        .cart-icon a {
            color: black;
            font-size: 20px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
            padding: 10px;
        }

        .cart-icon a:hover {
            color: #FFD700;
        }

        .cart-icon a i {
            position: relative;
            z-index: 1;
        }

        .cart-icon a:hover i {
            color: #333; /* Change cart icon color on hover */
        }

        .cart-icon a:hover .badge {
            color: black; /* Ensure badge text color remains consistent */
        }

        .sidebar {
            position: fixed;
            top: -60px;
            left: 0;
            width: 200px;
            height: calc(100% - 20px);
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            overflow-y: auto;
            margin-top: 60px;
        }

        .sidebar h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .sidebar ul li a:hover {
            color: #FFD700;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            margin-top: 25px;
            margin-left: 250px;
        }

        .product {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            width: calc(33.33% - 20px);
        }

        .product img {
            width: 400px;
            height: 250px;
            display: block;
        }

        .product-info {
            padding: 20px;
        }

        .product-info h2 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 20px;
            color: #333;
        }

        .product-info p {
            margin: 0;
            color: #888;
        }

        .product-info .price {
            font-weight: bold;
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .product .add-to-cart {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .product .add-to-cart:hover {
            background-color: #45a049;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 0px 0;
        }

        .footer-item {
            margin-bottom: 30px;
        }

        .footer-item h4 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .footer-item p {
            margin-bottom: 10px;
        }

        .footer-item a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-item a:hover {
            color: #FFD700;
        }

        .footer-item img {
            max-width: 100%;
            height: auto;
        }

        .footer .container {
            max-width: 1200px;
            
            padding: 20px;
        }

        .footer .container-fluid {
            padding: 0 20px;
        }

        .footer .btn-outline-secondary {
            border: 1px solid #ccc;
        }

        .footer .btn-outline-secondary:hover {
            background-color: #FFD700;
            color: #fff;
            border: none;
        }

        .banner {
            text-align: center;
            margin-top: 150px;
            padding: 190px 0;
            background-image: url('https://i.pinimg.com/originals/fa/45/96/fa4596ad9a9d39901eeb455ed4f74e44.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            margin-left: 180px;
        }

        .banner h2 {
            font-size: 48px;
            color: #fff;
        }

        /* New Styles for Sidebar Additions */
        .price-filter {
            margin-bottom: 20px;
        }

        .price-filter h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .price-filter input {
            width: 100%;
        }

        .featured-products {
            margin-bottom: 20px;
        }

        .featured-product {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .featured-product img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .featured-product-info {
            flex-grow: 1;
        }

        .featured-product-info h4 {
            font-size: 14px;
            margin: 0 0 5px;
        }

        .featured-product-info .price {
            font-size: 12px;
            color: #333;
        }

        .star-rating {
            color: #FFD700;
            font-size: 12px;
        }

        .view-more-btn .btn{
            display: block;
            text-align: center;
            margin-bottom: 20px;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .promotional-img img {
            width: 100%;
            height: auto;
        }

        /* Social media icons section */
        .d-flex.justify-content-end {
        margin-top: 20px;
        }

        .d-flex.justify-content-end .btn {
        font-size: 1.5rem;
        margin-left: 10px;
        color: black;
        border: 1px solid #333;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: background-color 0.3s ease;
        }

        .d-flex.justify-content-end .btn:hover {
        background-color: #FFD700;
        }

        /* Align buttons horizontally */
        .d-flex.justify-content-end {
        display: flex;
        align-items: center;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="https://w0.peakpx.com/wallpaper/728/639/HD-wallpaper-jordan-1-black-francisco-jordan-fashion-hypebeast-nike-offwhite-red-shoes-sneakers-stockx-supreme.jpg" alt="">
            <span>Revel Designs</span>
        </div>
        
        <div class="tabs">
            <a href="{{ route('customize-shoe') }}">Customize</a>
            <a href="{{ route('events') }}">Events</a>
            <a href="{{ route('shop.index') }}">Shop</a>
        </div>

        <div class="search-bar">
            <input type="text" id="search-input" placeholder="Search">
            <button id="search-btn"><i class="fas fa-search"></i></button>
        </div>
        <div class="cart-icon">
            <a href="{{ route('cart.index') }}">
                <i class="fas fa-shopping-cart"></i>
                <span class="badge badge-pill badge-danger">{{ \App\Http\Controllers\CartController::cartItemCount() }}</span>
            </a>
        </div>
        
        <div class="register-button">
            <a href="{{ route('homepage') }}">Home</a>
        </div>
    </nav>

    <div class="banner">
        <h2></h2>
    </div>
    <div class="sidebar">
    <h3>Categories</h3>
    <ul id="categories">
        <li><a href="#" data-category="Nike">Nike</a></li>
        <li><a href="#" data-category="Adidas">Adidas</a></li>
        <li><a href="#" data-category="Puma">Puma</a></li>
        <li><a href="#" data-category="Converse">Converse</a></li>
    </ul>


        <div class="price-filter">
            <h3>Filter by Price</h3>
            <input type="range" id="price-range" min="10.99" max="59.99" value="35.49" step="0.01">
            <span id="price-value">$35.49</span>
        </div>

        <div class="featured-products">
            <h3>Featured Products</h3>
            <div class="featured-product">
                <img src="https://img.freepik.com/premium-photo/red-sneaker-sports-shoes-side-view-white-background_186673-5629.jpg" alt="Featured Product">
                <div class="featured-product-info">
                    <h4>Product Name</h4>
                    <div class="star-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$29.99</div>
                </div>
            </div>
            <div class="featured-product">
                <img src="https://i0.wp.com/jetprintapp.com/wp-content/uploads/2021/05/1662358709-Black-Sole-Mesh-Running-Shoes-1.jpg?fit=1000%2C1000&ssl=1" alt="Featured Product">
                <div class="featured-product-info">
                    <h4>Product Name</h4>
                    <div class="star-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$29.99</div>
                </div>
            </div>
            <div class="featured-product">
                <img src="https://cdn11.bigcommerce.com/s-s62r70/images/stencil/1280x1280/products/3391/11986/NEW-BALANCE-m990gl5-MENS-USA-MADE-SNEAKERS-SIDE-VIEW__13635.1663412723.jpg?c=2" alt="Featured Product">
                <div class="featured-product-info">
                    <h4>Product Name</h4>
                    <div class="star-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$29.99</div>
                </div>
            </div>
        </div>

        <div class="view-more-btn">
            <a href="#" class="btn">View More</a>
        </div>

        <div class="promotional-img">
            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/sports-shoes-poster-design-template-5dd04842d8209ac0acf7d3b14f9e07a0_screen.jpg?ts=1676612653" alt="Promotional Image">
        </div>
    </div>
    <div class="container" id="product-container">
        <div class="product" data-id="1" data-name="Nike Air Force 1" data-color="Off White" data-price="29.99" data-stock="100" data-image="https://img.buzzfeed.com/buzzfeed-static/complex/images/Y19jcm9wLGhfMTEyMyx3XzE5OTcseF8zLHlfNDkz/cpke9mglhd9byczcte69/nike-air-force-1-high-vintage-sail-dm0209-100-pair.jpg?output-format=jpg&output-quality=auto" data-category="Nike">
            <img src="https://img.buzzfeed.com/buzzfeed-static/complex/images/Y19jcm9wLGhfMTEyMyx3XzE5OTcseF8zLHlfNDkz/cpke9mglhd9byczcte69/nike-air-force-1-high-vintage-sail-dm0209-100-pair.jpg?output-format=jpg&output-quality=auto" alt="Product Image">
            <div class="product-info">
                <h2>Nike Air Force 1 </h2>
                <h2>Color : Off White </h2>
                <p>Description of the product goes here. This can be a brief overview of the product.</p>
                <p class="price">$29.99</p>
                <button class="add-to-cart" data-id="1" data-name="Nike Air Force 1" data-color="Off White" data-price="29.99" data-stock="100" data-image="https://img.buzzfeed.com/buzzfeed-static/complex/images/Y19jcm9wLGhfMTEyMyx3XzE5OTcseF8zLHlfNDkz/cpke9mglhd9byczcte69/nike-air-force-1-high-vintage-sail-dm0209-100-pair.jpg?output-format=jpg&output-quality=auto">Add to Cart</button>
            </div>
        </div>
        <div class="product" data-id="2" data-name="Adidas Sneakers NY Knicks Edition" data-color="White, Blue and Orange" data-price="19.99" data-stock="100" data-image="https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2023%2F02%2Fadidas-basketball-lifestyle-footwear-preview-info-6.jpg?cbr=1&q=90" data-category="Adidas">
            <img src="https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2023%2F02%2Fadidas-basketball-lifestyle-footwear-preview-info-6.jpg?cbr=1&q=90" alt="Product Image">
            <div class="product-info">
                <h2>Adidas Sneakers NY Knicks Edition</h2>
                <h2>Color : White, Blue and Orange</h2>
                <p>Description of the product goes here. This can be a brief overview of the product.</p>
                <p class="price">$19.99</p>
                <button class="add-to-cart" data-id="2" data-name="Adidas Sneakers NY Knicks Edition" data-color="White, Blue and Orange" data-price="19.99" data-stock="100" data-image="https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2023%2F02%2Fadidas-basketball-lifestyle-footwear-preview-info-6.jpg?cbr=1&q=90">Add to Cart</button>
            </div>
        </div>
        <div class="product" data-id="3" data-name="Puma Fast-R Nitro Elite" data-color="Red and Blue" data-price="16.99" data-stock="100" data-image="https://images.novelship.com/product/puma_fast_r_nitro_elite__red_ultra_blue_mismatch___5_91933.jpeg?fit=fill&bg=FFFFFF&trim=color&auto=format,compress&q=75&h=400" data-category="Puma">
            <img src="https://images.novelship.com/product/puma_fast_r_nitro_elite__red_ultra_blue_mismatch___5_91933.jpeg?fit=fill&bg=FFFFFF&trim=color&auto=format,compress&q=75&h=400" alt="Product Image">
            <div class="product-info">
                <h2>Puma Fast-R Nitro Elite</h2>
                <h2>Color : Red and Blue </h2>
                <p>Description of the product goes here. This can be a brief overview of the product.</p>
                <p class="price">$16.99</p>
                <button class="add-to-cart" data-id="3" data-name="Puma Fast-R Nitro Elite" data-color="Red and Blue" data-price="16.99" data-stock="100" data-image="https://images.novelship.com/product/puma_fast_r_nitro_elite__red_ultra_blue_mismatch___5_91933.jpeg?fit=fill&bg=FFFFFF&trim=color&auto=format,compress&q=75&h=400">Add to Cart</button>
            </div>
        </div>
        <div class="product" data-id="4" data-name="Converse Chuck Taylor All Star" data-color="Black and Yellow" data-price="24.99" data-stock="100" data-image="https://www.kickscrew.com/cdn/shop/files/3_a3afb07c-e0d1-451b-89e2-4514b32642c0_540x.jpg?v=1708396641" data-category="Converse">
            <img src="https://www.kickscrew.com/cdn/shop/files/3_a3afb07c-e0d1-451b-89e2-4514b32642c0_540x.jpg?v=1708396641" alt="Product Image">
            <div class="product-info">
                <h2>Converse Chuck Taylor All Star</h2>
                <h2>Color : Black and Yellow </h2>
                <p>Description of the product goes here. This can be a brief overview of the product.</p>
                <p class="price">$24.99</p>
                <button class="add-to-cart" data-id="4" data-name="Converse Chuck Taylor All Star" data-color="Black and Yellow" data-price="24.99" data-stock="100" data-image="https://www.kickscrew.com/cdn/shop/files/3_a3afb07c-e0d1-451b-89e2-4514b32642c0_540x.jpg?v=1708396641">Add to Cart</button>
            </div>
        </div>
        <div class="product" data-id="5" data-name="Nike Hyperdunks 2018 USA Edition" data-color="Red, White and Blue" data-price="29.99" data-stock="100" data-image="https://i.pinimg.com/originals/b4/19/94/b41994b9edaca14ce18a043cc0c8c284.jpg" data-category="Nike">
            <img src="https://i.pinimg.com/originals/b4/19/94/b41994b9edaca14ce18a043cc0c8c284.jpg" alt="Product Image">
            <div class="product-info">
                <h2>Nike Hyperdunks 2018 USA Edition</h2>
                <h2>Color : Red, White and Blue</h2>
                <p>Description of the product goes here. This can be a brief overview of the product.</p>
                <p class="price">$29.99</p>
                <button class="add-to-cart" data-id="5" data-name="Nike Hyperdunks 2018 USA Edition" data-color="Red, White and Blue" data-price="29.99" data-stock="100" data-image="https://i.pinimg.com/originals/b4/19/94/b41994b9edaca14ce18a043cc0c8c284.jpg">Add to Cart</button>
            </div>
        </div>
        <div class="product" data-id="6" data-name="Adidas Men Running Shoe" data-color="Black" data-price="19.99" data-stock="100" data-image="https://www.verywellfit.com/thmb/FELNOxgyoZ6T5p-HVvrUJxkymCA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/best-adidas-running-shoes--50f18eff817b490dbc2cea1a463ef494.jpg" data-category="Adidas">
            <img src="https://www.verywellfit.com/thmb/FELNOxgyoZ6T5p-HVvrUJxkymCA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/best-adidas-running-shoes--50f18eff817b490dbc2cea1a463ef494.jpg" alt="Product Image">
            <div class="product-info">
                <h2>Adidas Men Running Shoe</h2>
                <h2>Color : Black</h2>
                <p>Description of the product goes here. This can be a brief overview of the product.</p>
                <p class="price">$19.99</p>
                <button class="add-to-cart" data-id="6" data-name="Adidas Men Running Shoe" data-color="Black" data-price="19.99" data-stock="100" data-image="https://www.verywellfit.com/thmb/FELNOxgyoZ6T5p-HVvrUJxkymCA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/best-adidas-running-shoes--50f18eff817b490dbc2cea1a463ef494.jpg">Add to Cart</button>
            </div>
        </div>
        <div class="product" data-id="7" data-name="Adidas Harden Stepback Shoe" data-color="Pink" data-price="19.99" data-stock="100" data-image="https://www.manelsanchez.fr/uploads/media/images/adidas-harden-stepback-3-jr-pink-panther-12.jpg" data-category="Adidas" >
            <img src="https://www.manelsanchez.fr/uploads/media/images/adidas-harden-stepback-3-jr-pink-panther-12.jpg" alt="Product Image">
            <div class="product-info">
                <h2>Adidas Harden Stepback Shoe</h2>
                <h2>Color : Pink </h2>
                <p>Description of the product goes here. This can be a brief overview of the product.</p>
                <p class="price">$19.99</p>
                <button class="add-to-cart" data-id="7" data-name="Adidas Harden Stepback Shoe" data-color="Pink" data-price="19.99" data-stock="100" data-image="https://www.manelsanchez.fr/uploads/media/images/adidas-harden-stepback-3-jr-pink-panther-12.jpg">Add to Cart</button>
            </div>
        </div>
        <div class="product" data-id="8" data-name="Converse G4 Basketball 2023" data-color="Multi-colored" data-price="49.99" data-stock="100" data-image="https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2020%2F04%2Fconverse-g4-official-release-date-info-3.jpg?cbr=1&q=90" data-category="Converse">
            <img src="https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2020%2F04%2Fconverse-g4-official-release-date-info-3.jpg?cbr=1&q=90" alt="Product Image">
            <div class="product-info">
                <h2>Converse G4 Basketball 2023</h2>
                <h2>Color : Multi-colored </h2>
                <p>Description of the product goes here. This can be a brief overview of the product.</p>
                <p class="price">$49.99</p>
                <button class="add-to-cart" data-id="8" data-name="Converse G4 Basketball 2023" data-color="Multi-colored" data-price="49.99" data-stock="100" data-image="https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2020%2F04%2Fconverse-g4-official-release-date-info-3.jpg?cbr=1&q=90">Add to Cart</button>
            </div>
        </div>
        <div class="product" data-id="9" data-name="Nike Kyrie 7 Special FX" data-color="Turquoise" data-price="34.99" data-stock="100" data-image="https://i.pinimg.com/736x/0b/09/d0/0b09d031aacb39965de9c8a41cd10a6d.jpg" data-category="Nike">
            <img src="https://i.pinimg.com/736x/0b/09/d0/0b09d031aacb39965de9c8a41cd10a6d.jpg" alt="Product Image">
            <div class="product-info">
                <h2>Nike Kyrie 7 Special FX</h2>
                <h2>Color : Turquoise </h2>
                <p>Description of the product goes here. This can be a brief overview of the product.</p>
                <p class="price">$34.99</p>
                <button class="add-to-cart" data-id="9" data-name="Nike Kyrie 7 Special FX" data-color="Turquoise" data-price="34.99" data-stock="100" data-image="https://i.pinimg.com/736x/0b/09/d0/0b09d031aacb39965de9c8a41cd10a6d.jpg">Add to Cart</>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="footer">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4>Why People Like us!</h4>
                            <p>Typesetting, remaining essentially unchanged. It was popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4>Shop Info</h4>
                            <a href="#" class="btn-link">About Us</a>
                            <a href="#" class="btn-link">Contact Us</a>
                            <a href="#" class="btn-link">Privacy Policy</a>
                            <a href="#" class="btn-link">Terms & Condition</a>
                            <a href="#" class="btn-link">Return Policy</a>
                            <a href="#" class="btn-link">FAQs & Help</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4>Account</h4>
                            <a href="#" class="btn-link">My Account</a>
                            <a href="#" class="btn-link">Shop details</a>
                            <a href="#" class="btn-link">Shopping Cart</a>
                            <a href="#" class="btn-link">Wishlist</a>
                            <a href="#" class="btn-link">Order History</a>
                            <a href="#" class="btn-link">International Orders</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4>Contact</h4>
                            <p>Address: 1429 Netus Rd, NY 48247</p>
                            <p>Email: Example@gmail.com</p>
                            <p>Phone: +0123 4567 8910</p>
                            <p>Payment Accepted</p>
                            <img src="img/payment.png" alt="">
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-outline-secondary me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-secondary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-secondary me-2" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-secondary" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Filter by price functionality
        const priceRange = document.getElementById('price-range');
        const priceValue = document.getElementById('price-value');
        const productContainer = document.getElementById('product-container');
        const products = productContainer.getElementsByClassName('product');
        const categories = document.getElementById('categories');

        // Initialize product counts
        const initialCategoryCounts = countProductsByCategory();

        // Display initial category counts
        updateCategoryCounts(initialCategoryCounts);

        priceRange.addEventListener('input', function() {
            const value = parseFloat(priceRange.value).toFixed(2);
            priceValue.textContent = `$${value}`;
            filterProducts();
        });

        function filterProducts() {
            const price = parseFloat(priceRange.value);
            let categoryCounts = {};

            Array.from(products).forEach(product => {
                const productPrice = parseFloat(product.getAttribute('data-price'));
                const category = product.getAttribute('data-category');

                if (productPrice <= price) {
                    product.style.display = '';
                    if (categoryCounts[category]) {
                        categoryCounts[category]++;
                    } else {
                        categoryCounts[category] = 1;
                    }
                } else {
                    product.style.display = 'none';
                }
            });

            updateCategoryCounts(categoryCounts);
        }

        function countProductsByCategory() {
            let categoryCounts = {};
            Array.from(products).forEach(product => {
                const category = product.getAttribute('data-category');
                if (categoryCounts[category]) {
                    categoryCounts[category]++;
                } else {
                    categoryCounts[category] = 1;
                }
            });
            return categoryCounts;
        }

        function updateCategoryCounts(counts) {
            const categoryLinks = categories.getElementsByTagName('a');
            Array.from(categoryLinks).forEach(link => {
                const category = link.getAttribute('data-category');
                const count = counts[category] || 0;
                link.textContent = `${category} (${count})`;
            });
        }

        // Search bar functionality
        const searchBtn = document.getElementById('search-btn');
        const searchInput = document.getElementById('search-input');

        searchBtn.addEventListener('click', function() {
            const searchTerm = searchInput.value.toLowerCase();
            Array.from(products).forEach(product => {
                const productName = product.getElementsByTagName('h2')[0].textContent.toLowerCase();
                if (productName.includes(searchTerm)) {
                    product.scrollIntoView({ behavior: 'smooth' });
                    product.style.border = '2px solid red';
                    setTimeout(() => {
                        product.style.border = '';
                    }, 2000);
                }
            });
        });

        // Update category counts on page load
        filterProducts();

        // View more button functionality
        const viewMoreBtn = document.querySelector('.view-more-btn .btn');
        viewMoreBtn.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = "{{ route('shop.index') }}";
        });

        // Add to cart functionality
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        const cartItemCountElement = document.querySelector('.cart-icon .badge');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                const productName = this.getAttribute('data-name');
                const productColor = this.getAttribute('data-color');
                const productPrice = parseFloat(this.getAttribute('data-price'));
                const productStock = this.getAttribute('data-stock');
                const productImage = this.getAttribute('data-image');

                fetch('/cart/add', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        id: productId,
                        name: productName,
                        color: productColor,
                        price: productPrice,
                        stock: productStock,
                        image: productImage
                    })
                })
                .then(response => response.json())
                .then(data => {
                    const cartCount = document.querySelector('.cart-icon .badge');
                    cartCount.textContent = data.cartItemCount;
                })
                .catch(error => console.error('Error adding to cart:', error));
            });
        });
    });
</script>
</body>
</html>
