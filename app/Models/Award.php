<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $table = 'awards'; // Specify your table name

    protected $fillable = ['title', 'description', 'image', 'link'];

}
