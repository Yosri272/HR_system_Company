<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_coursesController extends Controller
{
    public function Stort( Request $request)
    {
        $sys_courses= new sys_courses;
        $sys_courses->duration = $request->duration;
        $sys_courses->date_expiry = $request->date_expiry;
        $sys_courses->date_release = $request->date_release;
        $sys_courses->job_organisation =$request->job_organisation;
        $sys_courses->jop_name = $request->jop_name;
        $sys_courses->courses_field =$request->courses_field;
        $sys_courses->emply_nameAR =$request->emply_nameAR;
        $sys_courses->branch_nameAR =$request->branch_nameAR;
        $sys_courses->dept_name = $request->dept_name;
        $sys_courses->save();
        return back()->with('success','تم الاضافة بنجاح');

    }
}
