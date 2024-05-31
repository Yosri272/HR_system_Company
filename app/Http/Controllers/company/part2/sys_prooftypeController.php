<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_prooftype;
use App\company\sys_emply_doc_types;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_prooftypeController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_prooftype= new sys_prooftype;
      $sys_prooftype->prooft_name = $request->prooft_name;
      $sys_prooftype->save();
      return back()->with('success','تم الاضافة بنجاح');


    }

    public function show()
    {


       $sys_emply_doc_type=sys_emply_doc_types::orderBy('doc_type_id' , 'DESC')->paginate(6);
       $sys_prooftype=sys_prooftype::orderBy('prooft_id' , 'DESC')->paginate(6);
        return view('company.part.employeesettings' ,compact('sys_prooftype','sys_emply_doc_type'));

    }
    public function distory($prooft_id)
    {

        $sys_prooftype = sys_prooftype::where('prooft_id','=',$prooft_id);
        $sys_prooftype->delete();
        return back()->with('error','تم الحذف بنجاج');



    }
}
