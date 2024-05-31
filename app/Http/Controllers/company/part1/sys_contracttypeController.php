<?php

namespace App\Http\Controllers\company\part1;

use App\company\sys_contracttype;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_contracttypeController extends Controller
{
    public function Stort( Request $request)
    {


      $sys_contracttype= new sys_contracttype;
      $sys_contracttype->contracttype_name = $request->contracttype_name;
      $sys_contracttype->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function distory($contracttype_id)
    {

        $sys_contracttype = sys_contracttype::where('contracttype_id','=',$contracttype_id);
        $sys_contracttype->delete();
        return back()->with('error','تم الحذف بنجاج');



    }
}
