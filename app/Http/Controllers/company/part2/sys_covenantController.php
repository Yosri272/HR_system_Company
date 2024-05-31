<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_covenant;
use App\company\sys_covenantitems;
use App\company\users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_covenantController extends Controller
{
    public function Stort( Request $request)
    {
      $sys_covenant= new sys_covenant;
      $sys_covenant->emply_id = $request->emply_nameAR;
      $sys_covenant->branch_nameAR = $request->branch_nameAR;
      $sys_covenant->dept_name = $request->dept_name;
      $sys_covenant->covenant_number = $request->covenant_number;
      $sys_covenant->covenant_type = $request->covenant_type;
      $sys_covenant->Unit = $request->Unit;
      $sys_covenant->Number = $request->Number;
      $sys_covenant->covenant_status = $request->covenant_status;
      $sys_covenant->covenant_purpose = $request->covenant_purpose;
      $sys_covenant->covenant_power = $request->covenant_power;
      $sys_covenant->covenant_date = $request->covenant_date;
      $sys_covenant->order_number = $request->order_number;
      $sys_covenant->move_type = $request->move_type;

      $sys_covenant->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function show()
    {
        $users=users::orderBy('emply_id' , 'DESC')->paginate(6);
        $sys_covenant=sys_covenant::orderBy('covenant_id' , 'DESC')->paginate(6);
       $sys_covenantitems=sys_covenantitems::orderBy('covenant_id' , 'DESC')->paginate(6);
       return view('company.part2.covenant' ,compact('sys_covenant','sys_covenantitems','users'));

    }
    public function distory($covenant_id)
    {

        $sys_covenant = sys_covenant::where('covenant_id','=',$covenant_id);
        $sys_covenant->delete();
        return back()->with('error','تم الحذف بنجاج');



    }
}
