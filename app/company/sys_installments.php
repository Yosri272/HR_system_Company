<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_installments extends Model
{
    protected $table='sys_installments';
    protected $fillable =
    [
        'pred_id',
        'branch_nameAR',
        'dept_name',
        'emply_name',
        'installments_amount',
        'payment_date',
        'installments_number'

   ];
}
