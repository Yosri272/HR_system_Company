<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;

class sys_currencies extends Model
{
    protected $fillable =
  [
    'currency_name',
    'qr_currency',
    'currency_type',
    'currency_rateInOfG',
    'change'

 ];
}
