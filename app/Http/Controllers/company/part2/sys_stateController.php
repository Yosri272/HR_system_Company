<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_state;
use App\company\sys_governor;
use App\company\sys_neigh;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_stateController extends Controller
{
    public function Stort( Request $request)
    {
        $code_s=$request->code_s;
        $code_c=$request->code_c;
      $sys_state= new sys_state;
      $sys_state->state_name = $request->state_name;
      $sys_state->save();
      return back()->with('success','تم الاضافة بنجاح');


    }

    public function show()
    {

       $sys_state=sys_state::orderBy('state_id' , 'DESC')->paginate(6);
       $sys_governor=sys_governor::orderBy('governor_id' , 'DESC')->paginate(6);
       $sys_neighs=sys_neigh::orderBy('neigh_id' , 'DESC')->paginate(6);
       return view('company.part2.locations' ,compact('sys_state','sys_governor','sys_neighs'));

    }
    public function distory($state_id)
{

    $sys_state = sys_state::where('state_id','=',$state_id);
    $sys_state->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
