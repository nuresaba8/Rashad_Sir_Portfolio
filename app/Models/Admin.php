<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admin'; // Specify your table name

    protected $fillable = ['email', 'password'];

    protected $hidden = ['password'];
}
