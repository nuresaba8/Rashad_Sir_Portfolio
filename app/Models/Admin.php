<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admin'; // Specify your table name

    protected $fillable = ['email', 'password'];

    protected $hidden = ['password', 'remember_token'];
}
