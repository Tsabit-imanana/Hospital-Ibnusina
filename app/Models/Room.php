<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $casts = [
        'facilities' => 'array'
    ];

    protected $fillable = ['type', 'facilities', 'price', 'status'];
}
