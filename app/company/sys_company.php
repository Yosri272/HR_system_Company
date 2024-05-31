<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_company extends Model
{
   protected $table='sys_company';
    protected $fillable =
  [
    'comp_nameAR',
    'comp_NameEN',
    'type_activity',
    'comp_TEL',
    'comp_FAX',
    'comp_BOX',
    'comp_ADDRESS',
    'path',
    'NOTES'

 ];
}
