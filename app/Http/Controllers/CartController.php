<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopProduct; // Ensure this namespace matches your ShopProduct model

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);

        $productId = $request->input('id');
        $productName = $request->input('name');
        $productColor = $request->input('color');
        $productPrice = $request->input('price');
        $productStock = $request->input('stock');
        $productImage = $request->input('image');

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'name' => $productName,
                'color' => $productColor,
                'price' => $productPrice,
                'stock' => $productStock,
                'image' => $productImage,
                'quantity' => 1
            ];

            // Store the product in the database
            $product = new ShopProduct;
            $product->name = $productName;
            $product->color = $productColor;
            $product->price = $productPrice;
            $product->stock = $productStock;
            $product->image = $productImage;
            $product->save();
        }

        session()->put('cart', $cart);

        return response()->json([
            'cartItemCount' => $this->cartItemCount()
        ]);
    }

    public function clearCart()
    {
        session()->forget('cart'); // Clear the cart from session

        // Clear the database table
         ShopProduct::truncate();

        $cartItemCount = $this->cartItemCount(); // Get updated cart item count

        return response()->json(['success' => true, 'cartItemCount' => $cartItemCount]);
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', ['cartItems' => $cart]);
    }

    public function update(Request $request)
    {
        $productId = $request->input('id');
        $quantity = $request->input('quantity');

        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }

        return response()->json(['success' => true]);
    }

    public function remove(Request $request)
    {
        $productId = $request->input('id');

        $cart = session()->get('cart', []);
        unset($cart[$productId]);
        session()->put('cart', $cart);

        // Delete the product from the database
        $product = ShopProduct::find($productId);
        if ($product) {
            $product->delete();
        }

        return response()->json(['success' => true]);
    }

    public static function cartItemCount()
    {
        $cart = session()->get('cart', []);
        $totalItems = array_reduce($cart, function ($carry, $item) {
            return $carry + $item['quantity'];
        }, 0);

        return $totalItems;
    }

    public function getItemCount()
    {
        $cartItemCount = $this->cartItemCount();
        return response()->json(['success' => true, 'cartItemCount' => $cartItemCount]);
    }
}
