<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopOrder;

class OrderController extends Controller
{
    public function index()
    {
        $orders = ShopOrder::where('user_id', auth()->id())->get();
        return view('orders.index', compact('orders'));
    }

    public function processCheckout(Request $request)
    {
        $data = $request->validate([
            'payment_method' => 'required|string',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:10',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255',
            'total' => 'required|numeric|min:0',
            'orderID' => 'nullable|string',
            'payerID' => 'nullable|string',
        ]);

        $order = new ShopOrder();
        $order->user_id = auth()->id();
        $order->order_id = $data['orderID'] ?? null;
        $order->payer_id = $data['payerID'] ?? null;
        $order->payment_method = $data['payment_method'];
        $order->name = $data['name'];
        $order->address = $data['address'];
        $order->city = $data['city'];
        $order->state = $data['state'];
        $order->zip = $data['zip'];
        $order->country = $data['country'];
        $order->phone = $data['phone'];
        $order->email = $data['email'];
        $order->total = $data['total'];
        $order->status = 'pending';
        $order->save();

        return response()->json(['message' => 'Order processed successfully.']);
    }

    public function showOngoingOrders()
    {
        $orders = ShopOrder::where('status', 'pending')->get();
        return view('orders.ongoing', compact('orders'));
    }
}
