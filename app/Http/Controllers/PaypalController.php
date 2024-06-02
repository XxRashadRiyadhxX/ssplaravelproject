<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PayPalService;
use App\Models\ShopOrder;

class PayPalController extends Controller
{
    private $paypalService;

    public function __construct(PayPalService $paypalService)
    {
        $this->paypalService = $paypalService;
    }

    public function createPayment(Request $request)
{
    $total = $request->total;
    $currency = 'USD';
    $description = 'Order Description';
    $returnUrl = route('paypal.return');
    $cancelUrl = route('paypal.cancel');

    $payment = $this->paypalService->createPayment($total, $currency, $description, $returnUrl, $cancelUrl);

    if ($payment) {
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() === 'approval_url') {
                return redirect($link->getHref());
            }
        }
    }

    return redirect()->back()->with('error', 'Something went wrong.');
}

public function executePayment(Request $request)
{
    $paymentId = $request->paymentId;
    $payerId = $request->PayerID;

    $payment = $this->paypalService->executePayment($paymentId, $payerId);

    if ($payment && $payment->getState() === 'approved') {
        // Save order to the database
        $order = new ShopOrder();
        // Populate order details
        $order->save();

        // Clear cart
        session()->forget('cart');

        return redirect()->route('shop.index')->with('success', 'Order placed successfully.');
    }

    return redirect()->route('shop.index')->with('error', 'Payment failed.');
}


    public function cancelPayment()
    {
        return redirect()->route('shop.index')->with('error', 'Payment was cancelled.');
    }
}

