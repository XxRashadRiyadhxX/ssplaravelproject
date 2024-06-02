<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\ShopOrder;
use Illuminate\Support\Facades\Auth;
use App\Models\OngoingOrder;

class PaymentController extends Controller
{
    public function processCheckout(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:10',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'total' => 'required|numeric',
            'payment_method' => 'required|string',
            'orderID' => 'nullable|string',
            'payerID' => 'nullable|string',
        ]);

        $order = new ShopOrder([
            'user_id' => auth()->id(),
            'order_id' => $request->input('orderID'),
            'payer_id' => $request->input('payerID'),
            'payment_method' => $validatedData['payment_method'],
            'name' => $validatedData['name'],
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'state' => $validatedData['state'],
            'zip' => $validatedData['zip'],
            'country' => $validatedData['country'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'total' => $validatedData['total'],
            'status' => 'pending',
        ]);

        $order->save();

        return response()->json(['message' => 'Order placed successfully!'], 200);
    }   
    

    private function processPayPalPayment($validated)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($validated['orderID']);

        return isset($response['status']) && $response['status'] == 'COMPLETED';
    }

    private function processCardPayment($validated)
    {
        // Implement the card payment processing logic here
        // For simplicity, let's assume the card payment is always successful
        return true;
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
        $total = 0;

        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }

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
            $total = 0;

            foreach ($cartItems as $item) {
                $total += $item['price'] * $item['quantity'];
            }

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
