<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_covenantitems extends Model
{
   // protected $table='sys_covenantitems';
    protected $fillable =
  [
    'covenant_name',
    'covenant_type',
    'Unit',
    'Note'
  ];
}
