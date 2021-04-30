<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $fillable = [
        'num1',
        'desc1',
        'num2',
        'desc2',
        'num3',
        'desc3',
        'num4',
        'desc4',
    ];
}
