<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class International extends Model
{
    protected $table = 'internationals';
    protected $fillable = [
        'title', 'description', 'image', 'category',
    ];
}
