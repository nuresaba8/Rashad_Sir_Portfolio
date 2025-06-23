<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'source', 'date', 'description', 'link', 'image', 'category'];
}
