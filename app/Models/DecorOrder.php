<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DecorOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'number',
        'name',
        'service',
        'square',
        'comment',
        'status',
    ];
}
