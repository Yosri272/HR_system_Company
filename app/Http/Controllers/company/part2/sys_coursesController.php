<?php

namespace App\Http\Controllers\company\part2;

use App\company\sys_currencies;
use App\company\sys_Tran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_coursesController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_currencies= new sys_currencies;
     $sys_currencies->currency_name =$request->currency_name;
      $sys_currencies->qr_currency =$request->qr_currency;
      $sys_currencies->currency_type =$request->currency_type;
      $sys_currencies->currency_rateInOfG =$request->currency_rateInOfG;
      $sys_currencies->change =$request->change;
      $sys_currencies->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function distory($currency_id)
{

    $sys_currencies = sys_currencies::where('currency_id','=',$currency_id);
    $sys_currencies->delete();
    return back()->with('error','تم الحذف بنجاج');



}


    }
