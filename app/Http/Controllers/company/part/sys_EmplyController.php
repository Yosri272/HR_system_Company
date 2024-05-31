<?php

namespace App\Http\Controllers\company\part;
use Illuminate\Support\Facades\Auth;
use App\company\sys_dept;
use App\company\sys_branch;
use App\company\users;
use App\company\sys_nationality;
use App\company\sys_bank;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_EmplyController extends Controller
{
    public function index()
    {
        $sys_dept=sys_dept::all();
        $sys_branch=sys_branch::all();
        $sys_nationality=sys_nationality::all();
        $sys_bank=sys_bank::all();
      return view('company.part1.add-employee',compact('sys_branch','sys_dept','sys_nationality','sys_bank'));


    }



    public function store(Request $request)
    {
        //$namelabl1=$request->name;
        $emply_nameAR=$request->emply_nameAR;
        $emply_NameEN =$request->emply_NameEN;
        $type=$request->type;
        $nationality=$request->nationality;
        $Social_status=$request->Social_status;
        $religion=$request->religion;
        $occupation=$request->occupation;
        $datebirth=$request->datebirth;
        $dateplace=$request->dateplace;
        //$picture=$request->picture;
        $shunt=$request->shunt;
        $phone_jop=$request->phone_jop;
        $email=$request->email;
        $phone_emerg=$request->phone_emerg;
        $phone_country=$request->phone_country;
        $empyaddress_home=$request->empyaddress_home;
        $empyaddress_KSA=$request->empyaddress_KSA;
        $guarantor=$request->guarantor;
        $empy_satus=$request->empy_satus;
        $number_bank=$request->number_bank;
        $IBAN=$request->IBAN;
        $Bank=$request->Bank;
        $branch_nameAR=$request->branch_nameAR;
        $dept_name=$request->dept_name;
        $guarantor='yosri';
        $empy_satus='halaby';
        $request->validate([
          'files' => 'required',
        ]);

        if ($request->hasfile('files')) {
            $files = $request->file('files');
            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $path =$file->move('img/Emply', $name);

                users::create([


                    'emply_nameAR'=>$emply_nameAR,
                    'emply_NameEN'=>$emply_NameEN,
                    'type'=>$type,
                    'nationality'=>$nationality,
                    'Social_status'=>$Social_status,
                    'religion'=>$religion,
                    'occupation' =>$occupation,
                    'datebirth' =>$datebirth,
                    'dateplace'=>$dateplace,
                    'shunt'=>$shunt,
                    'phone_jop'=>$phone_jop,
                    'email'=>$email,
                    'phone_emerg'=>$phone_emerg,
                    'phone_country'=>$phone_country,
                    'empyaddress_home'=>$empyaddress_home,
                    'empyaddress_KSA'=>$empyaddress_KSA,
                    'guarantor'=>$guarantor,
                    'empy_satus'=>$empy_satus,
                    'number_bank'=>$number_bank,
                    'IBAN'=>$IBAN,
                    'Bank'=>$Bank,
                    'branch_nameAR'=>$branch_nameAR,
                    'dept_name' =>$dept_name,
                    'guarantor' =>$guarantor,
                    'empy_satus'=>$empy_satus,
                    'path' =>  $name
                  ]);
            }
         }


        return back()->with('success', 'تم الاضافة بنجاح');
    }


    public function display()
{


    return view('display.part.view-employee');

}

public function yosri($emply_id)
{
   // $val=Auth::users()->emply_nameAR;
    //$data2=0;


$a_viewData = users::all()->where('emply_id','=',$emply_id);
//$topic= topic::all()->where('corrector','=',$val);
//dd($a_viewData);
return view('display.part.view-employee' ,compact('a_viewData'));
}

}
