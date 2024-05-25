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

    .event-title {
      text-align: center;
      color: #f6c306;
      margin-top: 10px;
      font-size: 48px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      filter: brightness(150%);
      font-family: 'cursive';
      transition: color 0.3s;
    }
    
    .event-title:hover {
      color: #ffff66; /* Change to desired hover color */
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

    /* Adjusted CSS for separate background images */
    .container1 {
      position: relative;
      background-image: url('https://clockworkbanana.com/wp-content/uploads/2023/09/380829775_24016177541330720_8841358851545332871_n.jpg'); /* Replace with the path to your first background image */
      background-size: cover;
      background-position: center;
      height: 100vh; /* Adjust height as needed */
    }

    .container2 {
      position: relative;
      background-image: url('https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg?cs=srgb&dl=pexels-wendy-wei-1190298.jpg&fm=jpg'); /* Replace with the path to your second background image */
      background-size: cover;
      background-position: center;
      height: 100vh; /* Adjust height as needed */
    }

    .container3 {
      position: relative;
      background-image: url('https://image.cnbcfm.com/api/v1/image/105988093-1561524838555gettyimages-653709216.jpeg?v=1570554381&w=929&h=523&vtcrop=y'); /* Replace with the path to your third background image */
      background-size: cover;
      background-position: center;
      height: 100vh; /* Adjust height as needed */
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Adjust the last value (0.5) for the opacity */
    }

    .content {
      position: absolute;
      top: 50%;
      left: 10%;
      transform: translateY(-50%);
      color: white;
      z-index: 1;
    }

    .content h1 {
      font-size: 3rem;
      margin-bottom: 10px;
    }

    .event-time {
      font-size: 1.5rem;
    }

    .buttons {
      margin-top: 20px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      margin-right: 10px;
      text-decoration: none;
      color: black;
      background-color: #FFD700;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
    }

    .btn:hover {
      background-color: yellow;
    }

    /* .countdown {
      position: absolute;
      bottom: 20px;
      right: 20px;
      color: white;
    } */

    .countdown {
    position: absolute;
    bottom: 20px;
    right: 20px;
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 10px;
    animation: countdownFade 1s ease-in-out forwards;
    }

    @keyframes countdownFade {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
    }

    .countdown h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #FFD700;
    }

    .countdown p {
    font-size: 1.2rem;
    }

    .countdown p#demo1, .countdown p#demo2, .countdown p#demo3 {
    font-size: 1.5rem;
    margin-top: 5px;
    }

    .countdown p#demo1::before, .countdown p#demo2::before, .countdown p#demo3::before {
    content: "Time Left: ";
    font-weight: bold;
    }

    .countdown p#demo1.expired, .countdown p#demo2.expired, .countdown p#demo3.expired {
    color: red;
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
    <a href="{{ route('shop') }}">Shop</a>
  </div>
  <div class="register-button">
    <a href="{{ route('homepage') }}">Home</a>
  </div>
</nav>

<!-- Event 1 -->
<div class="container1">
  <div class="overlay"></div>
  <div class="content">
    <h1>Name of the Event 1</h1>
    <p class="event-time">Event Date: April 15, 2024 | Time: 8:00 PM</p>
    <div class="buttons">
      <a href="{{ route('event1.tickets') }}" class="btn">Get Tickets</a> <!-- Updated route link -->
      <a href="https://youtu.be/ZqR_8uqDZ-E" class="btn">Watch Video</a>
    </div>
  </div>
  <div class="countdown" id="countdown1">
    <h2>Countdown Timer</h2>
    <p id="demo1"></p>
  </div>
</div>

<!-- Event 2 -->
<div class="container2">
  <div class="overlay"></div>
  <div class="content">
    <h1>Name of the Event 2</h1>
    <p class="event-time">Event Date: April 20, 2024 | Time: 7:00 PM</p>
    <div class="buttons">
      <a href="{{ route('event2.tickets') }}" class="btn">Get Tickets</a> <!-- Updated route link -->
      <a href="https://youtu.be/sjrcO6FWzdE" class="btn">Watch Video</a>
    </div>
  </div>
  <div class="countdown" id="countdown2">
    <h2>Countdown Timer</h2>
    <p id="demo2"></p>
  </div>
</div>

<!-- Event 3 -->
<div class="container3">
  <div class="overlay"></div>
  <div class="content">
    <h1>Name of the Event 3</h1>
    <p class="event-time">Event Date: April 25, 2024 | Time: 6:00 PM</p>
    <div class="buttons">
      <a href="{{ route('event3.tickets') }}" class="btn">Get Tickets</a> <!-- Updated route link -->
      <a href="https://youtu.be/Dd_kE1146Ug" class="btn">Watch Video</a>
    </div>
  </div>
  <div class="countdown" id="countdown3">
    <h2>Countdown Timer</h2>
    <p id="demo3"></p>
  </div>
</div>


<script>
  // Set the date we're counting down to for Event 1
  var countDownDate1 = new Date("April 15, 2024 20:00:00").getTime();

  // Update the countdown for Event 1 every 1 second
  var x1 = setInterval(function() {
    // Get the current date and time
    var now = new Date().getTime();

    // Add one month to the countdown date for Event 1
    var countDownDate1PlusOneMonth = new Date(countDownDate1);
    countDownDate1PlusOneMonth.setMonth(countDownDate1PlusOneMonth.getMonth() + 1);

    // Calculate the time remaining between now and the updated countdown date for Event 1
    var distance = countDownDate1PlusOneMonth - now;

    // Calculate days, hours, minutes, and seconds for Event 1
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo1"
    document.getElementById("demo1").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";

    // If the countdown is over, display a message for Event 1
    if (distance < 0) {
      clearInterval(x1);
      document.getElementById("demo1").innerHTML = "EXPIRED";
    }
  }, 1000);

  // Set the date we're counting down to for Event 2
var countDownDate2 = new Date("April 20, 2024 19:00:00").getTime();

// Update the countdown for Event 2 every 1 second
var x2 = setInterval(function() {
  // Get the current date and time
  var now = new Date().getTime();

  // Add one month to the countdown date for Event 2
  var countDownDate2PlusOneMonth = new Date(countDownDate2);
  countDownDate2PlusOneMonth.setMonth(countDownDate2PlusOneMonth.getMonth() + 1);

  // Calculate the time remaining between now and the updated countdown date for Event 2
  var distance = countDownDate2PlusOneMonth - now;

  // Calculate days, hours, minutes, and seconds for Event 2
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo2"
  document.getElementById("demo2").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

  // If the countdown is over, display a message for Event 2
  if (distance < 0) {
    clearInterval(x2);
    document.getElementById("demo2").innerHTML = "EXPIRED";
  }
}, 1000);

  // Set the date we're counting down to for Event 3
var countDownDate3 = new Date("April 25, 2024 18:00:00").getTime();

// Update the countdown for Event 3 every 1 second
var x3 = setInterval(function() {
  // Get the current date and time
  var now = new Date().getTime();

  // Add one month to the countdown date for Event 3
  var countDownDate3PlusOneMonth = new Date(countDownDate3);
  countDownDate3PlusOneMonth.setMonth(countDownDate3PlusOneMonth.getMonth() + 1);

  // Calculate the time remaining between now and the updated countdown date for Event 3
  var distance = countDownDate3PlusOneMonth - now;

  // Calculate days, hours, minutes, and seconds for Event 3
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo3"
  document.getElementById("demo3").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

  // If the countdown is over, display a message for Event 3
  if (distance < 0) {
    clearInterval(x3);
    document.getElementById("demo3").innerHTML = "EXPIRED";
  }
}, 1000);

</script>

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
