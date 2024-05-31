<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_holidaytype extends Model
{
    protected $fillable =
    [

        'holidaytype_name',
        'numberday',
       'paying'
    ];

}

