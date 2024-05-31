<?php

namespace App\Http\Controllers\company\part;
use App\company\users;
use App\company\sys_years;
use App\company\sys_offervaction;
use App\company\sys_vacationbalance;
use App\company\sys_holidaytype;
use App\company\sys_holiday;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_holidayController extends Controller
{
    public function show()
    {
       $users=users::orderBy('emply_id' , 'DESC')->paginate(6);
       $sys_years=sys_years::orderBy('year_id' , 'DESC')->paginate(6);
       $sys_offervactions=sys_offervaction::orderBy('offervaction_id' , 'DESC')->paginate(6);
       $sys_vacationbalance=sys_vacationbalance::orderBy('vacationbalance_id' , 'DESC')->paginate(6);
       $sys_holidaytype=sys_holidaytype::orderBy('holidaytype_id' , 'DESC')->paginate(6);
       $sys_holiday=sys_holiday::orderBy('holiday_id' , 'DESC')->paginate(6);
       return view('company.part2.vacationholiday ',compact('users','sys_years','sys_offervactions','sys_vacationbalance','sys_holidaytype','sys_holiday'));

    }



    public function Stort( Request $request)
{


    $sys_holiday= new sys_holiday;
    $sys_holiday->holiday_name = $request->holiday_name;
    $sys_holiday->numberday = $request->numberday;
    $sys_holiday->startingdate =$request->startingdate;
    $sys_holiday->expirydate = $request->expirydate;
    $sys_holiday->airyear =$request->airyear;
    $sys_holiday->calendaryear =$request->calendaryear;
    $sys_holiday->spare =$request->spare;
    $sys_holiday->save();
    return back()->with('success','تم الاضافة بنجاح');

   }
   public function distory($holiday_id)
{

    $sys_holiday = sys_holiday::where('holiday_id','=',$holiday_id);
    $sys_holiday->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
