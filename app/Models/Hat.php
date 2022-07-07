<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'status',
        'item',
    ];
}
