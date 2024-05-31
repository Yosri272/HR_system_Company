<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_jopdata extends Model
{
    protected $fillable =
    [
        'jop_id',
        'qualification',
        'specialties_name',
        'branch_nameAR',
        'dept_name',
        'jopdegree_name',
        'date_hiring',
        'appointment_letter',
        'emply_nameAR',
        'directmanager',
        'jopdegree'
   ];

}
