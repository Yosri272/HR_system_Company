<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_criteria extends Model
{
  // protected $table='sys_covenantitems';
  protected $fillable =
  [
    'criteria_nameAR',
    'criteria_nameEN',
    'criteria_type',
    'criteria_degree'
  ];
}
