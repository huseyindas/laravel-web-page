<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoBar extends Model
{
    use HasFactory;

    protected $fillable = [
        'background',
        'desc',
        'link',
    ];
}
