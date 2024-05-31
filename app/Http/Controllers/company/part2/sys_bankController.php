<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_bank;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_bankController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_bank= new sys_bank;
      $sys_bank->bank_nameAR = $request->bank_nameAR;
      $sys_bank->bank_nameEN = $request->bank_nameEN;
      $sys_bank->bank_tel = $request->bank_tel;
      $sys_bank->bank_fax = $request->bank_fax;
      $sys_bank->bank_box = $request->bank_box;
      $sys_bank->bank_address = $request->bank_address;
      $sys_bank->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function distory($bank_id)
    {

        $sys_bank = sys_bank::where('bank_id','=',$bank_id);
        $sys_bank->delete();
        return back()->with('error','تم الحذف بنجاج');



    }
}
