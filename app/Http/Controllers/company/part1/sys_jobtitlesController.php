<?php

namespace App\Http\Controllers\company\part1;
use App\company\sys_currencies;
use App\company\sys_jopdata;

use App\company\sys_courses;
use App\company\sys_jop;
use App\company\sys_categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_jobtitlesController extends Controller
{

    public function Stort( Request $request)
    {


      $sys_jop= new sys_jop;
      $yosri=$request->category_name;
      //dd($yosri);
      $sys_jop->jop_nameAR = $request->jop_nameAR;
      $sys_jop->jop_nameEN = $request->jop_nameEN;
      $sys_jop->category_id = $request->category_name;
      $sys_jop->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function show()
    {
        $sys_categories = sys_categories::all();
        $sys_jop=sys_jop::orderBy('jop_id' , 'DESC')->paginate(6);

        return view('company.part1.job-titles' ,compact('sys_categories','sys_jop'));

    }
    public function distory($jop_id)
{

    $sys_jop = sys_jop::where('jop_id','=',$jop_id);
    $sys_jop->delete();
    return back()->with('error','تم الحذف بنجاج');



}
public function display($jop_id)
{
// $val=Auth::users()->emply_nameAR;
    //$data2=0;


    $a_viewData = sys_jop::all()->where('jop_id','=',$jop_id);
    foreach($a_viewData as $data)

    {

        $val=$data->jop_nameAR;
    
     $sys_courses= sys_courses::all()->where('jop_name','=',$val);
     $sys_coursess=sys_courses::orderBy('courses_id' , 'DESC')->paginate(6);

     $sys_jopdata= sys_jopdata::all()->where('jopdegree_name','=',$val);
     $sys_jopdataa=sys_jopdata::orderBy('jop_id' , 'DESC')->paginate(6);

     
    }
    return view('display.part1.view-job-titles' ,compact('a_viewData','sys_courses','sys_coursess','sys_jopdata','sys_jopdataa'));



}
}
