<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'order_id', 'payer_id', 'payment_method', 'name', 'address', 'city', 'state', 'zip', 'country', 'phone', 'email', 'total', 'status'
    ];
}
