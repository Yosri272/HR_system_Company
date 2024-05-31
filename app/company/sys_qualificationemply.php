<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_qualificationemply extends Model
{
    protected $fillable =
    [
    'qualification',
    'specialization',
    'university',
    'place',
    'year_graduation',
    'emply_nameAR',
    'branch_nameAR',
    'dept_name'
    ];
}
