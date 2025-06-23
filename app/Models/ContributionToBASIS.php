<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContributionToBASIS extends Model
{
    protected $table = 'basis_contributions';
    protected $fillable = [
        'title', 'description', 'image_path', 'category',
    ];
}
