<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalCost extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dengan penamaan konvensional
    protected $table = 'hospital_costs';

    // Tentukan field yang dapat diisi massal
    protected $fillable = [
        'patient_id', 
        'health_patient', 
        'amount',
    ];

    /**
     * Relasi ke model Patient
     * Setiap hospital cost terkait dengan satu pasien
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    
}

