<?php


namespace App\Http\Controllers\company\part2;
use App\company\sys_nationality;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_nationalityController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_nationality= new sys_nationality;
      $sys_nationality->nationality_name = $request->nationality_name;
      $sys_nationality->save();
      return back()->with('success','تم الاضافة بنجاح');


    }

    public function show()
    {


       //$sys_qualification = sys_qualification::all();
       $sys_nationality=sys_nationality::orderBy('nationality_id' , 'DESC')->paginate(6);
        return view('company.part2.nationality' ,compact('sys_nationality'));

    }
    public function distory($category_id)
{

    $sys_nationality = sys_nationality::where('nationality_id','=',$category_id);
    $sys_nationality->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
