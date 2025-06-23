<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';
    protected $fillable = [
        'name',
        'designation',
        'short_description',
        'image_path',
        'facebook_link',
        'linkedin_link',
        'full_description',
    ];
}
