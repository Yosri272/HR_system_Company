<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_evaluation;
use App\company\sys_criteria;
use App\company\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_evaluationController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_evaluation= new sys_evaluation;
      $sys_evaluation->criteria_nameAR = $request->criteria_nameAR;
      $sys_evaluation->emply_nameAR = $request->emply_nameAR;
      $sys_evaluation->branch_nameAR = $request->branch_nameAR;
      $sys_evaluation->dept_name = $request->dept_name;
      $sys_evaluation->evaluation_type = $request->evaluation_type;
      $sys_evaluation->date_of = $request->date_of;
      $sys_evaluation->date_to = $request->date_to;
      $sys_evaluation->year = $request->year;
      $sys_evaluation->maig_direct = $request->maig_direct;
      $sys_evaluation->degree_due = $request->degree_due;
      $sys_evaluation->evaluation_status = $request->evaluation_status;
      $sys_evaluation->save();
      return back()->with('success','تم الاضافة بنجاح');


    }

    public function show()
    {

        $users=users::orderBy('emply_id' , 'DESC')->paginate(6);
        $sys_criteria=sys_criteria::orderBy('criteria_id' , 'DESC')->paginate(6);
       $sys_evaluation=sys_evaluation::orderBy('evaluation_id' , 'DESC')->paginate(6);
        return view('company.part2.evaluation' ,compact('sys_evaluation','sys_criteria','users'));

    }
    public function distory($evaluation_id)
{

    $sys_evaluation = sys_evaluation::where('evaluation_id','=',$evaluation_id);
    $sys_evaluation->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
