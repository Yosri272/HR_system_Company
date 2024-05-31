<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_Licenses;
use App\company\sys_Type_licenses;
use App\company\sys_branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_licensesController extends Controller
{
    public function Stort( Request $request)
    {
        $licenses_number=$request->licenses_number;
        $licenses_name=$request->licenses_name;
        $date_release=$request->date_release;
        $date_Expiry=$request->date_Expiry;
        $date_renewal=$request->date_renewal;
        $place_issue=$request->place_issue;
        $issuer=$request->issuer;
        $version_ststus=$request->version_ststus;
        $activity=$request->activity;
        $branch_nameAR=$request->branch_nameAR;

        $request->validate([
          'files' => 'required',
        ]);

        if ($request->hasfile('files')) {
            $files = $request->file('files');
            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $path = $file->storeAs('public/img/licenses', $name);

                sys_Licenses::create([

                    'licenses_number'=> $licenses_number,
                    'licenses_name'=> $licenses_name,
                    'date_release'=> $date_release,
                    'date_Expiry'=> $date_Expiry,
                    'date_renewal'=> $date_renewal,
                    'place_issue'=> $place_issue,
                    'issuer'=> $issuer,
                    'version_ststus'=> $version_ststus,
                    'activity'=> $activity,
                    'branch_nameAR'=> $branch_nameAR,
                    'path' =>  $path
                  ]);
            }
         }


        return back()->with('success', 'تم الاضافة بنجاح');
    }
    public function show()
    {

        $sys_branch=sys_branch::orderBy('branch_id' , 'DESC')->paginate(6);
      $sys_Licenses=sys_Licenses::orderBy('licenses_id' , 'DESC')->paginate(6);
       $sys_Type_licenses=sys_Type_licenses::orderBy('type_licenses_id' , 'DESC')->paginate(6);
       return view('company.part2.license' ,compact('sys_Type_licenses','sys_Licenses','sys_branch'));

    }
    public function distory($licenses_id)
    {

        $sys_Licenses = sys_Licenses::where('licenses_id','=',$licenses_id);
        $sys_Licenses->delete();
        return back()->with('error','تم الحذف بنجاج');



    }
}
