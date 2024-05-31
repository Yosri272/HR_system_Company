<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_socialseurities extends Model
{
    protected $fillable =
    [
    'emply_nameAR',
    'branch_nameAR',
    'dept_name',
    'subscription_name',
    'wage_basic',
    'subscription_wage',
    'allowance_housing',
    'allowance_comm',
    'allowance_other',
    'Joint_status',
    'date_exclusion',
    'emply_rate',
    'comp_rate',
    'phone_offwork',
    'Attached'
   ];
}
