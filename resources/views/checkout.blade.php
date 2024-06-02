<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 20px;
        }
        h1.my-4 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        p.info {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }
        form h3 {
            margin-top: 1.5rem;
            margin-bottom: 1rem;
            font-size: 1.75rem;
            font-weight: 600;
        }
        form .form-group {
            margin-bottom: 1.5rem;
        }
        form .btn {
            padding: 10px 20px;
            font-size: 1.25rem;
        }
        ul.list-group {
            margin-top: 20px;
        }
        ul.list-group li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            margin-bottom: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        ul.list-group li h6 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 5px;
        }
        ul.list-group li small {
            font-size: 0.875rem;
            color: #6c757d;
        }
        ul.list-group li span {
            font-size: 1rem;
            font-weight: 600;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=ASrPfyUiWMks2HyoaOb29qQChW428emtj6gxCezybkyHyv-ya6lX8i09SP8cbIG9SegYDBobd52gFTjL"></script>
</head>
<body>
<div class="container">
    <h1 class="my-4">Checkout</h1>
    <p class="info">Enter your billing information to place the order.</p>
    <div class="row">
        <div class="col-md-8">
            <h3>Billing Details</h3>
            <form id="checkout-form" action="{{ route('checkout.process') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group mb-3">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
                <div class="form-group mb-3">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" name="state" required>
                </div>
                <div class="form-group mb-3">
                    <label for="zip">ZIP Code</label>
                    <input type="text" class="form-control" id="zip" name="zip" required>
                </div>
                <div class="form-group mb-3">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <h3>Card Details</h3>
                <div id="card-details">
                    <div class="form-group mb-3">
                        <label for="card_number">Card Number</label>
                        <input type="text" class="form-control" id="card_number" name="card_number" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="card_expiry">Expiration Date</label>
                        <input type="text" class="form-control" id="card_expiry" name="card_expiry" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="card_cvc">CVC</label>
                        <input type="text" class="form-control" id="card_cvc" name="card_cvc" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Place Order</button>
            </form>
        </div>
        <div class="col-md-4">
            <h3>Order Summary</h3>
            <ul class="list-group mb-3">
                @foreach($cartItems as $item)
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ $item['name'] }}</h6>
                        <small class="text-muted">Quantity: {{ $item['quantity'] }}</small>
                    </div>
                    <span class="text-muted">${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>${{ number_format($total, 2) }}</strong>
                </li>
            </ul>
            <div id="paypal-button-container"></div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#checkout-form').on('submit', function(event) {
            event.preventDefault();

            const cardNumber = $('#card_number').val();
            const cardExpiry = $('#card_expiry').val();
            const cardCvc = $('#card_cvc').val();

            if (cardNumber && cardExpiry && cardCvc) {
                $.ajax({
                    url: "{{ route('checkout.process') }}",
                    method: 'POST',
                    data: $(this).serialize() + '&payment_method=card',
                    success: function(response) {
                        Swal.fire({
                            title: 'Order Placed!',
                            text: 'Your order has been successfully placed.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location.href = "{{ route('shop.index') }}";
                        });
                    },
                    error: function(response) {
                        console.error('Payment failed response:', response);
                        Swal.fire({
                            title: 'Error!',
                            text: 'Payment failed.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please fill in all card details.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });

        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '{{ $total }}'
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    $.ajax({
                        url: "{{ route('checkout.process') }}",
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            payment_method: 'paypal',
                            orderID: data.orderID
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Order Placed!',
                                text: 'Your order has been successfully placed.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                window.location.href = "{{ route('shop.index') }}";
                            });
                        },
                        error: function(response) {
                            console.error('Payment failed response:', response);
                            Swal.fire({
                                title: 'Error!',
                                text: 'Payment failed.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                window.location.href = "{{ route('shop.index') }}";
                            });
                        }
                    });
                });
            },
            onCancel: function(data) {
                Swal.fire({
                    title: 'Cancelled',
                    text: 'Payment was cancelled.',
                    icon: 'info',
                    confirmButtonText: 'OK'
                });
            },
            onError: function(err) {
                console.error('Payment error:', err);
                Swal.fire({
                    title: 'Error!',
                    text: 'Payment failed.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        }).render('#paypal-button-container');
    });
</script>
</body>
</html>
