<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_qualificationemply;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_qualificationemplyController extends Controller
{
    public function Stort( Request $request)
    {
        $sys_qualificationemply= new sys_qualificationemply;
        $sys_qualificationemply->qualification = $request->qualification;
        $sys_qualificationemply->specialization = $request->specialization;
        $sys_qualificationemply->university =$request->university;
        $sys_qualificationemply->place = $request->place;
        $sys_qualificationemply->year_graduation =$request->year_graduation;
        $sys_qualificationemply->emply_nameAR =$request->emply_nameAR;
        $sys_qualificationemply->branch_nameAR =$request->branch_nameAR;
        $sys_qualificationemply->dept_name = $request->dept_name;
        $sys_qualificationemply->save();
        return back()->with('success','تم الاضافة بنجاح');

    }
}
