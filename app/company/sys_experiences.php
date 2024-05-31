<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_experiences extends Model
{
    protected $fillable =
    [
        'emply_nameAR',
        'branch_nameAR',
        'dept_name',
        'experiences',
        'jop_name',
        'location_job',
        'date_start',
        'date_end',
        'finishing_work',
        'emply_evaluation',
        'path'
];
}
