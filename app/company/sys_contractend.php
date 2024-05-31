<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_contractend extends Model
{
    protected $fillable =
    [
           'contracttype_id',
           'contractend_nameAR',
           'contractend_nameEN',
           'item_leve'

   ];
}
