<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shoe Customization</title>
    <style>
        /* General Styling for Dark Theme */
        body {
            font-family: 'Arial', sans-serif;
                background-image: url('{{asset("images/Design.png")}}');
                background-size: cover;
                background-position: center;
                position: relative;
                align-items: center;
                justify-content: center;
                color: #e0e0e0;
                padding: 0;
                margin: 0;
            }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 500px auto 10px; /* Adjusted margin to move the form down */
            background: linear-gradient(77deg, rgba(48,48,48,1) 5%, rgba(79,38,38,1) 20%, rgba(154,0,0,1) 52%, rgba(79,38,38,1) 80%, rgba(48,48,48,1) 95%);
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            border: 2px solid red;
            box-shadow: 0 0 10px red; /* Add red glow */
        }


        /* Headings */
        h1 {
            text-align: center;
            color: #e0e0e0;
        }

        h2 {
            color: #e0e0e0;
        }

        /* Customization Options Styling */
        .customization-options {
            margin: 20px 0;
        }

        .color-options,
        .secondaryColor-options {
            display: flex;
            justify-content: space-around;
        }

        .color-btn,
        .secondaryColor-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
            cursor: pointer;
            background: transparent;
        }

        .color-btn:hover,
        .secondaryColor-btn:hover {
            background-color: #333; /* Hover effect with a darker shade */
        }

        .color-btn.selected,
        .secondaryColor-btn.selected {
            border: 2px solid #e0e0e0; /* Light border to show selection */
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3); /* Light shadow */
        }

        /* Select Styling */
        select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #666666; /* Lighter border for select */
            background: #333333; /* Darker background */
            color: #e0e0e0; /* Light text color */
            transition: all 0.3s ease;
            outline: none;
        }

        select:focus {
            border: 2px solid #e0e0e0;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3);
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        /* Apply the fade-in animation to the visualization element */
        .visualization {
            text-align: center;
            animation-name: fadeIn;
            animation-duration: 2s;
            animation-fill-mode: forwards;
            animation-delay: 0.5s;
        }

        #shoe-image {
            width: 500px; /* Increased width */
            height: 400px; /* Increased height */
            transition: all 0.3s ease;
            border-radius: 10px;
        }

        #shoe-description {
            font-size: 23px;
            color: #e0e0e0; /* Light text */
        }

        /* Buttons */
        #confirm-btn,
        #reset-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
            margin: 10px;
        }

        #confirm-btn {
            background-color: #4CAF50; /* Green background for confirm */
            color: white;
        }

        #reset-btn {
            background-color: #f44336; /* Red background for reset */
            color: white;
        }

        #confirm-btn:hover,
        #reset-btn:hover {
            opacity: 0.8; /* Hover effect for buttons */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }

            .color-options,
            .secondaryColor-options {
                flex-direction: column;
            }

            .color-btn,
            .secondaryColor-btn {
                width: 100%;
                margin: 10px 0;
            }

            /* Adjust image size for smaller screens */
            #shoe-image {
                width: 300px;
                height: 300px;
            }
        }

        /* Secondary Color Button Styling */
        .secondaryColor-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
            cursor: pointer;
            background: transparent;
        }

        .secondaryColor-btn[data-secondaryColor="none"] {
            background: linear-gradient(to right, #000000, #ffffff); /* Gradient from black to white */
            color: #ffffff; /* White text for contrast */
        }

        .secondaryColor-btn[data-secondaryColor="black"] {
            background-color: #000000; /* Solid black */
            color: #ffffff; /* White text for contrast */
        }

        .secondaryColor-btn[data-secondaryColor="white"] {
            background-color: #ffffff; /* Solid white */
            color: #000000; /* Black text for contrast */
        }

        .secondaryColor-btn:hover {
            opacity: 0.8; /* Hover effect */
        }

        .secondaryColor-btn.selected {
            border: 2px solid #e0e0e0; /* Light border to indicate selection */
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3); /* Light shadow for selected */
        }

        nav {
            position: fixed;
            top: 0;
            left: 120px;
            right: 0;
            z-index: 1000;
            display: flex;
            width: 80%;
            height: 30px; /* Reduced height for the navigation bar */
            padding: 2rem;
            flex-wrap: nowrap;
            background: rgba(255, 255, 255, 0.7); /* Adjust the alpha (opacity) value */
            justify-content: space-between;
            align-items: center;
            border-radius: 25px; /* Increased border radius for a rounded look */
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

        /* Form Styling */
        form {
            margin-top: 20px;
        }

        form div {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            color: #e0e0e0;
        }

        form input[type="radio"],
        form select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #666666;
            background: #333333;
            color: #e0e0e0;
            transition: all 0.3s ease;
            outline: none;
        }

        form input[type="radio"]:hover,
        form select:hover {
            border: 2px solid #e0e0e0;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3);
        }

        form input[type="radio"]:checked {
            border: 2px solid #4CAF50; /* Green border for checked radio button */
        }

        form select:focus {
            border: 2px solid #e0e0e0;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3);
        }

        form button[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        form button[type="submit"]:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        /* Banner Styling */
        .banner {
            height: 120px;
            position: relative;
            margin-top: 1rem;
            margin-bottom: 90px;
        }

        .banner-text {
            position: relative;
            top: 65%; /* Adjust the top position */
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: linear-gradient(77deg, rgba(48,48,48,1) 5%, rgba(79,38,38,1) 20%, rgba(154,0,0,1) 52%, rgba(79,38,38,1) 80%, rgba(48,48,48,1) 95%);
            text-align: center;
            padding: 10px; /* Add padding */
            width: 1000px; /* Increase the width */
            margin-bottom: 20px;
        }

        .banner h1 {
            font-size: 50px;
            font-family: 'Verdana', sans-serif;
            font-weight: bold;
            margin: 0;
            color:#ffff;
            animation: fadeIn 2s ease-in-out;
            animation-fill-mode: forwards;
        }

        @keyframes fadeIn {
            0% {
            opacity: 0;
            transform: translateY(-50px);
            }
            100% {
            opacity: 1;
            transform: translateY(0);
            }
        }

        .banner-text p {
            font-family: 'Helvetica', sans-serif;
            font-size: 18px;
            color: #ffffff;
            animation: slideIn 2s ease-in-out;
            animation-fill-mode: forwards;
        }

        @keyframes slideIn {
            0% {
            opacity: 0;
            transform: translateX(-50px);
            }
            100% {
            opacity: 1;
            transform: translateX(0);
            }
        }

        .banner p {
            font-size: 20px;
            margin-top: 10px;
        }

        h4 {
            text-align: center;
            color: #e0e0e0;
            margin-top: 20px;
            background-color: #000000;
            font-size: 20px;
            padding: 10px;
        }

        .content-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .color-radio-red {
            background-color: red;
        }

    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="https://w0.peakpx.com/wallpaper/728/639/HD-wallpaper-jordan-1-black-francisco-jordan-fashion-hypebeast-nike-offwhite-red-shoes-sneakers-stockx-supreme.jpg" alt="Logo">
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

    <div class="container">
        <!-- Banner Section -->
        <div class="banner">
            <div class="banner-text">
                <h1>Revel Designs X Nike</h1>
                <p>"Nike has embarked on a groundbreaking collaboration with us to revolutionize the shoe industry by offering unparalleled customization options. Together, we're harnessing the power of unique and iconic designs to attract and engage our target audience. Our innovative approach allows customers to create their own bespoke pairs, embodying the spirit of individuality and exclusivity that defines Nike's brand. This partnership signifies a leap forward in personalization, enabling customers to truly make their mark with shoes that are uniquely theirs.</p>
            </div>
        </div>

        <h4>Customize Your Shoes</h4>

        <!-- Shoe customization form -->
        <form action="{{ route('submit-customization') }}" method="post">
            @csrf
            <div>
                <!-- Color options -->
                <label class="color-label" for="red">
                    <input type="radio" id="red" value="red" name="color" onclick="updateCustomization()" class="color-radio-red"> Red
                </label>

                <label class="color-label" for="blue">
                    <input type="radio" id="blue" value="blue" name="color" onclick="updateCustomization()" class="color-radio-blue"> Blue
                </label>

                <label class="color-label" for="green">
                    <input type="radio" id="green" value="green" name="color" onclick="updateCustomization()" class="color-radio-green"> Green
                </label>
            </div>

            <div>
                <label for="size">Choose a Size:</label>
                <select id="size" name="size" onchange="updateCustomization()">
                    <option value="7">Size 7</option>
                    <option value="8">Size 8</option>
                    <option value="9">Size 9</option>
                    <option value="10">Size 10</option>
                    <option value="11">Size 11</option>
                </select>
            </div>

            <div>
            <label for="secondaryColor">Secondary Color:</label>
                <select id="secondaryColor" name="secondaryColor" onchange="updateCustomization()">
                    <option value="none">None</option>
                    <option value="black">Black</option>
                    <option value="white">White</option>
                    <option value="both">Both</option>  
                </select>
            </div>

            <!-- Display area for customized shoe -->
            <div id="display-area" class="visualization" style="display: none;">
                <div id="content-wrapper">
                <h2>Your Customized Shoe</h2>
                <img id="shoe-image" src="" alt="Customized Shoe">
                <div id="shoe-description"><p>Choose your customization options to see the preview here.</p></div>
                <button id="confirm-btn" type="submit">Confirm</button>
                <button id="reset-btn" type="button" onclick="resetCustomization()">Clear</button>
                </div>
            </div>
        </form>
    </div>
    <!-- JavaScript for image preview and interactions -->
    <script>
        // Function to update the shoe image and description based on selected options
        function updateCustomization() {

            var color = document.querySelector('input[name="color"]:checked').value;
            var size = document.getElementById('size').value;
            var secondaryColor = document.getElementById('secondaryColor').value;

            var contentWrapper = document.getElementById('content-wrapper');
            contentWrapper.style.opacity = '0';
            setTimeout(function() {
                contentWrapper.style.opacity = '2';
            }, 13); // Short delay to allow for the fade-out animation

            // Define an object to map colors to image URLs
            var imageUrls = {
                'red': 'https://img.buzzfeed.com/buzzfeed-static/complex/image/upload/sdftgyywoewwi8v4ajhq.jpg.jpg?downsize=900:*&output-format=auto&output-quality=auto',
                'blue': 'https://i0.wp.com/justfreshkicks.com/wp-content/uploads/2018/04/Screen-Shot-2018-06-30-at-8.21.04-AM.png?resize=640%2C361&ssl=1', // Replace with the actual URL for blue shoes
                'green': 'https://cdn.sanity.io/images/d6wcctii/production/44f197cd8801edecf897235e99d464f2b128e522-1070x760.jpg?w=1200&q=75&fit=clip&auto=format' // Replace with the actual URL for green shoes
                // Add more colors as needed
            };

            var imageUrl;
                if (secondaryColor !== 'none') {
                    if (color === 'red' && secondaryColor === 'white') {
                        imageUrl = 'https://img.buzzfeed.com/buzzfeed-static/complex/images/Y19jcm9wLGhfMTA4NCx3XzE5MjcseF80Nix5XzUzOQ==/p9s3n69befhkcjyerczx/air-jordan-1-high-og-womens-chenille-red-dj4891-061-pair.jpg'; // Replace with the actual URL
                    } else if (color === 'red' && secondaryColor === 'black') {
                        imageUrl = 'https://sneakernews.com/wp-content/uploads/2022/03/air-jordan-1-mid-bred-DM9650-001-6.jpg'; // Replace with the actual URL
                    } else if (color === 'red' && secondaryColor === 'both') {
                        imageUrl = 'https://cdn.sanity.io/images/d6wcctii/production/f4750525e6cf1ad0d2cb94772caac6ec8e6bf9a7-1070x760.png?w=1200&q=75&fit=clip&auto=format'; // Replace with the actual URL
                    } else if (color === 'blue' && secondaryColor === 'white') {
                        imageUrl = 'https://cdn.sanity.io/images/d6wcctii/production/db70b9715a46edead19c43469282d5bfad5a5cd4-1070x760.jpg?w=1200&q=75&fit=clip&auto=format'; // Replace with the actual URL
                    } else if (color === 'blue' && secondaryColor === 'black') {
                        imageUrl = 'https://cdn.sanity.io/images/d6wcctii/production/70369b1d03831eeb499eeea97fa8c1ec8ef83e57-1070x760.jpg?w=1200&q=75&fit=clip&auto=format'; // Replace with the actual URL
                    } else if (color === 'blue' && secondaryColor === 'both') {
                        imageUrl = 'https://pbs.twimg.com/media/EjwP2cAWkAcDtb0.jpg'; // Replace with the actual URL
                    } else if (color === 'green' && secondaryColor === 'white') {
                        imageUrl = 'https://staticg.sportskeeda.com/editor/2023/07/6b708-16904611289399-1920.jpg'; // Replace with the actual URL
                    } else if (color === 'green' && secondaryColor === 'black') {
                        imageUrl = 'https://sneakernews.com/wp-content/uploads/2022/12/air-jordan-1-low-lucky-green-black-553558-065-8.jpg'; // Replace with the actual URL
                    } else if (color === 'green' && secondaryColor === 'both') {
                        imageUrl = 'https://sneakernews.com/wp-content/uploads/2021/07/Air-Jordan-1-Low-Green-Toe-553558-371-4.jpg'; // Replace with the actual URL
                    }
                } else {
                    // If no secondary color is selected, use the URL for the primary color
                    imageUrl = imageUrls[color];
                }

                // Set the shoe image source
                document.getElementById('shoe-image').src = imageUrl;

                // Update the shoe description
                var description = 'Color: ' + color + ', Size: ' + size;
                if (secondaryColor !== 'none') {
                    description += ', Secondary Color: ' + secondaryColor;
                }
                document.getElementById('shoe-description').innerText = description;

                // Show the display area
                document.getElementById('display-area').style.display = 'block';
            }

        // Function to handle confirm button click
        // Function to handle confirm button click
        function confirmCustomization() {
            // Get the selected options
            var color = document.querySelector('input[name="color"]:checked').value;
            var size = document.getElementById('size').value;
            var secondaryColor = document.getElementById('secondaryColor').value;

            // Update the shoe description based on selected options
            var description = 'Color: ' + color + ', Size: ' + size;
            if (secondaryColor !== 'none') {
                description += ', Secondary Color: ' + secondaryColor;
            }
            document.getElementById('shoe-description').innerText = description;

            // Show the display area
            document.getElementById('display-area').style.display = 'block';

            // Construct the data object to be submitted
            var formData = {
                color: color,
                size: size,
                secondaryColor: secondaryColor
            };

            // Submit the form data to the pre-order route
            fetch('{{ route("pre-order") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(formData)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Redirect to the pre-order page with the shoe customization data
                window.location.href = '{{ route("pre-order") }}';
            })
            .catch(error => {
                console.error('There was an error!', error);
                alert('There was an error processing your order. Please try again.');
            });
        }


        // Function to handle reset button click
        function resetCustomization() {
            // Reset the form to its initial state
            document.querySelector('input[name="color"]:checked').checked = false;
            document.getElementById('size').selectedIndex = 0;
            document.getElementById('secondaryColor').selectedIndex = 0;

            // Clear the shoe image and description
            document.getElementById('shoe-image').src = '';
            document.getElementById('shoe-description').innerText = '';

            // Hide the display area
            document.getElementById('display-area').style.display = 'none';

            // Show reset confirmation message
            alert('Customization reset!');
        }

        // Initially update customization on page load
        updateCustomization();
    </script>

    @if(session('success'))
        <script>
            alert("{{ session('success') }}"); // Display the success message in an alert
        </script>
    @endif

</body>
</html>
