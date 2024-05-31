<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_evaluation extends Model
{
    protected $fillable =
    [

        'criteria_nameAR',
        'emply_nameAR',
        'branch_nameAR',
        'dept_name',
        'evaluation_type',
        'date_of',
        'date_to',
        'year',
        'maig_direct',
        'Degree_due',
        'evaluation_status'
   ];
}
