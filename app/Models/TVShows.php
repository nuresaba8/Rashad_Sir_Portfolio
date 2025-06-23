<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TVShows extends Model
{
    protected $table = 'tvshows';
    protected $fillable = [
        'category',
        'image_url',
        'title',
        'source',
        'publication_date',
        'article_url',
    ];
}
