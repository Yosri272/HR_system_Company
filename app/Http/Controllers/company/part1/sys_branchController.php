<?php

namespace App\Http\Controllers\company\part1;
use App\company\sys_branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_branchController extends Controller
{
    public function store(Request $request)
    {



      $comp_id =$request->comp_name;
      $branch_nameAR=$request->branch_nameAR;
      $branch_nameEN =$request->branch_nameEN;
      $branch_TEL =$request->branch_TEL;
      $branch_email =$request->branch_email;
      $branch_fax =$request->branch_fax;
      $branch_box =$request->branch_box;
      $branch_address =$request->branch_address;
      $branch_state =$request->branch_state;
      $branch_governor =$request->branch_governor;
      $branch_local =$request->branch_local;
      $branch_webst =$request->branch_webst;
      $FOOTNOTE_R1='FOOTNOTE_R1';
      $FOOTNOTE_R2='FOOTNOTE_R2';
      $FOOTNOTE_R3='FOOTNOTE_R3';
      $FOOTNOTE_L1='FOOTNOTE_L1';
      $FOOTNOTE_L2='FOOTNOTE_L2';
      $FOOTNOTE_L3='FOOTNOTE_L3';
      $notes =$request->notes;
      $branch_tak =1;

        $request->validate([
          'files' => 'required',
        ]);

        if ($request->hasfile('files')) {
            $files = $request->file('files');
            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $path = $file->move('img/branch', $name);

                sys_branch::create([


                    'comp_id' => $comp_id ,
                    'branch_nameAR' =>$branch_nameAR,
                    'branch_nameEN' =>$branch_nameEN ,
                    'branch_TEL' =>$branch_TEL,
                    'branch_email' =>$branch_email ,
                    'branch_fax' =>$branch_fax ,
                    'branch_box' =>$branch_box ,
                    'branch_address' =>$branch_address ,
                    'branch_state' =>$branch_state ,
                    'branch_governor' =>$branch_governor ,
                    'branch_local' =>$branch_local ,
                    'branch_webst' =>$branch_webst ,
                    'notes' =>$notes ,
                    'FOOTNOTE_R1' =>$FOOTNOTE_R1,
                    'FOOTNOTE_R2' =>$FOOTNOTE_R2 ,
                    'FOOTNOTE_R3' =>$FOOTNOTE_R3,
                    'FOOTNOTE_L1' =>$FOOTNOTE_L1,
                    'FOOTNOTE_L2' => $FOOTNOTE_L2,
                    'FOOTNOTE_L3' =>$FOOTNOTE_L3,
                    'branch_tak' => $branch_tak,
                    'path' =>  $name
                  ]);
            }
         }


        return back()->with('success', 'تم الاضافة بنجاح');
    }

    public function distory($branch_id)
{

    $sys_branch = sys_branch::where('branch_id','=',$branch_id);
    $sys_branch->delete();
    return back()->with('error','تم الحذف بنجاج');



}
}
