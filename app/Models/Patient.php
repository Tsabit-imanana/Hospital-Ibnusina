<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use HasRoles;

    protected $guard_name = 'patient';

    public function age()
    {
        return Carbon::parse($this->attributes['birthdate'])->age;
    }

    public function birthdateFormat()
    {
        return Carbon::parse($this->attributes['birthdate'])->format('d/m/Y');
    }
}
