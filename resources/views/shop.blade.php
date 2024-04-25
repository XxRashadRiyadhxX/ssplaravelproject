<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Revel Shoes Shop</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
        /* Google Fonts Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            }

            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                min-height: 100vh; /* Change to min-height */
                overflow-x: hidden; /* Prevent horizontal scrolling */
                background: rgb(187,187,187);
                background: linear-gradient(77deg, rgba(187,187,187,1) 47%, rgba(139,139,139,1) 100%);
                align-items: center;
            }

            nav {
                position: fixed;
                top: 15px;
                left: 155px;
                right: 0;
                z-index: 1000;
                display: flex;
                width: 80%;
                height: 90px;
                padding: 2rem;
                flex-wrap: nowrap;
                background: rgba(255, 255, 255, 0.7); /* Adjust the alpha (opacity) value */
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
                padding: 16px 16px;
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
                height: 70px;
                width:70px;
                margin-right: 10px;
                border-radius: 60%;
            }

            .logo span {
                font-size: 24px;
                color: black;
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
                width: 100px;
                height: 30px;
                background-color: #FFD700;
                color: black;
                font-size: 12px;
                font-weight: bold;
                padding: 5px 10px;
                text-align: center;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }

            .register-button button:hover {
                background-color: yellow;
                color: black;
            }

            .product-cards-1 {
                display: flex;
                justify-content: space-around; /* Adjust the alignment based on your preference */
                align-items: center;
            }

            .product-cards-2 {
                display: flex;
                justify-content:space-around;
                align-items: center;
            }

            .product-card {
            color: #000; /* Change text color to white */
            margin: 25px;
            position: relative;
            max-width: 355px;
            width: 100%;
            border-radius: 25px;
            padding: 20px 30px 30px 30px;
            background: #000;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            z-index: 3;
            overflow: hidden;
            }
            .product-card .logo-cart{
            display: flex;
            align-items: center;
            justify-content: space-between;
            }
            .product-card .logo-cart img{
            height: 60px;
            width: 60px;
            object-fit: cover;
            }
            .product-card .logo-cart i{
            font-size: 27px;
            color: #707070;
            cursor: pointer;
            transition: color 0.3s ease;
            }
            .product-card .logo-cart i:hover{
            color: #333;
            }
            .product-card .main-images{
            position: relative;
            height: 210px;
            }
            .product-card .main-images img{
            position: absolute;
            height: 300px;
            width: 300px;
            object-fit: cover;
            transform: rotate(18deg);
            left: 12px;
            top: -40px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.5s ease;
            }
            .product-card .main-images img.active{
            opacity: 1;
            }
            .product-card .shoe-details .shoe_name{
            font-size: 24px;
            font-weight: 500;
            color: #f8f8ff;
            }
            .product-card .shoe-details p{
            font-size: 12px;
            font-weight: 400;
            color: #fff;
            text-align: justify;
            }
            .product-card .shoe-details .stars i{
            margin: 0 -1px;
            color: #333;
            }
            .product-card .color-price .color-option{
            display: flex;
            align-items: center;
            }
            .color-price{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            }
            .color-price .color-option .color{
            font-size: 18px;
            font-weight: 500;
            color: #333;
            margin-right: 8px;
            }
            .color-option  .circles{
            display: flex;
            }
            .color-option  .circles .circle{
            height: 18px;
            width: 18px;
            background: #0071C7;
            border-radius: 50%;
            margin: 0 4px;
            cursor: pointer;
            transition: all 0.4s ease;
            }
            .color-option  .circles .circle.blue.active{
            box-shadow: 0 0 0 2px #fff,
                        0 0 0 4px #0071C7;
            }
            .color-option  .circles .circle.pink{
            background: #FA1795;
            }
            .color-option  .circles .circle.pink.active{
            box-shadow: 0 0 0 2px #fff,
                        0 0 0 4px #FA1795;
            }
            .color-option  .circles .circle.yellow{
            background: #F5DA00;
            }
            .color-option  .circles .circle.yellow.active{
            box-shadow: 0 0 0 2px #fff,
                        0 0 0 4px #F5DA00;
            }
            .color-price .price{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            }
            .color-price .price .price_num{
            font-size: 25px;
            font-weight: 600;
            color: #707070;
            }
            .color-price .price .price_letter{
            font-size: 10px;
            font-weight: 600;
            margin-top: -4px;
            color: #707070;
            }

            .color-option .circles .circle.black {
                background: black;
            }

            .color-option .circles .circle.black.active {
                box-shadow: 0 0 0 2px #fff, 0 0 0 4px black;
            }

            .color-option .circles .circle.brown {
                background: brown;
            }

            .color-option .circles .circle.brown.active {
                box-shadow: 0 0 0 2px #fff, 0 0 0 4px brown;
            }

            .color-option .circles .circle.blue {
                background: blue;
            }

            .color-option .circles .circle.blue.active {
                box-shadow: 0 0 0 2px #fff, 0 0 0 4px blue;
            }

            .color-option .circles .circle.purple {
                background: purple;
            }

            .color-option .circles .circle.purple.active {
                box-shadow: 0 0 0 2px #fff, 0 0 0 4px purple;
            }

            .color-option .circles .circle.black {
                background: black;
            }

            .color-option .circles .circle.black.active {
                box-shadow: 0 0 0 2px #fff, 0 0 0 4px black;
            }

            .color-option .circles .circle.yellow {
                background: yellow;
            }

            .color-option .circles .circle.yellow.active {
                box-shadow: 0 0 0 2px #fff, 0 0 0 4px yellow;
            }

            .color-option .circles .circle.brown {
                background: brown;
            }

            .color-option .circles .circle.brown.active {
                box-shadow: 0 0 0 2px #fff, 0 0 0 4px brown;
            }

            .color-option .circles .circle.yellow {
                background: yellow;
            }

            .color-option .circles .circle.yellow.active {
                box-shadow: 0 0 0 2px #fff, 0 0 0 4px yellow;
            }

            .color-option .circles .circle.red {
                background: red;
            }

            .color-option .circles .circle.red.active {
                box-shadow: 0 0 0 2px #fff, 0 0 0 4px red;
            }

            .color-option .circles .circle.gold {
                background: #c38900;
            }

            .color-option .circles .circle.gold.active {
                box-shadow: 0 0 0 2px #fff, 0 0 0 4px #c38900;
            }

            .color-option .circles .circle.off-white {
                background: #f8f8ff; /* This is a light shade of white, often considered off-white */
            }

            .color-option .circles .circle.off-white.active {
                box-shadow: 0 0 0 2px #fff, 0 0 0 4px #f8f8ff;
            }

            .product-card .button{
            position: relative;
            height: 50px;
            width: 100%;
            border-radius: 25px;
            margin-top: 30px;
            overflow: hidden;
            }
            .product-card .button .button-layer{
            position: absolute;
            height: 100%;
            width: 300%;
            left: -100%;
            background-image: linear-gradient(135deg,#9708CC, #43CBFF,#9708CC, #43CBFF );
            transition: all 0.4s ease;
            border-radius: 25PX;
            }
            .product-card .button:hover .button-layer{
            left: 0;
            }
            .product-card .button button{
            position: relative;
            height: 100%;
            width: 100%;
            background: none;
            outline: none;
            border: none;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 1px;
            color: #fff;
            }

            .new-designs-message {
                background-color: black;
                text-align: center;
                padding: 30px;
                margin:30px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }

            .new-designs-message p {
                font-size: 18px;
                color: #c38900;
                font-weight: bold;
                margin: 0;
                padding: 0;
            }


            .footer {
                background-color: black;
                color: white;
                text-align: center;
                padding: 20px;
                width:100%;
            }

            .footer p {
                margin: 0;
                font-size: 14px;
                margin-top: 15px;
            }

            .footer-content {
                display: flex;
                justify-content: space-around;
            }

            .footer-section {
                text-align: left;
            }

            .footer-section h3 {
                font-size: 16px;
                margin-bottom: 10px;
            }

            .footer-section ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .footer-section ul li {
                margin-bottom: 5px;
            }

            .footer-section a {
                color: white;
                text-decoration: none;
            }

            .footer-section a:hover {
                color: #FFD700;
            }

            .event-title-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
            }

            .event-title {
                text-align: center;
                color: #fff; 
                font-size: 48px;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                filter: brightness(100%);
                font-family: 'cursive';
                margin-top: 200px;
                transition: color 0.3s;
                padding: 20px 20px 20px; /* Adjust top padding to move it down */
                background-color: #000; /* Black background color */
                width: 400px; /* Adjust width as needed */
                opacity: 2.0; /* Adjust opacity to make it darker */
            }

            .event-title:hover {
                color: #ff0000; /* Lighter version of red */
            }

     </style>
   </head>
   <title>Revel Shoes SSP</title>
