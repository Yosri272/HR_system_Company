<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_installments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_installmentsController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_installments= new sys_installments;
      $sys_installments->pred_id = $request->pred_id;
      $sys_installments->branch_nameAR = $request->branch_nameAR;
      $sys_installments->dept_name = $request->dept_name;
      $sys_installments->emply_name = $request->emply_name;
      $sys_installments->installments_amount = $request->installments_amount;
      $sys_installments->payment_date = $request->payment_date;
      $sys_installments->installments_number = $request->installments_number;
      $sys_installments->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
}
