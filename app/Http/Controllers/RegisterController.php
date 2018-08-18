<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function index()
    {
    	$categories = DB::table('tbl_users_category')->orderBy('category_name')->pluck("category_name","pk_users_category_id")->all();
        $countries = DB::table('tbl_countries')->where('name','<>','')->orderBy('name')->pluck("name","pk_countries_id")->all();
        $legalstatus = DB::table('tbl_users_legal_status')->where('title_en','<>','')->orderBy('title_en')->pluck("title_en","pk_users_legal_status_id")->all();
        $data['step']="1";
        return view('front_end.register',compact('categories','countries','legalstatus'),$data);
    }
    
     public function post(Request $request)
    {
       if($request->input('tab')=='company_info'){
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
    $data['name'] = $request->input('name');
    $data['category'] = $request->input('category');
    $data['activity'] = $request->input('activity');
    $data['company_email'] = $request->input('company_email');
    $data['company_mobile'] = $request->input('company_mobile');
    $data['user_first_name'] = $request->input('user_first_name');
    $data['last_name'] = $request->input('last_name');
    $data['mobile'] = $request->input('mobile');
    $data['designation'] = $request->input('designation');
    $data['password'] = $request->input('password');
    $data['email'] = $request->input('email');
    $request->session()->put('company_info',$data);
    $data['step']="2";
    return view('front_end.register',$data); die; 
    }

    if($request->input('tab')=='licence'){
         $validatedData = $request->validate([
        'legal_status' => 'required',
        'license_number' => 'required',
        'registration_number' => 'required'
     ]);
    $data['legal_status'] = $request->input('legal_status');
    $data['license_number'] = $request->input('license_number');
    $data['registration_number'] = $request->input('registration_number');
    $request->session()->put('licence_info',$data);
    $data['step']="3";
    return view('front_end.register',$data); die; 
    }

    if($request->input('tab')=='location'){
         $validatedData = $request->validate([
        'fk_country_id' => 'required',
        'fk_city_id' => 'required',
        'fk_area_id' => 'required',
        'pobox' => 'required',
        'address' => 'required',
        'latitude' => 'required',
        'longitude' => 'required'
     ]);
    $data['fk_country_id'] = $request->input('fk_country_id');
    $data['fk_city_id'] = $request->input('fk_city_id');
    $data['activity'] = $request->input('activity');
    $data['fk_area_id'] = $request->input('fk_area_id');
    $data['pobox'] = $request->input('pobox');
    $data['address'] = $request->input('address');
    $data['latitude'] = $request->input('latitude');
    $data['longitude'] = $request->input('longitude');
    $request->session()->put('location_info',$data);
    $data['step']="4";
    return view('front_end.register',$data); die; 
    }

    if($request->input('tab')=='register'){
        $now = date('Y-m-d H:i:s');
        $dataArr=Array();
        $company_info=$request->session()->get('company_info');
         $licence_info=$request->session()->get('licence_info');
          $location_info=$request->session()->get('location_info');
        $dataArr=array_merge($company_info,$licence_info,$location_info);
        $dataArr['user_type']='company';
        $dataArr['user_level']='admin';
        $dataArr['added_date']=$now;
        $dataArr['modified_date']=$now;
        $dataArr['status']=1;
        print_r($dataArr); die;
        
        $result =DB::table('tbl_users')->insert($dataArr);
        DB::enableQueryLog();
        if($result){
         $data['step']="5";
         return view('front_end.register',$data); 
        }else{
            return redirect('RegisterController');
        }
    }
   
    } 
    public function selectActivities(Request $request)
    {
    	if($request->ajax()){
    		$activities = DB::table('tbl_users_activities')->where('fk_users_category_id',$request->category)->pluck("title","pk_users_activities_id")->all();
    		$data = '';
			if(!empty($activities)){
    		foreach($activities as $key => $value){
            $selected="";
            if($request->activity){
            if($request->activity==$key) {
            $selected = "selected"; 
            }
            }
    		$data .= '<option value="'.$key.'" '.@$selected.'>'.$value.'</option>';
  			}
			}			
    		return response()->json(['options'=>$data]);
    	}
    }
    public function selectCities(Request $request)
    {
        if($request->ajax()){
            $cities = DB::table('tbl_countries')->where('parent_id',$request->fk_country_id)->pluck("location","pk_countries_id")->all();
            $data = '<option value="">Select City</option> ';
            if(!empty($cities)){
            foreach($cities as $key => $value){
            $selected="";
            if($request->fk_city_id){
            if($request->fk_city_id==$key) {
            $selected = "selected"; 
            }
            }
            $data .= '<option value="'.$key.'" '.@$selected.'>'.$value.'</option>';
            }
            }           
            return response()->json(['options'=>$data]);
        }
    }
    public function selectAreas(Request $request)
    {
        if($request->ajax()){
            $area = DB::table('tbl_countries')->where('parent_id',$request->fk_city_id)->pluck("location","pk_countries_id")->all();
            $data = '<option value="">Select Area</option> ';
            if(!empty($area)){
            foreach($area as $key => $value){
            $selected="";
            if($request->fk_area_id){
            if($request->fk_area_id==$key) {
            $selected = "selected"; 
            }
            }
            $data .= '<option value="'.$key.'" '.@$selected.'>'.$value.'</option>';
            }
            }           
            return response()->json(['options'=>$data]);
        }
    }
}
