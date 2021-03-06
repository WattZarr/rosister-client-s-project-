<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'image2',
        'image3',
        'material',
        'size',
        'price',
        'status',
        'item',
    ];
}
