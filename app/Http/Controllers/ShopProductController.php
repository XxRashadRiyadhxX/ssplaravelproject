<?php

namespace App\Http\Controllers;

use App\Models\ShopProduct;
use Illuminate\Http\Request;

class ShopProductController extends Controller
{
    public function index()
    {
        $products = ShopProduct::all();
        return view('shop.index', compact('products'));
    }

    public function show(ShopProduct $shopProduct)
    {
        return view('shop.show', compact('shopProduct'));
    }

}

