<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function index()
    {
    	$categories = DB::table('tbl_users_category')->orderBy('category_name')->pluck("category_name","pk_users_category_id")->all();
        return view('front_end.register',compact('categories'));
    }
    
     public function post(Request $request)
    {
       $validatedData = $request->validate([
        'name' => 'required|min:8',
        'category' => 'required',
        'activity' => 'required',
        'company_email' => 'required|email',
        'company_mobile' => 'required',
         'user_first_name' => 'required',
         'last_name' => 'required',
         'mobile' => 'required',
         'designation' => 'required',
         'email' => 'required|email|confirmed',
         'email_confirmation' => 'required|email',
         'password' => 'required|confirmed',
         'password_confirmation' => 'required',
     ]);

    $name = $request->input('name');
    $category = $request->input('category');
    $activity = $request->input('activity');
    $company_email = $request->input('company_email');
    $company_mobile = $request->input('company_mobile');
    $user_first_name = $request->input('user_first_name');
    $last_name = $request->input('last_name');
    $mobile = $request->input('mobile');
    $designation = $request->input('designation');
    $password = $request->input('password');
    $email = $request->input('email');
    $data=array('user_type'=>'company','name'=>$name,"category"=>$category,"activity"=>$activity,"company_email"=>$company_email,"company_mobile"=>$company_mobile,"first_name"=>$user_first_name,"last_name"=>$last_name,"mobile"=>$mobile,"designation"=>$designation,"email"=>$email,"password"=>$password);
    $result =DB::table('tbl_users')->insert($data);
    //DB::enableQueryLog();
    if($result){
     $data['step']="1";
     
     return view('front_end.register',$data); 
    }else{
        echo "false";
    }
    die;
    } 
    public function selectActivities(Request $request)
    {
    	if($request->ajax()){
    		$activities = DB::table('tbl_users_activities')->where('fk_users_category_id',$request->category)->pluck("title","pk_users_activities_id")->all();
    		$data = '<option>--- Select Activities ---</option>';
			if(!empty($activities)){
    		foreach($activities as $key => $value){
    		$data .= '<option value="'.$key.'">'.$value.'</option>';
  			}
			}			
    		return response()->json(['options'=>$data]);
    	}
    }
}
