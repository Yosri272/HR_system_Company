<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_covenant extends Model
{
  //  protected $table='sys_covenant';
    protected $fillable =
  [
    'emply_id',
    'branch_nameAR',
    'dept_name',
    'covenant_number',
    'covenant_type',
    'Unit',
    'Number',
    'covenant_status',
    'covenant_purpose',
    'covenant_power',
    'covenant_date',
    'move_type',
    'order_number'

 ];

}
