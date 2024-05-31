<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_bank extends Model
{

    protected $fillable =
    [

         
         'bank_nameAR',
         'bank_nameEN',
         'bank_tel',
         'bank_fax',
         'bank_box',
         'bank_address'
   ];
}
