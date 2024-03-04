<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserved extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'fname',
        'email',
        'phone',
        'rdate',
        'gnum',
        'timing',

    ];

}
