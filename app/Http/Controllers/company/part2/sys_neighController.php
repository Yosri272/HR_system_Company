<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_neigh;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_neighController extends Controller
{
    public function Stort( Request $request)
    {

      $sys_neighs= new sys_neigh;
      $sys_neighs->neigh_name = $request->neigh_name;
      $sys_neighs->governor_id = $request->governor_id;
      $sys_neighs->save();
      return back()->with('success','تم الاضافة بنجاح');


    }
    public function distory($neigh_id)
    {

        $sys_neighs = sys_neigh::where('neigh_id','=',$neigh_id);
        $sys_neighs->delete();
        return back()->with('error','تم الحذف بنجاج');



    }
    public function display($neigh_id)
    {

      $sys_neighs = sys_neigh::where('neigh_id','=',$neigh_id);
       return view('display.part2.neighs' ,compact('sys_neighs'));

    }
    public function show()
    {


       $sys_neighs=sys_neigh::orderBy('neigh_id' , 'DESC');
       return view('display.part2.neighs' ,compact('sys_neighs'));
    }


}
