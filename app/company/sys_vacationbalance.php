<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_vacationbalance extends Model
{
    protected $fillable =
    [
        'year',
        'emply_nameAR',
        'branch_nameAR',
        'dept_name',
        'openingtoday',
        'openinghour',
        'balanceday',
        'balancehour',
        'holidaytype_name'
   ];
}
