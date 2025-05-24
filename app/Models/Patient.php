<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Patient extends Authenticatable
{
    use HasRoles, SoftDeletes;

    // Tentukan guard untuk model ini
    protected $guard_name = 'patient';

    // Field yang bisa diisi
    protected $fillable = ['name', 'birthdate', 'address', 'gender', 'username', 'password'];

    // Sebagai tambahan untuk mengacak password
    protected $hidden = ['password'];

        public function getAuthPassword()
    {
        return $this->password;
    }


    // Mengatur format tanggal lahir menggunakan Carbon
    public function age()
    {
        return Carbon::parse($this->attributes['birthdate'])->age;
    }

    public function birthdateFormat()
    {
        return Carbon::parse($this->attributes['birthdate'])->format('d/m/Y');
    }

    // Relasi dengan HealthRecord
    public function healthRecords()
    {
        return $this->hasMany(HealthRecords::class);
    }

    // Hook untuk mengenkripsi password secara otomatis
    public static function boot()
    {
        parent::boot();

        static::creating(function ($patient) {
            if (isset($patient->password)) {
                $patient->password = bcrypt($patient->password);
            }
        });

        static::updating(function ($patient) {
            if (isset($patient->password)) {
                $patient->password = bcrypt($patient->password);
            }
        });
    }
}