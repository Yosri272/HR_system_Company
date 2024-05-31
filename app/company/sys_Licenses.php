<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_Licenses extends Model
{

    protected $table='sys_licenses';
    protected $fillable =
    [
        'licenses_number',
        'licenses_name',
        'date_release',
        'date_Expiry',
        'date_renewal',
        'place_issue',
        'issuer',
        'version_ststus',
        'activity',
        'path',
        'branch_nameAR'
   ];
}
