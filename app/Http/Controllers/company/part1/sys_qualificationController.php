<?php

namespace App\Http\Controllers\company\part1;
use App\company\sys_jopdata;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\company\sys_qualification;
class sys_qualificationController extends Controller
{
    public function Stort( Request $request)
{
    $this->validate($request,[
        'qualification_name' => 'required'
    ]);

  $sys_qualification= new sys_qualification;
  $sys_qualification->qualification_name = $request->qualification_name;
  $sys_qualification->save();
  return back()->with('success','تم الاضافة بنجاح');


}



public function distory($qualification_id)
{

    $Delsys_qualification = sys_qualification::where('qualification_id','=',$qualification_id);
    $Delsys_qualification->delete();
    return back()->with('error','تم الحذف بنجاج');



}

public function update( Request $request,$qualification_id)
   {
   $desys_qualification= $request->qualification_name;
   dd($desys_qualification);
   $desys_qualification = sys_qualification::where('qualification_id','=',$qualification_id)->first();
   //$post->password =Hash::make($request->input('n_password'));
   $desys_qualification->save();
   return back()->with('success', 'تم تعديل كلمة السر بنجاح');

   }
public function show()
{


   //$sys_qualification = sys_qualification::all();
   $sys_qualification=sys_qualification::orderBy('qualification_id' , 'DESC')->paginate(6);
    return view('company.part1.qualifications' ,compact('sys_qualification'));

}


public function display($qualification_id)
{

    $a_viewData = sys_qualification::all()->where('qualification_id','=',$qualification_id);
    foreach($a_viewData as $data)

    {

        $val=$data->qualification_name;

       $sys_jopdata= sys_jopdata::all()->where('qualification','=',$val);
       $sys_jopdataa=sys_jopdata::orderBy('jop_id' , 'DESC')->paginate(6);
    }


    return view('display.part1.view-qualification' ,compact('a_viewData','sys_jopdata','sys_jopdataa'));


}


}
