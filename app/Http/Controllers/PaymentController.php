<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\ShopOrder;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function processCheckout(Request $request)
    {
        // Save order to the database
        $order = new ShopOrder();
        $order->name = $request->name;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->state = $request->state;
        $order->zip = $request->zip;
        $order->country = $request->country;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->payment_method = $request->payment_method;

        // Assuming you want to save cart items as JSON
        $order->cart_items = json_encode(session('cart', []));

        // Simulate successful payment response
        $order->status = 'completed';

        $order->save();

        // Clear cart
        session()->forget('cart');

        // Return success response
        return response()->json(['success' => true]);
    }


    private function processPayPalPayment($validated)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($validated['orderID']);

        return isset($response['status']) && $response['status'] == 'COMPLETED';
    }

    public function showCheckoutForm()
    {
        $cartItems = session()->get('cart', []);
        $total = array_reduce($cartItems, function ($sum, $item) {
            return $sum + ($item['price'] * $item['quantity']);
        }, 0);

        return view('checkout', compact('cartItems', 'total'));
    }

    public function checkout(Request $request)
    {
        $cartItems = session()->get('cart', []);
        $total = array_reduce($cartItems, function ($sum, $item) {
            return $sum + ($item['price'] * $item['quantity']);
        }, 0);

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $total
                    ]
                ]
            ],
            "application_context" => [
                "cancel_url" => route('checkout.cancel'),
                "return_url" => route('checkout.success')
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }

            return redirect()->route('cart.index')->with('error', 'Something went wrong.');
        } else {
            return redirect()->route('cart.index')->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $cartItems = session()->get('cart', []);
            $total = array_reduce($cartItems, function ($sum, $item) {
                return $sum + ($item['price'] * $item['quantity']);
            }, 0);

            ShopOrder::create([
                'user_id' => Auth::id(),
                'items' => json_encode($cartItems),
                'total' => $total,
                'status' => 'completed'
            ]);

            session()->forget('cart');

            return redirect()->route('orders.index')->with('success', 'Order successfully placed.');
        } else {
            return redirect()->route('cart.index')->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function cancel(Request $request)
    {
        return redirect()->route('cart.index')->with('error', 'You have canceled the transaction.');
    }
}
