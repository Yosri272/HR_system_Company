<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_offervaction extends Model
{
    protected $fillable =
    [
        'year',
        'emply_nameAR',
        'branch_nameAR',
        'dept_name',
        'holidaytype_name',
        'start_form',
        'end_to',
        'numbervactionday',
        'numberpaidday',
        'numberfreeday',
        'numberdaylate',
        'backdayemply',
        'vactionsalary',
        'ticketsneed',
        'ticketprice',
        'contact_number',
        'number_alternateemply',
        'name_alternateemply',
        'jop_alternateemply',
        'ordernumber',
        'attachments'
   ];

}
