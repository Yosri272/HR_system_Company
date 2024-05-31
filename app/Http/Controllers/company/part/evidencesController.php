<?php

namespace App\Http\Controllers\company\part;
use App\company\sys_evidence;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class evidencesController extends Controller
{
    public function store(Request $request)
    {
        //$namelabl1=$request->name;

        $emply_nameAR=$request->emply_nameAR;
        $branch_nameAR=$request->branch_nameAR;
        $dept_name=$request->dept_name;
        $proof_number=$request->proof_number;
        $proof_type=$request->proof_type;
        $date_release=$request->date_release;
        $issuer=$request->issuer;
        $country=$request->country;
        $date_expiry=$request->date_expiry;
        $guarantor=$request->guarantor;
        $phone_guarantor=$request->phone_guarantor;
        $phone_offwork=$request->phone_offwork;
        $note=$request->note;
        $request->validate([
          'files' => 'required',
        ]);

        if ($request->hasfile('files')) {
            $files = $request->file('files');
            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $path = $file->storeAs('public/img/evidence', $name);

                sys_evidence::create([


                    'emply_nameAR' => $emply_nameAR,
                    'branch_nameAR'=> $branch_nameAR,
                    'dept_name'=> $dept_name,
                    'proof_number'=> $proof_number,
                    'proof_type'=> $proof_type,
                    'date_release'=> $date_release,
                    'issuer'=> $issuer,
                    'country'=> $country,
                    'date_expiry'=> $date_expiry,
                    'guarantor'=> $guarantor,
                    'phone_guarantor'=> $phone_guarantor,
                    'phone_offwork'=> $phone_offwork,
                    'note'=> $note,
                    'path' =>  $path
                  ]);
            }
         }


        return back()->with('success', 'تم الاضافة بنجاح');
    }
    public function display()
{


    return view('display.part.view-employee-proofs');

}
}
