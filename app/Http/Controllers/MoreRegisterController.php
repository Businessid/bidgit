<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Countries;

class MoreRegisterController extends Controller
{
    	public function users(Request $request)
    {   $countries =  Countries::where('name','<>','')->orderBy('name','ASC')->get();
        $data['step']=5;
        $data['complete_step'] = 5;
        return view('front_end.more_register',compact('countries'),$data);
    }
    	public function insert_users(Request $request)
    { 
        $validatedData = $request->validate([
            'user_first_name' => 'required'
        ]);
        $name=$request->input('user_first_name');
        print_r($name);die;
    }
}
