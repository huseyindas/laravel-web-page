<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [

        "head1",
        "mail1",
        "desc1",
        "head2",
        "mail2",
        "desc2",
        "head3",
        "mail3",
        "desc3",
        "address",
        "country",
        "phone1",
        "phone2",


    ];
}