<body>
    <nav>
        <div class="logo">
        <img src="https://w0.peakpx.com/wallpaper/728/639/HD-wallpaper-jordan-1-black-francisco-jordan-fashion-hypebeast-nike-offwhite-red-shoes-sneakers-stockx-supreme.jpg" alt="">
        <span>Revel Shoes</span>
        </div>
        <div class="tabs">
        <a href="#customize">Customize</a>
        <a href="{{ route('events') }}">Events</a>
        <a href="{{ route('shop') }}">Shop</a>
        </div>
        <div class="register-button">
            <a href="{{ route('homepage') }}">Home</a>
        </div>
    </nav>

    <section style="background-image: url(https://static.dezeen.com/uploads/2014/06/Sneakerboy-by-March-Studio_dezeen_468_7.jpg); background-size: cover; background-position: center 75%; height: 400px; filter: brightness(80%); opacity: 0.7; display: flex; flex-direction: column; justify-content: flex-end; padding-bottom: 150px;">
    <div class="event-title-container">
        <h1 class="event-title">Best Sellers</h1>
    </div>
    </section>

    <div class="product-cards-1">
        <div class="product-card">
            <div class="logo-cart">
                <!--<img src="images/logo.jpg" alt="logo">-->
                <i class='bx bx-shopping-bag'></i>
            </div>
            <div class="main-images" style="margin-top: -180px;">
                <img id="black" class="black active" src="images/black.png" alt="black">
                <img id="brown" class="brown" src="images/brown.png" alt="brown">
                <img id="blue" class="blue" src="images/blue.png" alt="blue">
            </div>
            <img src="https://img.freepik.com/free-photo/pair-brown-shoes-with-black-leather-sole-word-bottom_123827-23446.jpg?size=626&ext=jpg&ga=GA1.1.1546980028.1703289600&semt=ais" alt="Collection 1" class="shoe-image" style="width: 300px;"> <!-- New image tag added -->
            <div class="shoe-details">
                <span class="shoe_name">Old and Gold</span>
                <p>Timeless and effortlessly stylish, blending classic aesthetics with contemporary allure.</p>
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bx-star' ></i>
                </div>
            </div>
            <div class="color-price">
                <div class="color-option">
                    <span class="color">Colour:</span>
                    <div class="circles">
                        <span class="circle black active"  id="black"></span>
                        <span class="circle brown" id="brown"></span>
                        <span class="circle blue" id="blue"></span>
                    </div>
                </div>
                <div class="price">
                    <span class="price_num">$150.00</span>
                    <span class="price_letter">Only 6 left in stock !</span>
                </div>
            </div>
            <div class="button">
                <div class="button-layer"></div>
                <button>Add To Cart</button>
            </div>
        </div>

        <div class="product-card">
        <div class="logo-cart">
        <!--<img src="images/logo.jpg" alt="logo">-->
        <i class='bx bx-shopping-bag'></i>
        </div>
        <div class="main-images" style="margin-top: -180px;">
            <img id="blue" class="blue active" src="images/blue.png" alt="blue">
            <img id="pink" class="pink" src="images/pink.png" alt="blue">
            <img id="yellow" class="yellow" src="images/yellow.png" alt="blue">
        </div>
        <img src="https://rukminim2.flixcart.com/image/450/500/l3dcl8w0/shoe/d/s/m/8-ga1118-8-adidas-cblack-stone-actgol-original-imagegegzhhgzhk3.jpeg?q=90&crop=false" alt="Collection 2" class="shoe-image" style="width: 300px; height: 200px;">

        <div class="shoe-details">
        <span class="shoe_name">Sport Mode</span>
        <p>Tailored to be the perfect choice for sports enthusiasts and active lifestyles.</p>
        <div class="stars">
            <i class='bx bxs-star' ></i>
            <i class='bx bxs-star' ></i>
            <i class='bx bxs-star' ></i>
            <i class='bx bxs-star' ></i>
            <i class='bx bx-star' ></i>
        </div>
        </div>
        <div class="color-price">
        <div class="color-option">
            <span class="color">Colour:</span>
            <div class="circles">
            <span class="circle blue active"  id="blue"></span>
            <span class="circle pink " id="pink"></span>
            <span class="circle yellow " id="yellow"></span>
            </div>
        </div>
        <div class="price">
            <span class="price_num">$120.00</span>
            <span class="price_letter">Only 1 left in stock !</span>
        </div>
        </div>
        <div class="button">
        <div class="button-layer"></div>
        <button>Add To Cart</button>
        </div>
        </div>

        <div class="product-card">
        <div class="logo-cart">
            <!--<img src="images/logo.jpg" alt="logo">-->
            <i class='bx bx-shopping-bag'></i>
        </div>
        <div class="main-images" style="margin-top: -180px;">
            <img id="purple" class="purple active" src="images/purple.png" alt="purple">
            <img id="yellow" class="yellow" src="images/yellow.png" alt="yellow">
        </div>
        <img src="https://i.pinimg.com/236x/06/e2/e7/06e2e7ed9e287b9cde2908255a48ef68.jpg" alt="Collection 3" class="shoe-image" style="width: 300px; height: 200px;">
        <div class="shoe-details">
            <span class="shoe_name">Broken Amethyst</span>
            <p>Embark on a transformative journey with a captivating design for an entirely fresh look.</p>
            <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bx-star' ></i>
            </div>
        </div>
        <div class="color-price">
            <div class="color-option">
                <span class="color">Colour:</span>
                <div class="circles">
                    <span class="circle purple active"  id="purple"></span>
                    <span class="circle yellow " id="yellow"></span>
                </div>
            </div>
            <div class="price">
                <span class="price_num">$199.00</span>
                <span class="price_letter">Only 9 left in stock !</span>
            </div>
        </div>
        <div class="button">
            <div class="button-layer"></div>
            <button>Add To Cart</button>
        </div>
        </div>

    </div>

    <div class="product-cards-2">
        <div class="product-card">
            <div class="logo-cart">
                <!--<img src="images/logo.jpg" alt="logo">-->
                <i class='bx bx-shopping-bag'></i>
            </div>
            <div class="main-images" style="margin-top: -180px;">
                <img id="off-white" class="off-white active" src="images/off-white.png" alt="off-white">
                <img id="purple" class="purple" src="images/purple.png" alt="purple">
                <img id="black" class="black" src="images/black.png" alt="black">
            </div>
            <img src="https://images.squarespace-cdn.com/content/v1/53a2b3a1e4b0a5020bebe676/1475654193100-3P0KPI6P5T2AZCGARTSN/shoe-footwear-product-photography-london-adidas-ultra-boost-21.jpg?format=2500w" alt="Collection 4" class="shoe-image" style="width: 300px;">
            <div class="shoe-details">
                <span class="shoe_name">A73 Comfys</span>
                <p>Experience unparalleled comfort as you immerse yourself in the plush embrace of these shoes.</p>
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bx-star' ></i>
                </div>
            </div>
            <div class="color-price">
                <div class="color-option">
                    <span class="color">Colour:</span>
                    <div class="circles">
                        <span class="circle off-white active"  id="off-white"></span>
                        <span class="circle purple" id="purple"></span>
                        <span class="circle black" id="black"></span>
                    </div>
                </div>
                <div class="price">
                    <span class="price_num">$230.00</span>
                    <span class="price_letter">Only 5 left in stock !</span>
                </div>
            </div>
            <div class="button">
                <div class="button-layer"></div>
                <button>Add To Cart</button>
            </div>
        </div>

        <div class="product-card">
            <div class="logo-cart">
                <!--<img src="images/logo.jpg" alt="logo">-->
                <i class='bx bx-shopping-bag'></i>
            </div>
            <div class="main-images" style="margin-top: -180px;">
                <img id="red" class="red active" src="images/red.png" alt="red">
            </div>
            <img src="https://images.journeys.com/images/products/1_5160_FS_ALT1C.JPG" alt="Collection 5" class="shoe-image" style="width: 300px; height: 200px;">
            <div class="shoe-details">
                <span class="shoe_name">Converse Ruby Red</span>
                <p>Unleash your confidence with a pair that exudes a daring and stylish demeanor.</p>
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bx-star' ></i>
                </div>
            </div>
            <div class="color-price">
                <div class="color-option">
                    <span class="color">Colour:</span>
                    <div class="circles">
                        <span class="circle red active"  id="red"></span>
                    </div>
                </div>
                <div class="price">
                    <span class="price_num">$249.00</span>
                    <span class="price_letter">Only 4 left in stock !</span>
                </div>
            </div>
            <div class="button">
                <div class="button-layer"></div>
                <button>Add To Cart</button>
            </div>
        </div>

        <div class="product-card">
            <div class="logo-cart">
                <!--<img src="images/logo.jpg" alt="logo">-->
                <i class='bx bx-shopping-bag'></i>
            </div>
            <div class="main-images" style="margin-top: -180px;">
                <img id="gold" class="gold active" src="images/gold.png" alt="gold">
            </div>
            <img src="https://schiffgold.com/wp-content/uploads/2018/09/gold-nike2.png" alt="Collection 6" class="shoe-image" style="width: 300px;">
            <div class="shoe-details">
                <span class="shoe_name">Pirate Treasure</span>
                <p>Elevate your everyday style with a nonchalant display of casual sophistication and flair.</p>
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bx-star' ></i>
                </div>
            </div>
            <div class="color-price">
                <div class="color-option">
                    <span class="color">Colour:</span>
                    <div class="circles">
                        <span class="circle gold active"  id="gold"></span>
                    </div>
                </div>
                <div class="price">
                    <span class="price_num">$300.00</span>
                    <span class="price_letter">Only 3 left in stock !</span>
                </div>
            </div>
            <div class="button">
                <div class="button-layer"></div>
                <button>Add To Cart</button>
            </div>
        </div>
    </div>

    <!-- Add the message section -->
    <div class="new-designs-message">
        <p>New and more shoe designs coming soon!</p>
    </div>

    <footer>
        <div class="footer">
            <div class="footer-content">
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: info@revelshoes.com</p>
                <p>Phone: +1 (555) 123-4567</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Main Tabs</h3>
                <ul>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Featured Collections</a></li>
                <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            </div>
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </div>
    </footer>
  <script>

   circle.addEventListener("click", (e)=>{
     let target = e.target;
     if(target.classList.contains("circle")){
       circle.querySelector(".active").classList.remove("active");
       target.classList.add("active");
       document.querySelector(".main-images .active").classList.remove("active");
       document.querySelector(`.main-images .${target.id}`).classList.add("active");
     }
   });
  </script>
</body>
</html>
