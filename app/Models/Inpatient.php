<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inpatient extends Model
{

    use SoftDeletes;

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function dateInFormat()
    {
        return Carbon::parse($this->attributes['date_in'])->format('d/m/Y');
    }

    public function dateOutFormat()
    {
        return Carbon::parse($this->attributes['date_out'])->format('d/m/Y');
    }

    public function totalPriceFormat()
    {
        return number_format($this->attributes['total_price'], 0, ',', '.');
    }

}
