<?php

namespace App\Http\Controllers\company\part1;
use App\company\sys_jopdegree;
use App\company\sys_categories;
use App\company\sys_nationality;
use App\company\sys_jopdata;
use App\company\sys_qualification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_jopdegreeController extends Controller
{
    public function Stort( Request $request)
    {
      $sys_jopdegree= new sys_jopdegree;
      $sys_jopdegree->jopdegree = $request->jopdegree;
      $sys_jopdegree->jopdegree_name = $request->jopdegree_name;
      $sys_jopdegree->jop_category = $request->jop_category;
      $sys_jopdegree->annualbonus = $request->annualbonus;
      $sys_jopdegree->salaryuponappointment = $request->salaryuponappointment;
      $sys_jopdegree->salaryuponendservice = $request->salaryuponendservice;
      $sys_jopdegree->nationality = $request->nationality;
      $sys_jopdegree->qualification_hig = $request->qualification_hig;
      $sys_jopdegree->qualification_min = $request->qualification_min;
     // $sys_jopdegree->jop_nameAR = $request->jop_nameAR;
      $sys_jopdegree->year = $request->year;
      $sys_jopdegree->note = $request->note;
      $sys_jopdegree->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function show()
    {
        $sys_categories = sys_categories::all();
        $sys_nationality=sys_nationality::all();
        $sys_qualification=sys_qualification::all();
        $sys_jopdegree=sys_jopdegree::orderBy('jopdegree_id' , 'DESC')->paginate(6);
        return view('company.part1.job-grades' ,compact('sys_jopdegree','sys_categories','sys_nationality','sys_qualification'));

    }
    public function distory($jopdegree_id)
{

    $sys_jopdegree = sys_jopdegree::where('jopdegree_id','=',$jopdegree_id);
    $sys_jopdegree->delete();
    return back()->with('error','تم الحذف بنجاج');



}
public function display($jopdegree_id)
{
 // $val=Auth::users()->emply_nameAR;
    //$data2=0;


    $a_viewData = sys_jopdegree::all()->where('jopdegree_id','=',$jopdegree_id);
    foreach($a_viewData as $data)

    {

        $val=$data->jopdegree;
       $sys_jopdata= sys_jopdata::all()->where('jopdegree','=',$val);
       $sys_jopdataa=sys_jopdata::orderBy('jop_id' , 'DESC')->paginate(6);
      
    }
    return view('display.part1.view-job-grades' ,compact('a_viewData','sys_jopdata','sys_jopdataa'));



}
}
