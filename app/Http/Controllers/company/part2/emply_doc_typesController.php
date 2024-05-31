<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_emply_doc_types;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class emply_doc_typesController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_emply_doc_type= new sys_emply_doc_types;
      $sys_emply_doc_type->doc_type_name = $request->doc_type_name;
      $sys_emply_doc_type->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function distory($doc_type_id)
{

    $sys_emply_doc_type = sys_emply_doc_types::where('doc_type_id','=',$doc_type_id);
    $sys_emply_doc_type->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
