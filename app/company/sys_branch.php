<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_branch extends Model
{
    protected $table='sys_branch';
    protected $fillable =
  [
   'comp_id',
   'branch_nameAR',
   'branch_nameEN',
   'path',
   'branch_TEL',
   'branch_email',
   'branch_fax',
   'branch_box',
   'branch_address',
   'branch_state',
   'branch_governor',
   'branch_local',
   'branch_webst',
   'FOOTNOTE_R1' ,
   'FOOTNOTE_R2' ,
   'FOOTNOTE_R3' ,
   'FOOTNOTE_L1' ,
   'FOOTNOTE_L2' ,
   'FOOTNOTE_L3' ,
   'notes',
   'branch_tak'

 ];
}
