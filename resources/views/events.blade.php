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
                background: rgb(0,0,0);
                overflow-x: hidden; /* Prevent horizontal scrolling */
                background-image: linear-gradient(135deg, #43CBFF 10%, #9708CC 100%);
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

    <section>
        <h>List of events Registered for</h>
    </section>

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
</body>
</html>