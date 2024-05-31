<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_years;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_yearsController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_years= new sys_years;
      $sys_years->years_Gregorian = $request->years_Gregorian;
      $sys_years->years_hijri = $request->years_hijri;
      $sys_years->years_status = $request->years_status;
      $sys_years->start_form = $request->start_form;
      $sys_years->end_to = $request->end_to;
      $sys_years->working_daysG = $request->working_daysG;
      $sys_years->working_daysH = $request->working_daysH;
      $sys_years->save();
      return back()->with('success','تم الاضافة بنجاح');


    }

    public function distory($year_id)
{

    $sys_years = sys_years::where('year_id','=',$year_id);
    $sys_years->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
