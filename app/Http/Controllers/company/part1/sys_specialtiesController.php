<?php

namespace App\Http\Controllers\company\part1;
use App\company\sys_jopdata;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\company\sys_specialties;


class sys_specialtiesController extends Controller
{
    public function Stort( Request $request)
    {

          $sys_specialties= new sys_specialties;
          $sys_specialties->specialties_name = $request->specialties_name;
          $sys_specialties->save();
          return back()->with('success','تم الاضافة بنجاح');



    }

    public function show()
    {


        //$sys_specialties = sys_specialties::all();
        $sys_specialties=sys_specialties::orderBy('specialties_Id' , 'DESC')->paginate(6);
        return view('company.part1.specialization' ,compact('sys_specialties'));

    }
    public function distory($specialties_Id)
{

    $sys_specialties = sys_specialties::where('specialties_Id','=',$specialties_Id);
    $sys_specialties->delete();
    return back()->with('error','تم الحذف بنجاج');



}
public function display($specialties_Id)
{

 // $val=Auth::users()->emply_nameAR;
    //$data2=0;


    $a_viewData = sys_specialties::all()->where('specialties_Id','=',$specialties_Id);
    foreach($a_viewData as $data)

    {

        $val=$data->specialties_name;
      //  $val1=$data->qualification_name;
       $sys_jopdata= sys_jopdata::all()->where('specialties_name','=',$val);
       $sys_jopdataa=sys_jopdata::orderBy('jop_id' , 'DESC')->paginate(6);
    }

    return view('display.part1.view-specialization' ,compact('a_viewData','sys_jopdata','sys_jopdataa'));


}

}
