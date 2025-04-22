<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $casts = [
        'facilities' => 'array'
    ];

    protected $fillable = ['type', 'facilities', 'price', 'status'];

    public function priceFormat()
    {
        return number_format($this->attributes['price'], 0, ',', '.');
    }
}
