<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'name', 'email', 'phone_number']; // Adjust attributes as per your requirements

    // Define relationships if needed
}

