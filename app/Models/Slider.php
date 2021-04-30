<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'label1',
        'label2',
        'label3',
        'label4',
        'buttonText',
        'buttonLink',
        'image',
    ];
}
