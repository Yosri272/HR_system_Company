<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_years extends Model
{    protected $fillable =
    [
        'sys_years',
        'year_id',
        'years_Gregorian',
        'years_hijri',
        'years_status',
        'start_form',
        'end_to',
        'working_daysG',
        'working_daysH'
   ];


}
