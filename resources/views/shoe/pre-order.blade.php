<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pre-Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('{{asset("images/Design.png")}}');
            background-size: cover;
            background-position: center;
            position: relative;
            align-items: center;
            justify-content: center;
            color: #e0e0e0;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 150px auto 20px;
            background: linear-gradient(77deg, rgba(48,48,48,1) 5%, rgba(79,38,38,1) 20%, rgba(154,0,0,1) 52%, rgba(79,38,38,1) 80%, rgba(48,48,48,1) 95%);
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px red; /* Add red glow */
        }

        h1 {
            color: #e0e0e0;
        }

        form {
            margin-top: 20px;
            display: inline-block;
            text-align: left;
        }

        form div {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            color: #e0e0e0;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="email"] {
            width: calc(100% - 22px);
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #666666;
            margin-bottom: 10px;
            background-color: #333333;
            color: #e0e0e0;
            transition: border-color 0.3s, box-shadow 0.3s;
            outline: none;
        }

        form input[type="text"]:focus,
        form input[type="email"]:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }

        button[type="submit"] {
            width: calc(100% - 22px);
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .customization-data {
            margin-top: 40px;
            text-align: center;
        }

        .customization-data p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .customization-data p:last-child {
            margin-bottom: 0;
        }

        .customization-data p span {
            font-weight: bold;
            color: #FFD700;
        }

        nav {
            position: fixed;
            top: 0;
            left: 120px;
            right: 0;
            z-index: 1000;
            display: flex;
            width: 80%;
            height: 30px;
            padding: 2rem;
            flex-wrap: nowrap;
            background: rgba(255, 255, 255, 0.7);
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
            width: 70px;
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

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
            }

            nav a {
                padding: 8px 16px;
                font-size: 16px;
            }

            .container {
                width: 90%;
            }

            form input[type="text"],
            form input[type="email"] {
                width: calc(100% - 22px);
            }

            button[type="submit"] {
                width: 100%;
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="https://w0.peakpx.com/wallpaper/728/639/HD-wallpaper-jordan-1-black-francisco-jordan-fashion-hypebeast-nike-offwhite-red-shoes-sneakers-stockx-supreme.jpg" alt="Logo">
            <span>Revel Shoes</span>
        </div>
        <div class="tabs">
            <a href="{{ route('customize-shoe') }}">Customize</a>
            <a href="{{ route('events') }}">Events</a>
            <a href="{{ route('shop.index') }}">Shop</a>
        </div>
        <div class="register-button">
            <a href="{{ route('homepage') }}">Home</a>
        </div>
    </nav>
    <div class="container">
        <h1>Confirm Your Order</h1>

        <div class="customization-data">
            <p>Color: <span>{{ $shoeData['color'] }}</span></p>
            <p>Size: <span>{{ $shoeData['size'] }}</span></p>
            <p>Secondary Color: <span>{{ $shoeData['secondaryColor'] }}</span></p>
        </div>

        <form action="{{ route('place-order') }}" method="post">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <button type="submit">Place Order</button>
        </form>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Function to handle form submission
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('form').addEventListener('submit', function (event) {
                event.preventDefault(); // Prevent the default form submission
                var formData = new FormData(this); // Get form data
                // Submit form data using Fetch API
                fetch(this.action, {
                    method: this.method,
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Show success message if the order was successfully placed
                    Swal.fire({
                        title: 'Thank you!',
                        text: 'Your order has been placed successfully. We will contact you soon via email with quotations for your order.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                })
                .catch(error => {
                    console.error('There was an error!', error);
                    // Show error message if there was a problem placing the order
                    Swal.fire({
                        title: 'Error!',
                        text: 'There was an error processing your order. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
            });
        });
    </script>

    
</body>
</html>
