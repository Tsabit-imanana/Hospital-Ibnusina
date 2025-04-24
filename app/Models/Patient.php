<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use HasRoles, SoftDeletes;

    protected $guard_name = 'patient';

    protected $fillable = ['name', 'birthdate', 'address', 'username', 'password'];

    public function age()
    {
        return Carbon::parse($this->attributes['birthdate'])->age;
    }

    public function birthdateFormat()
    {
        return Carbon::parse($this->attributes['birthdate'])->format('d/m/Y');
    }
}
