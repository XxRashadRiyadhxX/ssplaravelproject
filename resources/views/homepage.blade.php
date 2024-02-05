<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <style>
    /* Add your custom styles here */
    /* For example, you might want to style the navigation bar */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh; /* Change to min-height */
        background: rgb(0,0,0);
        background: linear-gradient(90deg, rgba(0,0,0,1) 4%, rgba(113,0,0,1) 35%, rgba(160,0,0,1) 50%, rgba(113,0,0,1) 65%, rgba(0,0,0,1) 96%);
        overflow-x: hidden; /* Prevent horizontal scrolling */
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
      padding: 16px 16px;
      display: inline-block;
      transition: background-color 0.3s, color 0.3s; /* Add transition effect for color change */
    }

    nav a:hover {
      background-color: #FFD700; /* Yellow color on hover */
      color: black;
      cursor: pointer;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 60px;
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
      transition: background-color 0.3s, color 0.3s; /* Add transition effect for color change */
    }

    .register-button button:hover {
      background-color: yellow; /* Yellow color on hover */
      color: black;
    }

    .hero-section {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 900px; /* Adjust the height as needed */
        background: url('https://wallpapers.com/images/featured/jordan-shoes-background-g8km3zwrx9ty5a9y.jpg') center/100% 100% no-repeat; /* Updated background property to cover 100% width and height */
        color: white; /* Text color on top of the background image */
        width: 100%; /* Full width of the viewport */
    }   


    .hero-background {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay for better text readability */
    }

    .hero-content {
        text-align: center;
        z-index: 1;
    }

    .hero-content h1 {
        font-size: 4em;
        margin-bottom: 10px;
        font-family: 'cursive'; /* Use a fancy font */
        color: white; /* Default text color */
        transition: color 0.3s; /* Add transition effect for color change */
    }

    .hero-content h1:hover {
        color: #FFD700; /* Yellow color on hover */
    }

    .hero-content p {
        font-size: 1.4em;
        margin-bottom: 20px;
    }

    .hero-content p:hover {
        color: #FFD700; /* Yellow color on hover */
    }

    .get-started-button button {
        background-color: transparent;
        color: white;
        font-weight: bold;
        padding: 15px 30px;
        border: 2px solid white;
        border-radius: 50px; /* Oval shape */
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s; /* Add transition effect for color change */
    }

    .get-started-button button:hover {
        background-color: #FFD700; /* Yellow color on hover */
        color: black;
        border-color: yellow;
    }

    .story-section {
        display: flex;
        align-items: center;
        justify-content: space-around;
        background: rgb(0,0,0);
        background: linear-gradient(90deg, rgba(0,0,0,1) 4%, rgba(113,0,0,1) 35%, rgba(160,0,0,1) 50%, rgba(113,0,0,1) 65%, rgba(0,0,0,1) 96%);
        padding: 60px; /* Adjust the padding as needed */
        box-sizing: border-box; /* Include padding in total width */
    }

    .story-image {
    flex: 1;
    max-width: 30%;
    margin-right: 20px; /* Adjust the margin as needed */
    }

    .story-image img {
    width: 100%;
    border-radius: 10px; /* Add border-radius for rounded corners */
    }

    .story-content {
    flex: 1;
    max-width: 50%;
    }

    .story-content h2 {
    font-size: 4em;
    margin-bottom: 20px;
    color: white; /* Text color for the heading */
    }

    .story-content p {
    font-size: 1.3em;
    margin-bottom: 20px;
    color: white; /* Text color for the paragraphs */
    }

    .events-section {
    display: flex;
    justify-content: space-between;
    background-color: black; /* Change the background color to black */
    padding: 60px; /* Adjust the padding as needed */
    box-sizing: border-box; /* Include padding in total width */
    }

    .event-item {
    text-align: center;
    width: 23%; /* Adjust the width as needed */
    max-width: 300px; /* Adjust the maximum width as needed */
    }

    .event-item img {
    width: 100%;
    max-width: 100%; /* Set the maximum width to 100% */
    height: 230px; /* Maintain the aspect ratio */
    border: 5px solid #FFD700; /* Yellow border around each image */
    border-radius: 10px; /* Add border-radius for rounded corners */
    margin-bottom: 10px; /* Add margin to create gaps between images */
    }

    .event-details {
    padding: 20px;
    }

    .event-details h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color:#FFD700;
    }

    .event-details p {
    font-size: 1em;
    margin-bottom: 10px;
    color:white;
    }

    .join-button {
    background-color: #FFD700; /* Yellow background */
    color: black;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 50px; /* Oval shape */
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s; /* Add transition effect for color change */
    }

    .join-button:hover {
    background-color: yellow; /* Yellow color on hover */
    color: black;
    }

    .review-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
        box-sizing: border-box;
        width: 100%; /* Increase the width as needed */
        margin: 0 auto; /* Center the section horizontally */
    }

    .review-content {
    max-width: 600px;
    text-align: center;
    margin-bottom: 20px;
    }

    .review-content p {
        color: #FFD700;
        font-weight: bold; /* Make the text bold */
        font-family: 'Your Fancy Font', cursive; /* Replace 'Your Fancy Font' with the actual fancy font you want to use */
        font-size: 1.5em; /* Adjust the font size as needed */
        text-align: center;
        margin-bottom: 10px;
    }

    .review-author {
    display: flex;
    flex-direction: column;
    align-items: center;
    }

    .author-photo {
    width: 150px;
    height: 150px;
    border-radius: 50%; /* Make the image circular */
    margin-bottom: 10px;
    }

    .author-name {
    font-size: 1.2em;
    color: #FFD700;
    font-weight: bold; /* Make the text bold */
    }

    .gallery-section {  
    background: rgb(132,132,132);
    background: linear-gradient(0deg, rgba(132,132,132,1) 0%, rgba(0,0,0,1) 83%);
    padding: 60px; /* Adjust the padding as needed */
    box-sizing: border-box; /* Include padding in total width */
    text-align: center;
    }

    .gallery-heading {
    font-size: 2em;
    margin-bottom: 30px;
    color: white; /* Text color for the gallery heading */
    }

    .gallery-images {
    display: flex;
    justify-content: space-around;
    }

    .gallery-image {
    position: relative;
    width: 250px; /* Adjust the width as needed */
    height: 250px; /* Adjust the height as needed */
    overflow: hidden;
    }

    .gallery-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: grayscale(100%); /* Convert image to black and white by default */
    transition: filter 0.3s; /* Add transition effect for smooth color change */
    }

    .gallery-image:hover img {
    filter: grayscale(0%); /* Remove grayscale filter on hover to reveal original color */
    }

    .featured-collections {
    background: rgb(0,0,0);
    background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(132,132,132,1) 83%);
    margin-top: 0px;
    text-align: center;
    padding: 60px; /* Add padding for better spacing */
    }

    .collection-heading {
        font-size: 3em;
        margin-bottom: 20px;
        color: white; /* Text color for the collection heading */
        font-weight: bold; /* Bold font */
    }

    .collection-images {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .shoe {
        width: 350px; /* Adjusted width for better alignment */
        margin: 20px;
        position: relative; /* Position relative for button positioning */
        text-align: center; /* Center text within the shoe */
    }

    .shoe img {
        width: 100%;
        height: 350px; /* Increase the image height */
        border-radius: 10px;
        margin-bottom: 10px;
        transition: filter 0.3s; /* Add transition for smooth effect on hover */
    }

    .shoe img:hover {
        filter: grayscale(0%); /* Show original color on hover */
    }

    .shoe-info {
        text-align: center; /* Center text within the shoe */
    }

    .shoe-name {
        font-size: 1.5em;
        margin-bottom: 5px;
        color: white; /* Text color for the shoe name */
    }

    .shoe-price {
        font-size: 1.2em;
        margin-bottom: 5px;
        color: #FFD700; /* Yellow color for the price */
    }

    .shoe-description {
        font-size: 1em;
        color: white; /* Text color for the description */
        margin-bottom: 20px;
    }

    .get-yours-button {
      margin-top: 20px;
      background-color: transparent;
      color: white;
      font-weight: bold;
      padding: 10px 20px;
      border: 2px solid white;
      border-radius: 50px; /* Oval shape */
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s; /* Add transition effect for color change */
    }

    .get-yours-button:hover {
        background-color: #FFD700; /* Yellow color on hover */
        color: black;
    }

    .faq-section {
      background: black;
      padding: 60px;
      text-align: center;
      width:100%;
    }

    .faq-heading {
      font-size: 2.5em;
      margin-bottom: 20px;
      color: #FFD700; /* Text color for the FAQ heading */
    }

    .faq-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      width:100%;
    }

    .faq-item {
      width: 70%; /* Adjusted width for better readability */
      margin-bottom: 20px;
    }

    .question {
      font-size: 1.2em;
      font-weight: bold;
      margin-bottom: 10px;
      color: #848484; /* Text color for the question */
    }

    .answer {
      font-size: 1em;
      color: whitesmoke; /* Text color for the answer */
    }

    .contact-section {
      padding: 60px;
      text-align: center;
      width:100%;
      background: linear-gradient(90deg, rgba(0,0,0,1) 4%, rgba(113,0,0,1) 35%, rgba(160,0,0,1) 50%, rgba(113,0,0,1) 65%, rgba(0,0,0,1) 96%);
    }

    .contact-heading {
      font-size: 3em;
      margin-bottom: 20px;
      color: black; /* Text color for the contact heading */
      font-weight: bold; /* Bold font */
    }

    .contact-content {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    form {
      width: 70%;
      max-width: 600px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin: 10px 0;
      color: black; /* Text color for labels */
      font-size: 1.0em; /* Larger font size */
      font-weight: bold; /* Bold font */
      letter-spacing: 1px; /* Adjust letter spacing for style */
      text-transform: uppercase; /* Convert text to uppercase */
    }

    input,
    textarea {
      width: 100%;
      padding: 10px;
      margin: 5px 0 20px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .send-message-button {
      background-color: #FFD700; /* Yellow background */
      color: black;
      font-weight: bold;
      padding: 10px 20px;
      border: none;
      border-radius: 50px; /* Oval shape */
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s; /* Add transition effect for color change */
    }

    .send-message-button:hover {
      background-color: yellow; /* Yellow color on hover */
      color: black;
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

  
  </style>
  <title>Revel Shoes SSP</title>
</head>
<body>
  <nav>
    <div class="logo">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsBBSIUkSdxKAwUor44B1w7AHjJyCBJGEAb7JpLz2cgA&s" alt="">
      <span>Revel Shoes</span>
    </div>
    <div class="tabs">
      <a href="#customize">Customize</a>
      <a href="{{ route('events') }}">Events</a>
      <a href="{{ route('shop') }}">Shop</a>
    </div>
    <div class="register-button">
        <a href="{{ route('register') }}">Register Now</a>
    </div>
  </nav>

    <div class="hero-section">
    <div class="hero-background"></div>
    <div class="hero-content">
            <h1>Shoe Magic</h1>
            <p>Step into the world of customizable shoes and unleash your unique style. Experience the magic of Shoemojo!</p>
            <div class="get-started-button">
            @if (Route::has('register'))
            <button>
                <a href="{{ route('login') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Get Started</a>
            </button>
            @endif
            </div>
        </div>
     </div>

     <div class="story-section">
        <div class="story-image">
            <img src="https://hips.hearstapps.com/hmg-prod/images/mh-10-17-spidey-652ee7e6adb71.jpg?crop=0.401xw:0.801xh;0.0465xw,0.0609xh&resize=1200:*" alt="Our Story Image">
        </div>
        <div class="story-content">
            <h2>Our Story</h2>
                <p>
                    At Revel Shoes, we believe that shoes are not just an accessory, they're a statement. Our journey began with a dream to revolutionize the way people express themselves through footwear.
                </p>
                <p>
                    We're not just a shoe company, we're a movement. Join us in the quest to break free from boring, mass-produced shoes and embrace the power of individuality.
                </p>
                <p>
                    With Revel Shoes, you're not just buying shoes, you're creating a masterpiece that reflects your personality and spirit.
                </p>
        </div>
    </div>

    <div class="events-section">
  <div class="event-item">
    <img src="https://www.catseven77.com/cdn/shop/files/S1f4ea6605fcf4c4f9ea76846ea28bef00.jpg?v=1702501329&width=416" alt="Sneaker Release">
    <div class="event-details">
      <h3>Sneaker Release Party</h3>
      <p>March 5, 2024</p>
      <p>Celebrate the launch of our latest sneaker collections with an event filled with music, food, and fun.</p>
      <a href="{{ route('eventregistration') }}">
        <button class="join-button">Join</button>
      </a>

    </div>
  </div>

  <div class="event-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRamQ9KYqgOU-U5_Nkl6gK5soaRDAZjHRoVpClEd2nTM7Bu5mxMw_EmsRusrGci0jz0TWg&usqp=CAU" alt="Shoe Design Workshop">
    <div class="event-details">
      <h3>Shoe Design Workshop</h3>
      <p>January 15, 2024</p>
      <p>Join us for an interactive workshop and learn the art of shoe customization.</p>
      <a href="{{ route('eventregistration') }}">
        <button class="join-button">Join</button>
      </a>
    </div>
  </div>

  <div class="event-item">
    <img src="https://image.made-in-china.com/202f0j00FcWqGbyPEfco/Guyisa-China-High-Quality-and-Comfort-Steel-Toe-Hiking-Shoes-and-Men-Working-Shoes-and-Safety-Boot-Factory.webp" alt="Fashion Show Extravaganza">
    <div class="event-details">
      <h3>Fashion Show Extravaganza</h3>
      <p>February 10, 2024</p>
      <p>Witness the magic of custom shoes on the runway. Be prepared to be amazed!</p>
      <a href="{{ route('eventregistration') }}">
        <button class="join-button">Join</button>
      </a>
    </div>
  </div>

  <div class="event-item">
    <img src="https://5.imimg.com/data5/SELLER/Default/2022/1/QZ/AO/RT/142262681/istockphoto-1301394040-170667a.jpg" alt="Shoe Swap Social">
    <div class="event-details">
      <h3>Sneaker Exchange Social</h3>
      <p>April 20, 2024</p>
      <p>Connect with fellow shoe enthusiasts and swap your unique creations.</p>
      <a href="{{ route('eventregistration') }}">
        <button class="join-button">Join</button>
      </a>
    </div>
  </div>
</div>

<div class="review-section">
  <div class="review-content">
    <p>"I absolutely love Revel Shoes! The customization options are amazing, and the quality is top-notch. It's a perfect blend of style and comfort. Highly recommended!"</p>
  </div>
  <div class="review-author">
    <img src="https://preview.redd.it/the-best-poses-for-girls-profile-pictures-v0-k3kxvh4czthb1.jpg?width=911&format=pjpg&auto=webp&s=5928c38dc54f0dbe37fc68519b2f23f2507e6d15" alt="Customer Photo" class="author-photo">
    <p class="author-name">Hailey Reinhart</p>
  </div>
</div>

<div class="gallery-section">
    <div class="gallery-heading">
      Explore a stunning collection of custom shoes designed by our community. From bold and vibrant to sleek and sophisticated, there's a shoe for every personality.
    </div>
    <div class="gallery-images">
      <!-- Add your 4 gallery images here with the .gallery-image class -->
      <div class="gallery-image">
        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/69f7ae38715339.576bfc0e2df80.jpg" alt="Shoe 1">
      </div>
      <div class="gallery-image">
        <img src="https://images.unsplash.com/photo-1562183241-b937e95585b6?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vdHdlYXJ8ZW58MHx8MHx8fDA%3D" alt="Shoe 2">
      </div>
      <div class="gallery-image">
        <img src="https://images.unsplash.com/photo-1603808033192-082d6919d3e1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHNob2VzfGVufDB8fDB8fHwy&w=1000&q=80" alt="Shoe 3">
      </div>
      <div class="gallery-image">
        <img src="https://squaremountain.co.uk/wp-content/uploads/2016/08/product-photography-lighting-nike-shoe-scaled.jpg" alt="Shoe 4">
      </div>
    </div>
  </div>

  <div class="featured-collections">
  <div class="collection-heading">
    Featured Collections
  </div>
  <div class="collection-images">
    <!-- Shoe 1 -->
    <div class="shoe">
      <img src="https://img.freepik.com/free-photo/pair-brown-shoes-with-black-leather-sole-word-bottom_123827-23446.jpg?size=626&ext=jpg&ga=GA1.1.1546980028.1703289600&semt=ais" alt="Collection 1">
      <div class="shoe-info">
        <div class="shoe-name">Old and Gold</div>
        <div class="shoe-price">$150</div>
        <div class="shoe-description">Timeless and effortlessly stylish, blending classic aesthetics with contemporary allure.</div>
        <a class="get-yours-button" href="{{ route('shop') }}">Get Yours</a>
      </div>
    </div>

    <!-- Repeat the structure for the remaining shoes -->
    <!-- Shoe 2 -->
    <div class="shoe">
      <img src="https://rukminim2.flixcart.com/image/450/500/l3dcl8w0/shoe/d/s/m/8-ga1118-8-adidas-cblack-stone-actgol-original-imagegegzhhgzhk3.jpeg?q=90&crop=false" alt="Collection 2">
      <div class="shoe-info">
        <div class="shoe-name">Sport Mode</div>
        <div class="shoe-price">$120</div>
        <div class="shoe-description">Tailored to be the perfect choice for sports enthusiasts and active lifestyles.</div>
        <a class="get-yours-button" href="{{ route('shop') }}">Get Yours</a>
      </div>
    </div>

    <!-- Shoe 3 -->
    <div class="shoe">
      <img src="https://i.pinimg.com/236x/06/e2/e7/06e2e7ed9e287b9cde2908255a48ef68.jpg" alt="Collection 3">
      <div class="shoe-info">
        <div class="shoe-name">Broken Amethyst</div>
        <div class="shoe-price">$199</div>
        <div class="shoe-description">Embark on a transformative journey with a captivating design for an entirely fresh look.</div>
        <a class="get-yours-button" href="{{ route('shop') }}">Get Yours</a>
      </div>
    </div>

    <!-- Shoe 4 -->
    <div class="shoe">
      <img src="https://images.squarespace-cdn.com/content/v1/53a2b3a1e4b0a5020bebe676/1475654193100-3P0KPI6P5T2AZCGARTSN/shoe-footwear-product-photography-london-adidas-ultra-boost-21.jpg?format=2500w" alt="Collection 4">
      <div class="shoe-info">
        <div class="shoe-name">A73 Comfys</div>
        <div class="shoe-price">$230</div>
        <div class="shoe-description">Experience unparalleled comfort as you immerse yourself in the plush embrace of these shoes.</div>
        <a class="get-yours-button" href="{{ route('shop') }}">Get Yours</a>
      </div>
    </div>

    <!-- Shoe 5 -->
    <div class="shoe">
      <img src="https://images.journeys.com/images/products/1_5160_FS_ALT1C.JPG" alt="Collection 5">
      <div class="shoe-info">
        <div class="shoe-name">Converse Ruby Red</div>
        <div class="shoe-price">$249</div>
        <div class="shoe-description">Unleash your confidence with a pair that exudes a daring and stylish demeanor.</div>
        <a class="get-yours-button" href="{{ route('shop') }}">Get Yours</a>
      </div>
    </div>

    <!-- Shoe 6 -->
    <div class="shoe">
      <img src="https://schiffgold.com/wp-content/uploads/2018/09/gold-nike2.png" alt="Collection 6">
      <div class="shoe-info">
        <div class="shoe-name">Pirate Treasure</div>
        <div class="shoe-price">$300</div>
        <div class="shoe-description">Elevate your everyday style with a nonchalant display of casual sophistication and flair.</div>
        <a class="get-yours-button" href="{{ route('shop') }}">Get Yours</a>
      </div>
    </div>
  </div>
</div>

<div class="faq-section">
  <div class="faq-heading">
    Frequently Asked Questions
  </div>
  <div class="faq-content">
    <div class="faq-item">
      <div class="question">Q: How can I customize my shoes?</div>
      <div class="answer">A: Visit our Customize page and follow the easy steps to design your unique pair.</div>
    </div>
    <div class="faq-item">
      <div class="question">Q: What is the return policy?</div>
      <div class="answer">A: We offer a 30-day return policy. Check our Returns & Exchanges page for details.</div>
    </div>
    <div class="faq-item">
      <div class="question">Q: How long does customization take?</div>
      <div class="answer">A: Customization time varies based on design complexity, but we strive to deliver within 4-6 weeks.</div>
    </div>
    <div class="faq-item">
      <div class="question">Q: Do you ship internationally?</div>
      <div class="answer">A: Yes, we ship our custom creations worldwide to bring Shoemojo magic to every corner of the globe.</div>
    </div>
    <!-- Add more FAQ items as needed -->
  </div>
</div>

<div class="contact-section">
  <div class="contact-heading">
    Get in Touch
  </div>
  <div class="contact-content">
    <form id="contact-form">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit" class="send-message-button">Send Message</button>
    </form>
  </div>
</div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


</body>
</html>

