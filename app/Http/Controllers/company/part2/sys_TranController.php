<?php

namespace App\Http\Controllers\company\part2;


use App\company\sys_currencies;
use App\company\sys_trans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_TranController extends Controller
{

    public function Stort( Request $request)
    {

      $sys_trans= new sys_trans;
      $sys_trans->tran_name = $request->tran_name;
      $sys_trans->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function show()
    {

       $sys_currencies=sys_currencies::orderBy('currency_id' , 'DESC')->paginate(6);
       $sys_trans=sys_trans::orderBy('tran_id' , 'DESC')->paginate(6);
       //$sys_neighs=sys_neigh::orderBy('neigh_id' , 'DESC')->paginate(6);
       return view('company.part2.transfers' ,compact('sys_currencies','sys_trans'));

    }

    public function distory($tran_id)
{

    $sys_trans = sys_trans::where('tran_id','=',$tran_id);
    $sys_trans->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
