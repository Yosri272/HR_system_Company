<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_evidence extends Model
{
    protected $fillable =
    [


        'emply_nameAR',
        'branch_nameAR',
        'dept_name',
        'proof_number',
        'proof_type',
        'date_release',
        'issuer',
        'country',
        'date_expiry',
        'guarantor',
        'phone_guarantor',
        'phone_offwork',
        'note',
        'path',
   ];
}
