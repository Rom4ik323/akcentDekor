<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'square',
        'type',
        'wishes',
        'description',
        'img_path',
        'img1_path',
        'img2_path',
    ];
}
