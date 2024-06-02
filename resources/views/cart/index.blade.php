<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-top: 150px;
            padding: 0;
            background-color: black;
        }

        .container {
            padding: 25px;
            border-radius: 15px;
            align-items: center;
            background-color: white;
            color: black;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 0 0 1px red, 0 0 10px red;
            margin-bottom: 20px;
            
        }

        .btn-primary {
            background-color: #FFD700;
            border: none;
            color: black;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        nav {
            left: 150px;
            position: fixed;
            top: 15px;
            z-index: 1000;
            display: flex;
            width: 79.4%;
            height: 30px;
            padding: 3rem;
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

        a {
            text-decoration: none!important;
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

        .btn-danger {
            margin-left: 20px;
        }

        /* New styles for table column spacing */
        .table th,
        .table td {
            padding: 14px 7px; /* Increase padding to add more space */
        }

        .promo-banner {
            position: absolute;
            top: 0px;
            right: 0;
            bottom: 0;
            padding: 10px;
            background-color: black;
            color: black;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            width: 100px; /* Adjust width automatically */
            overflow: hidden; /* Hide overflowing text */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .promo-text {
            font-family: 'Bungee', sans-serif;
            color: #FFA500; /* Neon orange/yellowish color */
            text-shadow: 
            0 0 2px #000, /* Black outline */
            0 0 10px #FFA500, /* Neon glow effect */
            0 0 15px #FFA500, /* Neon glow effect */
            0 0 20px #FFA500, /* Neon glow effect */
            0 0 30px #FFA500, /* Neon glow effect */
            0 0 40px #FFA500, /* Neon glow effect */
            0 0 50px #FFA500; /* Neon glow effect */
            display: inline-block;
            white-space: nowrap; /* Prevent wrapping */
            animation: slide 9s linear infinite;
        }

        @keyframes slide {
            0% {
                transform: translateY(-100%);
            }
            100% {
                transform: translateY(100%);
            }
        }

        .promo-banner-2 {
            position: absolute;
            top: -910px;
            left: 0px; /* Adjust the position as needed */
            padding: 10px;
            background-color: black;
            color: black;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            width: 100px; /* Adjust width as needed */
            overflow: hidden; /* Hide overflowing text */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .promo-text-2 {
            font-family: 'Bungee', sans-serif;
            color: #FFA500; /* Neon orange/yellowish color */
            text-shadow: 
                0 0 2px #000, /* Black outline */
                0 0 10px #FFA500, /* Neon glow effect */
                0 0 15px #FFA500, /* Neon glow effect */
                0 0 20px #FFA500, /* Neon glow effect */
                0 0 30px #FFA500, /* Neon glow effect */
                0 0 40px #FFA500, /* Neon glow effect */
                0 0 50px #FFA500; /* Neon glow effect */
            display: inline-block;
            white-space: nowrap; /* Prevent wrapping */
            animation: slide-reverse 10s linear infinite; /* Apply the reverse animation */
        }

@keyframes slide-reverse {
    0% {
        transform: translateY(100%);
    }
    100% {
        transform: translateY(-100%);
    }
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

    <div class="container">
        <div class="promo-banner"> <!-- Adjust width and height accordingly -->
        <div class="promo-text">
                <span>2</span><br>
                <span>5</span><br>
                <span>%</span><br>
                <span> </span><br>
                <span>O</span><br>
                <span>F</span><br>
                <span>F</span><br>
                <span> </span><br>
                <span>O</span><br>
                <span>N</span><br>
                <span> </span><br>
                <span>R</span><br>
                <span>E</span><br>
                <span>V</span><br>
                <span>E</span><br>
                <span>L</span><br>
                <span> </span><br>
                <span>D</span><br>
                <span>E</span><br>
                <span>S</span><br>
                <span>I</span><br>
                <span>G</span><br>
                <span>N</span><br>
                <span> </span><br>
                <span>X</span><br>
                <span> </span><br>
                <span>N</span><br>
                <span>I</span><br>
                <span>K</span><br>
                <span>E</span><br>
                <span> </span><br>
                <span>S</span><br>
                <span>H</span><br>
                <span>O</span><br>
                <span>E</span><br>
                <span>S</span><br>
            </div>
        </div>

        <div class="promo-banner-2"> <!-- Adjust width and height accordingly -->
        <div class="promo-text-2">
                <span>2</span><br>
                <span>5</span><br>
                <span>%</span><br>
                <span> </span><br>
                <span>O</span><br>
                <span>F</span><br>
                <span>F</span><br>
                <span> </span><br>
                <span>O</span><br>
                <span>N</span><br>
                <span> </span><br>
                <span>R</span><br>
                <span>E</span><br>
                <span>V</span><br>
                <span>E</span><br>
                <span>L</span><br>
                <span> </span><br>
                <span>D</span><br>
                <span>E</span><br>
                <span>S</span><br>
                <span>I</span><br>
                <span>G</span><br>
                <span>N</span><br>
                <span> </span><br>
                <span>X</span><br>
                <span> </span><br>
                <span>N</span><br>
                <span>I</span><br>
                <span>K</span><br>
                <span>E</span><br>
                <span> </span><br>
                <span>S</span><br>
                <span>H</span><br>
                <span>O</span><br>
                <span>E</span><br>
                <span>S</span><br>
            </div>
        </div>
    
    <!-- <div class="container mt-5"> -->
    <h1 class="mb-4">Shopping Cart</h1>
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="cart-items">
                        @php $total = 0; @endphp
                        @foreach($cartItems as $index => $item)
                        @php $total += $item['price'] * $item['quantity']; @endphp
                        <tr class="cart-item" data-index="{{ $index }}">
                            <td>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="img-fluid">
                                    </div>
                                    <div class="col-md-9">
                                        <p>{{ $item['name'] }}</p>
                                        <small>Estimated Shipping date between {{ date('Y-m-d') }} and {{ date('Y-m-d', strtotime('+1 month')) }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $item['price'] }}</td>
                            <td>
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary btn-minus" type="button" data-index="{{ $index }}">-</button>
                                    <input type="text" class="form-control text-center quantity-input" value="{{ $item['quantity'] }}" readonly>
                                    <button class="btn btn-outline-secondary btn-plus" type="button" data-index="{{ $index }}">+</button>
                                </div>
                            </td>
                            <td class="item-total">{{ $item['price'] * $item['quantity'] }}</td>
                            <td>
                                <button class="btn btn-danger btn-remove" data-index="{{ $index }}">Remove</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cart Summary</h5>
                        <p class="card-text">Subtotal: $<span id="cart-subtotal">{{ number_format($total, 2) }}</span></p>
                        <p class="card-text">Tax (10%): $<span id="cart-tax">{{ number_format($total * 0.1, 2) }}</span></p>
                        <p class="card-text">Express International Shipping: $<span id="shipping-cost">40.00</span></p>
                        <p class="card-text">Discount: -$<span id="cart-discount">0.00</span></p>
                        <p class="card-text">Total: $<span id="cart-total">{{ number_format($total + $total * 0.1 + 40, 2) }}</span></p>
                        <a href="{{ route('checkout.form') }}" class="btn btn-primary">Checkout</a>
                    </div>
                </div>
                <div class="mt-3">
                    <input type="text" id="coupon-code" class="form-control" placeholder="Enter coupon code">
                    <button id="apply-coupon" class="btn btn-secondary btn-block mt-2">Apply Coupon</button>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <button id="back-to-shop" class="btn btn-primary">Continue Shopping</button>
                <button id="clear-cart" class="btn btn-danger">Clear Cart</button>
            </div>
        </div>
    <!-- </div> -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // Function to update cart item quantity
    function updateCartItem(index, quantity) {
        fetch(`/cart/update`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ id: index, quantity: quantity }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update quantity in the cart UI
                const cartItem = document.querySelector(`.cart-item[data-index="${index}"]`);
                cartItem.querySelector('.quantity-input').value = quantity;

                // Update item total
                const itemPrice = parseFloat(cartItem.querySelector('td:nth-child(2)').innerText);
                const itemTotal = quantity * itemPrice;
                cartItem.querySelector('.item-total').innerText = itemTotal.toFixed(2);

                // Update cart total
                updateCartTotal();

                // Update cart item count in the navbar
                updateCartItemCount();
            }
        })
        .catch(error => console.error('Error updating cart:', error));
    }

    // Function to calculate and update cart total
    function updateCartTotal() {
        let subtotal = 0;
        document.querySelectorAll('.cart-item').forEach(item => {
            const itemTotal = parseFloat(item.querySelector('.item-total').innerText);
            subtotal += itemTotal;
        });

        const tax = subtotal * 0.1;
        const shipping = 40.0;
        const discount = parseFloat(document.getElementById('cart-discount').innerText);
        const total = subtotal + tax + shipping - discount;

        document.getElementById('cart-subtotal').innerText = subtotal.toFixed(2);
        document.getElementById('cart-tax').innerText = tax.toFixed(2);
        document.getElementById('cart-total').innerText = total.toFixed(2);
    }

    // Function to update cart item count in the navbar
    function updateCartItemCount() {
        fetch(`/cart/item-count`, {
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.querySelector('.badge').innerText = data.cartItemCount;
            }
        })
        .catch(error => console.error('Error updating cart item count:', error));
    }

    // Increment and decrement quantity buttons
    document.querySelectorAll('.btn-plus').forEach(button => {
        button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            const currentQuantity = parseInt(this.previousElementSibling.value);
            const newQuantity = currentQuantity + 1;
            updateCartItem(index, newQuantity);
        });
    });

    document.querySelectorAll('.btn-minus').forEach(button => {
        button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            const currentQuantity = parseInt(this.nextElementSibling.value);
            const newQuantity = currentQuantity > 1 ? currentQuantity - 1 : 1; // Prevent going below 1
            updateCartItem(index, newQuantity);
        });
    });

    // Attach the event listener for remove button
    document.querySelectorAll('.btn-remove').forEach(button => {
        button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            removeCartItem(index);
        });
    });

    function removeCartItem(index) {
        if (confirm('Are you sure you want to remove this item from the cart?')) {
            fetch(`/cart/remove`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ id: index }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Remove the item from the UI
                    document.querySelector(`.cart-item[data-index="${index}"]`).remove();
                    // Update the cart total
                    updateCartTotal();
                    // Update the cart item count in the navbar
                    updateCartItemCount();
                }
            })
            .catch(error => console.error('Error removing from cart:', error));
        }
    }

    // Back to shop button
    document.getElementById('back-to-shop').addEventListener('click', function() {
        window.location.href = "{{ route('shop.index') }}";
    });

    // Clear cart button
    document.getElementById('clear-cart').addEventListener('click', function() {
        if (confirm('Are you sure you want to clear the cart?')) {
            clearCart();
        }
    });

    function clearCart() {
        fetch(`/cart/clear`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Clear the cart items from the UI
                document.getElementById('cart-items').innerHTML = '';
                // Update the cart total to zero
                document.getElementById('cart-subtotal').innerText = '0.00';
                document.getElementById('cart-tax').innerText = '0.00';
                document.getElementById('cart-total').innerText = '0.00';
                // Update the cart count to zero
                document.querySelector('.badge').innerText = '0';
            }
        })
        .catch(error => console.error('Error clearing the cart:', error));
    }

    // Apply coupon button
    document.getElementById('apply-coupon').addEventListener('click', function() {
        const couponCode = document.getElementById('coupon-code').value.trim();
        const validCouponCode = "REVEL-DESIGN-NIKE-COLLAB-XYJGR-JSKRT";
        if (couponCode === validCouponCode) {
            const subtotal = parseFloat(document.getElementById('cart-subtotal').innerText);
            const discount = subtotal * 0.25;
            document.getElementById('cart-discount').innerText = discount.toFixed(2);
            updateCartTotal();
        } else {
            alert('Invalid coupon code');
        }
    });

</script>

</body>
</html>
