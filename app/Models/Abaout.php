<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abaout extends Model
{
    use HasFactory;

    protected $fillable = [
        'head_home',
        'desc_home',
        'head1',
        'mini_desc1',
        'desc1',
        'head2',
        'mini_desc2',
        'desc2',
    ];
}
