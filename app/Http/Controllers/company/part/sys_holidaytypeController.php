<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_holidaytype;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_holidaytypeController extends Controller
{
    public function Stort( Request $request)
    {


        $sys_holidaytype= new sys_holidaytype;
        $sys_holidaytype->holidaytype_name = $request->holidaytype_name;
        $sys_holidaytype->numberday = $request->numberday;
        $sys_holidaytype->paying =$request->paying;
        $sys_holidaytype->save();
        return back()->with('success','تم الاضافة بنجاح');

    }
    public function distory($holidaytype_id)
{

    $sys_holidaytype = sys_holidaytype::where('holidaytype_id','=',$holidaytype_id);
    $sys_holidaytype->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
