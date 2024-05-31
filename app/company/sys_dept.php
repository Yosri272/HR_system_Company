<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_dept extends Model
{
    protected $table='sys_dept';
    protected $fillable =
  [
    'branch_id',
    'dept_name' ,
    'dept_director' ,
    'Start_date'

 ];
}
