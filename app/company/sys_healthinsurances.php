<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_healthinsurances extends Model
{
    protected $fillable =
    [
      'ins_category',
      'ins_validity',
      'ins_company',
      'emply_nameAR',
      'branch_nameAR',
      'dept_name'

   ];

}
