<?php

namespace App\Http\Controllers\company\part;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\company\sys_experiences;
class sys_experiencesController extends Controller
{

    public function store(Request $request)
    {
        //$namelabl1=$request->name;

        $emply_nameAR=$request->emply_nameAR;
        $branch_nameAR=$request->branch_nameAR;
        $dept_name=$request->dept_name;
        $experiences=$request->experiences;
        $jop_name=$request->jop_name;
        $location_job=$request->location_job;
        $date_start=$request->date_start;
        $date_end=$request->date_end;
        $finishing_work=$request->finishing_work;
        $emply_evaluation=$request->emply_evaluation;
        $request->validate([
          'files' => 'required',
        ]);

        if ($request->hasfile('files')) {
            $files = $request->file('files');
            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $path = $file->storeAs('public/img/evidence', $name);

                sys_experiences::create([


                    'emply_nameAR' => $emply_nameAR,
                    'branch_nameAR'=> $branch_nameAR,
                    'dept_name'=> $dept_name,
                    'experiences'=> $experiences,
                    'jop_name'=> $jop_name,
                    'location_job'=> $location_job,
                    'date_start'=> $date_start,
                    'date_end'=> $date_end,
                    'finishing_work'=> $finishing_work,
                    'emply_evaluation'=> $emply_evaluation,
                    'path' =>  $path
                  ]);
            }
         }


        return back()->with('success', 'تم الاضافة بنجاح');
    }

    public function display()
    {


        return view('display.part.view-employee-expe');

    }





}
