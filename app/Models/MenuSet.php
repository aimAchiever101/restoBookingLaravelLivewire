<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSet extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'dish',
        'price',

    ];
}
