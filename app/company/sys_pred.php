<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_pred extends Model
{
    
    protected $fillable =
    [
        'order_number',
        'branch_nameAR',
        'dept_name',
        'emply_name',
        'pred_purpose',
        'type',
        'amount',
        'currency_name',
        'calculation',
        'months_number',
        'premium',
        'pred_max',
        'pred_date',
        'startdate',
        'expirydate',
        'allow_more',
        'order_status',
        'allow_choose'
   ];
}
