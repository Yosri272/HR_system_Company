<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_emply_doc extends Model
{
    protected $fillable =
    [

        'doc_type_id',
        'doc_type_name',
        'date_release',
        'date_Expiry',
        'issuer',
        'doc_category',
        'branch_nameAR',
        'dept_name',
        'emply_nameAR',
        'attached'
   ];
}
