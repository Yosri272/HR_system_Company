<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_contractitem extends Model
{
    protected $fillable =
    [
           'contracttype_id',
           'contractitem_nameAR',
           'contractitem_nameEN',
           'item_leve'

   ];
}
