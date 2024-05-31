<?php

namespace App\Http\Controllers\company\part1;
use App\company\sys_company;
use App\company\sys_branch;
use App\company\sys_dept;
use App\company\sys_state;
use App\company\sys_governor;
use App\company\sys_neigh;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_companyController extends Controller
{



    public function show()
    {


        $sys_state=sys_state::orderBy('state_id' , 'DESC')->paginate(6);
        $sys_governor=sys_governor::orderBy('governor_id' , 'DESC')->paginate(6);
        $sys_neighs=sys_neigh::orderBy('neigh_id' , 'DESC')->paginate(6);
       $sys_company=sys_company::orderBy('comp_id' , 'DESC')->paginate(6);
       $sys_branch=sys_branch::orderBy('branch_id' , 'DESC')->paginate(6);
       $sys_dept=sys_dept::orderBy('dept_id' , 'DESC')->paginate(6);
        return view('company.part.companies' ,compact('sys_company','sys_branch','sys_dept','sys_state','sys_governor','sys_neighs'));

    }




    public function store(Request $request)
    {
        //$namelabl1=$request->name;
        $comp_nameAR=$request->comp_nameAR;
        $comp_NameEN=$request->comp_NameEN;
        $type_activity=$request->type_activity;
        $comp_TEL=$request->comp_TEL;
        $comp_FAX=$request->comp_FAX;
        $comp_BOX=$request->comp_BOX;
        $comp_ADDRESS=$request->comp_ADDRESS;
        $NOTES=$request->NOTES;

        $request->validate([
          'files' => 'required',
        ]);

        if ($request->hasfile('files')) {
            $files = $request->file('files');
            foreach($files as $file) {
                $name = $file->getClientOriginalName();
               
                $path = $file->move('img/comp/', $name);

                sys_company::create([

                    'comp_nameAR' => $comp_nameAR,
                    'comp_NameEN' => $comp_NameEN,
                    'type_activity' => $type_activity,
                    'comp_TEL' => $comp_TEL,
                    'comp_FAX' => $comp_FAX,
                    'comp_BOX' => $comp_BOX,
                    'comp_ADDRESS' => $comp_ADDRESS,
                    'NOTES' => $NOTES,
                    'path' =>  $name
                  ]);
            }
         }


        return back()->with('success', 'تم الاضافة بنجاح');
    }

    public function distory($comp_id)
    {

        $sys_company = sys_company::where('comp_id','=',$comp_id);
        $sys_company->delete();
        return back()->with('error','تم الحذف بنجاج');



    }

}
