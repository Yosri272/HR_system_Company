<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_currencies;
use App\company\sys_conter;
use App\company\sys_bank;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_accontsController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_conter= new sys_conter;
      $sys_conter->conter_nameAR = $request->conter_nameAR;
      $sys_conter->conter_nameEN = $request->conter_nameEN;
      $sys_conter->conter_status = $request->conter_status;
      $sys_conter->conter_type = $request->conter_type;
      $sys_conter->conter_level = $request->conter_level;
      $sys_conter->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function show()
    {

       $sys_currencies=sys_currencies::orderBy('currency_id' , 'DESC')->paginate(6);
       $sys_conters=sys_conter::orderBy('conter_id' , 'DESC')->paginate(6);
       $sys_bank=sys_bank::orderBy('bank_id' , 'DESC')->paginate(6);
       return view('company.part.sys_acconts' ,compact('sys_currencies','sys_bank','sys_conters'));

    }

    public function distory($conter_id)
    {

        $sys_conters = sys_conter::where('conter_id','=',$conter_id);
        $sys_conters->delete();
        return back()->with('error','تم الحذف بنجاج');

        

    }

}
