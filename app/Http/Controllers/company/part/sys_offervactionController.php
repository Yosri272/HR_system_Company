<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_offervaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_offervactionController extends Controller
{
    public function Stort( Request $request)
    {
        $sys_offervaction= new sys_offervaction;
        $sys_offervaction->year = $request->year;
        $sys_offervaction->emply_nameAR = $request->emply_nameAR;
        $sys_offervaction->branch_nameAR =$request->branch_nameAR;
        $sys_offervaction->dept_name = $request->dept_name;
        $sys_offervaction->holidaytype_name =$request->holidaytype_name;
        $sys_offervaction->start_form =$request->start_form;
        $sys_offervaction->end_to =$request->end_to;
        $sys_offervaction->numbervactionday = $request->numbervactionday;
        $sys_offervaction->numberpaidday = $request->numberpaidday;
        $sys_offervaction->numberfreeday =$request->numberfreeday;
        $sys_offervaction->numberdaylate = $request->numberdaylate;
        $sys_offervaction->backdayemply =$request->backdayemply;
        $sys_offervaction->vactionsalary =$request->vactionsalary;
        $sys_offervaction->ticketsneed = $request->ticketsneed;
        $sys_offervaction->ticketprice =$request->ticketprice;
        $sys_offervaction->contact_number = $request->contact_number;
        $sys_offervaction->number_alternateemply =$request->number_alternateemply;
        $sys_offervaction->name_alternateemply =$request->name_alternateemply;
        $sys_offervaction->jop_alternateemply = $request->jop_alternateemply;
        $sys_offervaction->ordernumber =$request->ordernumber;
        $sys_offervaction->attachments = 'yosri';
        $sys_offervaction->save();
        return back()->with('success','تم الاضافة بنجاح');

    }
    public function distory($offervaction_id )
    {

        $sys_offervaction = sys_offervaction::where('offervaction_id','=',$offervaction_id );
        $sys_offervaction->delete();
        return back()->with('error','تم الحذف بنجاج');



    }
}
