<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;
    protected $table = "rooms";

    protected $casts = [
        'facilities' => 'array'
    ];

    protected $fillable = ['type', 'facilities', 'price', 'status', 'caption'];


    public function priceFormat()
    {
        return number_format($this->attributes['price'], 0, ',', '.');
    }
}
