<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_employeedep;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_employeedepController extends Controller
{
    public function Stort( Request $request)
    {
        $sys_employeedeps= new sys_employeedep;
        $sys_employeedeps->number_identity = $request->number_identity;
        $sys_employeedeps->name = $request->name;
        $sys_employeedeps->TYPE = $request->TYPE;
        $sys_employeedeps->nationality =$request->nationality;
        $sys_employeedeps->social_status = $request->social_status;
        $sys_employeedeps->emply_nameAR =$request->emply_nameAR;
        $sys_employeedeps->branch_nameAR =$request->branch_nameAR;
        $sys_employeedeps->dept_name = $request->dept_name;
        $sys_employeedeps->datebirth = $request->datebirth;
        $sys_employeedeps->healthInsurance = $request->healthInsurance;
        $sys_employeedeps->icard = $request->icard;
        $sys_employeedeps->famle = $request->famle;
        $sys_employeedeps->ticket = $request->ticket;


        $sys_employeedeps->save();
        return back()->with('success','تم الاضافة بنجاح');

    }
    public function display()
{


    return view('display.part.view-employee-tabian');

}
}
