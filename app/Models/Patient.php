<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasRoles;

    protected $guard = 'patient';
}
