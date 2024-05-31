<?php

namespace App\Http\Controllers\company\part1;
use App\company\users;
use App\company\sys_emply_doc;
use App\company\sys_qualification;
use App\company\sys_specialties;
use App\company\sys_emply_doc_types;
use App\company\sys_evidence;
use App\company\sys_socialseurities;
use App\company\sys_qualificationemply;
use App\Http\Controllers\Controller;
use App\company\sys_courses;
use App\company\sys_jop;
use App\company\sys_healthinsurances;
use App\company\sys_employeedep;
use App\company\sys_nationality;
use App\company\sys_experiences;
use Illuminate\Http\Request;
class employeesController extends Controller
{
    public function show()
    {
        $sys_jop = sys_jop::all();
        $sys_qualification = sys_qualification::all();
        $sys_nationality = sys_nationality::all();
        $sys_specialties = sys_specialties::all();
        $sys_experiences=sys_experiences::orderBy('experiences_id' , 'DESC')->paginate(6);
        $sys_courses=sys_courses::orderBy('courses_id' , 'DESC')->paginate(6);
        $sys_employeedeps=sys_employeedep::orderBy('employeedep_id' , 'DESC')->paginate(6);
        $sys_emply_doc_type=sys_emply_doc_types::orderBy('doc_type_id' , 'DESC')->paginate(6);
        $users=users::orderBy('emply_id' , 'DESC')->paginate(6);
       $sys_emply_doc=sys_emply_doc::orderBy('doc_id' , 'DESC')->paginate(6);
       $sys_evidence=sys_evidence::orderBy('serial_number' , 'DESC')->paginate(6);
       $sys_socialseurities=sys_socialseurities::orderBy('subscription_id' , 'DESC')->paginate(6);
       $sys_qualificationemply=sys_qualificationemply::orderBy('qualification_id' , 'DESC')->paginate(6);
       $sys_healthinsurances=sys_healthinsurances::orderBy('inscard_id' , 'DESC')->paginate(6);
        return view('company.part1.employees' ,compact('users','sys_emply_doc','sys_emply_doc_type','sys_evidence','sys_socialseurities','sys_healthinsurances','sys_qualificationemply','sys_qualification','sys_specialties','sys_courses','sys_jop','sys_employeedeps','sys_nationality','sys_experiences'));

    }
    public function GetSubCatAgainstMainCatEdit($branch_nameAR){
        echo json_encode(DB::table('users')->where('branch_nameAR', $branch_nameAR)->get());


    }
    public function GetSubCatAgainstMainCatEdit1($dept_name){
        echo json_encode(DB::table('users')->where('dept_name', $dept_name)->get());


    }
}
