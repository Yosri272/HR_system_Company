<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_emply_doc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class emply_docController extends Controller
{
    public function Stort( Request $request)
    {


        $sys_emply_doc= new sys_emply_doc;
        $sys_emply_doc->doc_type_id = $request->doc_type_id;
        $sys_emply_doc->doc_type_name = $request->doc_type_name;
        $sys_emply_doc->date_release =$request->date_release;
        $sys_emply_doc->date_Expiry = $request->date_Expiry;
        $sys_emply_doc->issuer =$request->issuer;
        $sys_emply_doc->doc_category =$request->doc_category;
        $sys_emply_doc->branch_nameAR =$request->branch_nameAR;
        $sys_emply_doc->dept_name =$request->dept_name;
        $sys_emply_doc->emply_nameAR =$request->emply_nameAR;
        $sys_emply_doc->attached =$request->attached;
        $sys_emply_doc->save();
        return back()->with('success','تم الاضافة بنجاح');

    }

    public function display()
{


    return view('display.part.view-employee-documents');

}
}
