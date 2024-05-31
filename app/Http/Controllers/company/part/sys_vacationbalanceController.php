<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_vacationbalance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_vacationbalanceController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_vacationbalance= new sys_vacationbalance;
      $sys_vacationbalance->year = $request->year;
      $sys_vacationbalance->branch_nameAR = $request->branch_nameAR;
      $sys_vacationbalance->dept_name = $request->dept_name;
      $sys_vacationbalance->emply_nameAR = $request->emply_nameAR;
      $sys_vacationbalance->openingtoday = $request->openingtoday;
      $sys_vacationbalance->openinghour = $request->openinghour;
      $sys_vacationbalance->balanceday = $request->balanceday;
      $sys_vacationbalance->balancehour = $request->balancehour;
      $sys_vacationbalance->holidaytype_name = $request->holidaytype_name;
      $sys_vacationbalance->save();
      return back()->with('success','تم الاضافة بنجاح');
    }

    public function distory($vacationbalance_id)
{

    $sys_vacationbalance = sys_vacationbalance::where('vacationbalance_id','=',$vacationbalance_id);
    $sys_vacationbalance->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
