<?php

namespace App\Http\Controllers\company\part2;
use App\company\sys_contractitem;
use App\company\sys_contracttype;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sys_contractsController extends Controller
{
    public function show()
    {
       $sys_contractitem=sys_contractitem::orderBy('contractitem_id' , 'DESC')->paginate(6);
       $sys_contracttype=sys_contracttype::orderBy('contracttype_id' , 'DESC')->paginate(6);
       return view('company.part.contracts',compact('sys_contracttype','sys_contractitem'));


    }

}
