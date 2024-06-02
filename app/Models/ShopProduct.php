<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{
    use HasFactory;

    protected $table = 'cart_items'; // Specify the new table name

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'color',
        'image'
    ];
}
