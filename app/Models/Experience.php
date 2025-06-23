<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences'; // Specify your table name

    protected $fillable = ['title','organization', 'image', 'duration', 'description'];
}
