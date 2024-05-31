<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_covenantitems;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_covenantitemsController extends Controller
{
    public function Stort( Request $request)
    {
      $sys_covenantitems= new sys_covenantitems;
      $sys_covenantitems->covenant_name = $request->covenant_name;
      $sys_covenantitems->covenant_type = $request->covenant_type;
      $sys_covenantitems->Unit = $request->Unit;
      $sys_covenantitems->Note = $request->Note;
      $sys_covenantitems->save();
      return back()->with('success','تم الاضافة بنجاح');
    }

    public function distory($covenant_id)
    {

        $sys_covenantitems = sys_covenantitems::where('covenant_id','=',$covenant_id);
        $sys_covenantitems->delete();
        return back()->with('error','تم الحذف بنجاج');



    }

}
