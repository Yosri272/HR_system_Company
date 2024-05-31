<?php

namespace App\Http\Controllers\company\part2;

use App\company\sys_governor;
use App\company\sys_state;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_governorController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_governor= new sys_governor;
      $sys_governor->governor_name = $request->governor_name;
      $sys_governor->state_id = $request->state_name;
      $sys_governor->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function distory($governor_id)
    {

        $sys_governor = sys_governor::where('governor_id','=',$governor_id);
        $sys_governor->delete();
        return back()->with('error','تم الحذف بنجاج');



    }


}
