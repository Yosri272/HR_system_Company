<?php

namespace App\Http\Controllers\company\part1;
use App\company\sys_contractitem;
use App\company\sys_contracttype;
use App\company\sys_contract;
use App\company\sys_company;
use App\company\sys_dept;
use App\company\sys_branch;
use App\company\users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_contractController extends Controller
{

    public function index()
    {
        $sys_contracttype=sys_contracttype::all();
        $sys_company=sys_company::orderBy('comp_id' , 'DESC')->paginate(6);
        $sys_dept=sys_dept::all();
        $sys_branch=sys_branch::all();
        $users=users::orderBy('emply_id' , 'DESC')->paginate(6);
      return view('company.part1.add-contract',compact('sys_company','sys_contracttype','users'));
    }
    public function Stort(Request $request)
    {

        $sys_contract= new sys_contract;
        $sys_contract->comp_nameAR=$request->comp_nameAR;
        $sys_contract->branch_nameAR= $request->branch_nameAR;
        $sys_contract->dept_name= $request->dept_name;
        $sys_contract->emply_nameAR= $request->emply_nameAR;
        $sys_contract->contracttype_name =$request->contracttype_name;
        $sys_contract->contract_date =$request->contract_date;
        $sys_contract->contract_starting =$request->contract_starting;
        $sys_contract->contract_end =$request->contract_end;
        $sys_contract->contract_duration =$request->contract_duration;
        $sys_contract->date_renewal =$request->date_renewal;
        $sys_contract->contract_status =$request->contract_status;
        $sys_contract->commission =$request->commission;
        $sys_contract->contractend_comm =$request->contractend_comm;
        $sys_contract->rate_commission =$request->rate_commission;
        $sys_contract->basic_salary =$request->basic_salary;
        $sys_contract->tickets =$request->tickets;
        $sys_contract->bonuses =$request->bonuses;
        $sys_contract->housing =$request->housing;
        $sys_contract->hour_extra=$request->hour_extra;
        $sys_contract->transport=$request->transport;
        $sys_contract->contact=$request->contact;
        $sys_contract->living=$request->living;
        $sys_contract->tickets_number=$request->tickets_number;
        $sys_contract->tickets_type=$request->tickets_type;
        $sys_contract->save();
        return back()->with('success','تم الاضافة بنجاح');

    }


    public function show()
    {


       $sys_contract=sys_contract::orderBy('contract_id' , 'DESC')->paginate(6);
       $sys_contractitem=sys_contractitem::orderBy('contractitem_id' , 'DESC')->paginate(6);
       $sys_contracttype=sys_contracttype::orderBy('contracttype_id' , 'DESC')->paginate(6);
        return view('company.part1.contract' ,compact('sys_contract','sys_contractitem','sys_contracttype'));

    }


    public function display($contracttype_id)
    {


      $a_viewData = sys_contract::all()->where('contract_id','=',$contracttype_id);

      foreach($a_viewData as $data)

      {
        
  
          $val=$data->contracttype_name;
        
         $sys_contractitem= sys_contractitem::all()->where('contracttype_id','=',$val);
         //dd($sys_contractitem);
         $sys_contractitemm=sys_contractitem::orderBy('contractitem_id' , 'DESC')->paginate(6);
               
      }
         return view('display.part.view-contract' ,compact('a_viewData','sys_contractitem','sys_contractitemm'));
        

        

    }


    public function distory($contract_id)
{

    $sys_contract = sys_contract::where('contract_id','=',$contract_id);
    $sys_contract->delete();
    return back()->with('error','تم الحذف بنجاج');



}

}
