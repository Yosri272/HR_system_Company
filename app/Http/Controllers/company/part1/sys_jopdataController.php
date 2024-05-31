<?php

namespace App\Http\Controllers\company\part1;
use App\company\sys_jopdata;
use App\company\sys_qualification;
use App\company\sys_specialties;
use App\company\users;
use App\company\sys_jop;
use App\company\sys_jopdegree;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_jopdataController extends Controller
{
    public function Stort( Request $request)
    {







      $sys_jopdata= new sys_jopdata;
      $sys_jopdata->qualification = $request->qualification;
      $sys_jopdata->specialties_name = $request->specialties_name;
      $sys_jopdata->branch_nameAR = $request->branch_nameAR;
      $sys_jopdata->dept_name = $request->dept_name;
      $sys_jopdata->jopdegree_name = $request->jopdegree_name;
      $sys_jopdata->date_hiring = $request->date_hiring;
      $sys_jopdata->appointment_letter = $request->appointment_letter;
      $sys_jopdata->emply_nameAR = $request->emply_nameAR;
      $sys_jopdata->directmanager = "yosri";
      //dd($request->directmanager);
      $sys_jopdata->jopdegree = $request->jopdegree;
      $sys_jopdata->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function show()
    {
        $sys_qualification = sys_qualification::all();
        $sys_specialties = sys_specialties::all();
        $users=users::orderBy('emply_id' , 'DESC')->paginate(6);
        $sys_jopdegree = sys_jopdegree::all();
        $sys_jopdata=sys_jopdata::orderBy('jop_id' , 'DESC')->paginate(6);
        $sys_jops = sys_jop::all();
        return view('company.part1.jobs' ,compact('sys_jopdata','sys_qualification','sys_specialties','users','sys_jopdegree','sys_jops'));

    }
    public function distory($jop_id)
{

    $sys_jopdata = sys_jopdata::where('jop_id','=',$jop_id);
    $sys_jopdata->delete();
    return back()->with('error','تم الحذف بنجاج');



}
public function display($jop_id)
{



    $a_viewData = sys_jopdata::all()->where('jop_id','=',$jop_id);

    return view('display.part1.view-job' ,compact('a_viewData'));



}
}
