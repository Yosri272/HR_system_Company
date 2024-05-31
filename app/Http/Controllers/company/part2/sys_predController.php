<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_pred;
use App\company\sys_installments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\company\sys_dept;
use App\company\sys_branch;
use App\company\users;
class sys_predController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_pred= new sys_pred;
      $sys_pred->order_number = $request->order_number;
      $sys_pred->branch_nameAR = $request->branch_nameAR;
      $sys_pred->dept_name = $request->dept_name;
      $sys_pred->emply_name = $request->emply_name;
      $sys_pred->pred_purpose = $request->pred_purpose;
      $sys_pred->type = $request->type;
      $sys_pred->amount = $request->amount;
      $sys_pred->currency_name = $request->currency_name;
      $sys_pred->calculation = $request->calculation;
      $sys_pred->months_number = $request->months_number;
      $sys_pred->premium = $request->premium;
      $sys_pred->pred_max = $request->pred_max;
      $sys_pred->pred_date = $request->pred_date;
      $sys_pred->startdate = $request->startdate;
      $sys_pred->expirydate = $request->expirydate;
      $sys_pred->allow_more = $request->allow_more;
      $sys_pred->order_status = $request->order_status;
      $sys_pred->allow_choose = $request->allow_choose;
      $sys_pred->order_number = 1;

      $sys_pred->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function show()
    {
        
        $sys_dept=sys_dept::all();
        $sys_branch=sys_branch::all();
        $users=users::all();
       $sys_pred=sys_pred::orderBy('pred_id' , 'DESC')->paginate(6);
       $sys_installments=sys_installments::orderBy('installments_id' , 'DESC')->paginate(6);
       return view('company.part2.advancesLans' ,compact('sys_pred','sys_installments','sys_dept','sys_branch','users'));

    }
}


