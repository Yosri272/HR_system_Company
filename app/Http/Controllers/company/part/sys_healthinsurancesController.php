<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_healthinsurances;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_healthinsurancesController extends Controller
{
    public function Stort( Request $request)
    {


        $sys_healthinsurances= new sys_healthinsurances;
        $sys_healthinsurances->ins_category = $request->ins_category;
        $sys_healthinsurances->ins_validity = $request->ins_validity;
        $sys_healthinsurances->ins_company =$request->ins_company;
        $sys_healthinsurances->emply_nameAR = $request->emply_nameAR;
        $sys_healthinsurances->branch_nameAR = $request->branch_nameAR;
        $sys_healthinsurances->dept_name =$request->dept_name;
      
        $sys_healthinsurances->save();
        return back()->with('success','تم الاضافة بنجاح');

    }
}
