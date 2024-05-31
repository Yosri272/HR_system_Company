<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_conter extends Model
{
    protected $fillable =
    [
        'conter_id',
        'conter_nameAR',
        'conter_nameEN',
        'conter_status',
        'conter_type',
        'conter_level'

   ];
}
