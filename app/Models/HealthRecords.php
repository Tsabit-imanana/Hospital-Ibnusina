<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class HealthRecords extends Model
{
    use SoftDeletes;

    protected $casts = [
        'check_ups' => 'array',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function totalPriceFormat()
    {
        return number_format($this->attributes['total_price'], 0, ',', '.');
    }

}
