<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_criteria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_criteriaController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_criteria= new sys_criteria;
      $sys_criteria->criteria_nameAR = $request->criteria_nameAR;
      $sys_criteria->criteria_nameEN = $request->criteria_nameEN;
      $sys_criteria->criteria_type = $request->criteria_type;
      $sys_criteria->criteria_degree = $request->criteria_degree;
      $sys_criteria->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function distory($criteria_id)
    {

        $sys_criteria = sys_criteria::where('criteria_id','=',$criteria_id);
        $sys_criteria->delete();
        return back()->with('error','تم الحذف بنجاج');



    }
}
