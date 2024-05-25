<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoeOrder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ShoeOrderController extends Controller
{
    public function showCustomization()
    {
        return view('shoe.customize'); // View for shoe customization
    }

    public function submitCustomization(Request $request)
    {
        // Extract data from the request
        $data = $request->only(['color', 'size', 'secondaryColor']);
        $data['secondaryColor'] = $data['secondaryColor'] ?? 'none'; // Default to 'none'

        session()->put('shoeData', $data);

        // Redirect to pre-order with customization data
        return redirect()->route('pre-order');
    }

    public function showPreOrderForm(Request $request)
    {
        // Retrieve shoe data from the session
        $shoeData = session()->get('shoeData', []);

        // If no data, redirect back to customization
        if (empty($shoeData)) {
            return redirect()->route('customize-shoe')->with('error', 'Please complete customization.');
        }

        // Render the pre-order form
        return view('shoe.pre-order', compact('shoeData'));
    }

    public function placeOrder(Request $request)
    {
        // Validate the user input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        // Get shoe data from the session
        $shoeData = session()->get('shoeData', []);

        if (empty($shoeData)) {
            Log::warning('Shoe data is empty during order placement');
            return response()->json([
                'status' => false,
                'message' => 'Customization data missing.'
            ], 400);
        }

        // Attempt to create the order
        try {
            ShoeOrder::create(array_merge($validatedData, $shoeData));
            Log::info('Order placed successfully', ['order' => array_merge($validatedData, $shoeData)]);
            session()->forget('shoeData'); // Clear the session data after order is placed

            return response()->json([
                'status' => true,
                'message' => 'Order placed successfully!',
                'data' => $shoeData
            ], 201);
        } catch (\Exception $e) {
            Log::error('Error placing order', ['error' => $e->getMessage()]);
            return response()->json([
                'status' => false,
                'message' => 'Error placing order. Please try again.'
            ], 500);
        }
    }

    public function viewOrder($id)
    {
        $order = ShoeOrder::findOrFail($id);
        return view('admin.order.view', compact('order'));
    }

    public function listOrders()
    {
        // Fetch all orders
        $orders = ShoeOrder::all();

        // Display the admin orders view
        return view('admin.order.orders', compact('orders'));
    }

    public function deleteOrder($id)
    {
        $order = ShoeOrder::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders')->with('success', 'Order deleted successfully.');
    }
}
