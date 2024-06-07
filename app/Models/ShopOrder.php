<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'city', 'state', 'zip', 'country', 'phone', 'email', 'payment_method', 'cart_items', 'total', 'status', 'user_id'
    ];

    protected $casts = [
        'cart_items' => 'array', // Cast cart_items to array
    ];
}
