<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_employeedep extends Model
{
    protected $fillable =
    [

    'number_identity',
    'name',
    'TYPE',
    'nationality',
    'social_status',
    'emply_nameAR',
    'branch_nameAR',
    'dept_name',
    'datebirth',
    'healthInsurance',
    'icard',
    'famle',
    'ticket'
    ];
}
