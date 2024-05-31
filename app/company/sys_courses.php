<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_courses extends Model
{
    protected $fillable =
    [
    'emply_nameAR',
    'branch_nameAR',
    'dept_name',
    'courses_field',
    'jop_name',
    'job_organisation',
    'date_release',
    'date_expiry',
    'duration'
];
}
