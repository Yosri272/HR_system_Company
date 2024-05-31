<?php

namespace App\Http\Controllers\company\part1;

use App\company\sys_contractitem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_contractitemController extends Controller
{
    public function Stort( Request $request)
    {


      $sys_contractitem= new sys_contractitem;
      $sys_contractitem->contracttype_id = $request->contracttype_id;
      $sys_contractitem->contractitem_nameAR = $request->contractitem_nameAR;
      $sys_contractitem->contractitem_nameEN = $request->contractitem_nameEN;
      $sys_contractitem->item_leve = $request->item_leve;
      $sys_contractitem->save();
      return back()->with('success','تم الاضافة بنجاح');


    }

    public function distory($contractitem_id)
{

    $sys_contractitem = sys_contractitem::where('contractitem_id','=',$contractitem_id);
    $sys_contractitem->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
