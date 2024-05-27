<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DecorExample extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img_path',
    ];
}
