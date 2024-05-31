<?php

namespace App\Http\Controllers\company\part1;
use App\company\sys_dept;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_deptController extends Controller
{
    public function Stort( Request $request)
    {


      $sys_dept= new sys_dept;
      $sys_dept->branch_id = $request->branch_id;
      $sys_dept->dept_name = $request->dept_name;
      $sys_dept->Start_date = $request->Start_date;
      $sys_dept->dept_director = 'yosri';
      $sys_dept->save();
      return back()->with('success','تم الاضافة بنجاح');
    }
    public function distory($dept_id)
{

    $sys_dept = sys_dept::where('dept_id','=',$dept_id);
    $sys_dept->delete();
    return back()->with('error','تم الحذف بنجاج');



}

}
