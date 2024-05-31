<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_employebuck extends Model
{
    protected $table='users';
    protected $fillable =
  [
    'emply_nameAR',
    'emply_NameEN',
    'type',
    'nationality',
    'Social_status',
    'religion',
    'occupation',
    'datebirth',
    'dateplace',
    'shunt',
    'phone_jop',
    'email',
    'phone_emerg',
    'phone_country',
    'empyaddress_home',
    'empyaddress_KSA',
    'guarantor',
    'empy_satus',
    'number_bank',
    'IBAN',
    'Bank',
    'branch_nameAR',
    'dept_name',
    'path'


 ];
}
