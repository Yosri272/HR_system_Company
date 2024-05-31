<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_Licenses;
use App\company\sys_Type_licenses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_type_licensesController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_Type_licenses= new sys_Type_licenses;
      $sys_Type_licenses->type_licenses_name = $request->type_licenses_name;
      $sys_Type_licenses->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function distory($type_licenses_id)
{

    $sys_Type_licenses = sys_Type_licenses::where('type_licenses_id','=',$type_licenses_id);
    $sys_Type_licenses->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
