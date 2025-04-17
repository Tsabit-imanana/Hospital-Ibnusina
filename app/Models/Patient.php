<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Patient extends Model
{
    use HasRoles;

    protected $guard = 'patient';
}
