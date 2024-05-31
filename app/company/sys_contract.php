<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_contract extends Model
{
    protected $fillable =
    [   'comp_nameAR',
        'branch_nameAR',
        'dept_name',
        'emply_nameAR',
        'contracttype_name',
        'contract_date',
        'contract_starting',
        'contract_end',
        'contract_duration',
        'date_renewal',
        'contract_status',
        'commission',
        'contractend_comm',
        'rate_commission',
        'basic_salary',
        'tickets',
        'bonuses',
        'housing',
        'hour_extra',
        'transport',
        'contact',
        'living',
        'tickets_number',
        'tickets_type'
   ];
}
