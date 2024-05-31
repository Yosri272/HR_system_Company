<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_neigh extends Model
{
    protected $fillable =
    [
        'governor_id',
        'neigh_name'
   ];
}
