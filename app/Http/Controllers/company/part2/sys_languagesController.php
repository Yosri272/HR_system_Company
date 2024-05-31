<?php

namespace App\Http\Controllers\company\part2;

use App\company\sys_languages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_languagesController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_languages= new sys_languages;
      $sys_languages->languages_name = $request->languages_name;
      $sys_languages->save();
      return back()->with('success','تم الاضافة بنجاح');


    }

    public function show()
    {


       //$sys_qualification = sys_qualification::all();
       $sys_languages=sys_languages::orderBy('languages_id' , 'DESC')->paginate(6);
        return view('company.part2.language' ,compact('sys_languages'));

    }
    public function distory($languages_id)
{

    $sys_languages = sys_languages::where('languages_id','=',$languages_id);
    $sys_languages->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
