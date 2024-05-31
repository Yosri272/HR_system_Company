<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_governor extends Model
{
    
    protected $fillable =
    [
      'state_id',
      'governor_name'
   ];
}
