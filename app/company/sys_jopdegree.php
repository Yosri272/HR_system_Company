<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_jopdegree extends Model
{

    protected $fillable =
    [
        'jopdegree',
        'jopdegree_name',
        'jop_category',
        'annualbonus',
        'salaryuponappointment',
        'salaryuponendservice',
        'nationality',
        'qualification_hig',
        'qualification_min',
        'year',
        'note'
   ];
}
