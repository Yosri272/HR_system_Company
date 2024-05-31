<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_socialseurities;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_socialseuritiesController extends Controller
{
    public function Stort( Request $request)
    {


        $sys_socialseurities= new sys_socialseurities;
        $sys_socialseurities->emply_nameAR = $request->emply_nameAR;
        $sys_socialseurities->branch_nameAR = $request->branch_nameAR;
        $sys_socialseurities->dept_name =$request->dept_name;
        $sys_socialseurities->subscription_name = $request->subscription_name;
        $sys_socialseurities->wage_basic =$request->wage_basic;
        $sys_socialseurities->subscription_wage =$request->subscription_wage;
        $sys_socialseurities->allowance_housing =$request->allowance_housing;
        $sys_socialseurities->allowance_comm =$request->allowance_comm;
        $sys_socialseurities->allowance_other =$request->allowance_other;
        $sys_socialseurities->Joint_status =$request->Joint_status;
        $sys_socialseurities->date_exclusion =$request->date_exclusion;
        $sys_socialseurities->emply_rate =$request->emply_rate;
        $sys_socialseurities->comp_rate =$request->comp_rate;
        $sys_socialseurities->phone_offwork =$request->phone_offwork;
        $sys_socialseurities->Attached =$request->Attached;
        $sys_socialseurities->save();
        return back()->with('success','تم الاضافة بنجاح');

    }


    public function display()
{


    return view('display.part.view-employee-social-security');

}
}
