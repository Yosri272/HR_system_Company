<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\company\users;
use App\company\sys_qualification;
use DB;
class testController extends Controller
{
    public function show(Request $request)
    {

        $users = DB::table('users')->get();
        return view('dynamic' ,compact('users'));
     }
     public function showw(Request $request)
     {

        $sys_qualification=sys_qualification::orderBy('qualification_id' , 'DESC')->paginate(6);
         return view('dynamic',compact('sys_qualification'));
      }
     public function GetSubCatAgainstMainCatEdit($branch_nameAR){
        echo json_encode(DB::table('users')->where('branch_nameAR', $branch_nameAR)->get());


    }
    public function GetSubCatAgainstMainCatEdit1($dept_name){

        echo json_encode(DB::table('users')->where('dept_name', $dept_name)->get());


    }
    public function GetSubCatAgainstMainCatEdit2($emply_nameAR){
        echo json_encode(DB::table('users')->where('emply_nameAR', $emply_nameAR)->get());


    }

    public function update(Request $request, $languages_id){

        $update= sys_languages::find($languages_id);
        $update->languages_name = $request->languages_name;


        $update->save();
        return redirect()->route('testt')->with('success','تم التعديل بنجاح');


}
public function distory($qualification_id)
    {

        $sys_qualification = sys_qualification::where('qualification_id','=',$qualification_id);
        $sys_qualification->delete();
        return back();



    }

}
