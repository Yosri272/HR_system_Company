<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_holiday extends Model
{
    protected $fillable =
    [
        'holiday_id',
        'holiday_name',
        'numberday',
        'startingdate',
        'expirydate',
        'airyear',
        'calendaryear',
        'spare'
   ];
}
