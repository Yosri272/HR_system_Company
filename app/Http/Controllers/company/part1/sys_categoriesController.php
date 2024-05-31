<?php

namespace App\Http\Controllers\company\part1;
use App\company\sys_jopdegree;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\company\sys_categories;
class sys_categoriesController extends Controller
{
    public function Stort( Request $request)
{

  $sys_categories= new sys_categories;
  $sys_categories->category_Name = $request->category_Name;
  $sys_categories->save();
  return back()->with('success','تم الاضافة بنجاح');


}

public function show()
{


  
   $sys_categories=sys_categories::orderBy('category_id' , 'DESC')->paginate(6);
    return view('company.part1.categories' ,compact('sys_categories'));

}
public function distory($category_id)
{

    $sys_categories = sys_categories::where('category_id','=',$category_id);
    $sys_categories->delete();
    return back()->with('error','تم الحذف بنجاج');
}

public function display($category_id)
{




    $a_viewData = sys_categories::all()->where('category_id','=',$category_id);
    foreach($a_viewData as $data)

    {

        $val=$data->category_Name;
    
     $sys_jopdegree= sys_jopdegree::all()->where('jop_category','=',$val);
     $sys_jopdegreee=sys_jopdegree::orderBy('jopdegree_id' , 'DESC')->paginate(6);
      
    }
    
    return view('display.part1.view-category' ,compact('a_viewData','sys_jopdegree','sys_jopdegreee'));

}
}
