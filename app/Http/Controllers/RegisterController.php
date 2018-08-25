<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Users_Category;
use App\Countries;
use App\Users_Legal_Status;
use App\Users;
use App\Users_Activities;
use File;
use Intervention\Image\ImageManagerStatic as Image;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//     public function index(Request $request)
//    {
////        $request->session()->forget('complete_step');
////        $request->session()->flush();
//         $complete_step = $request->session()->get('complete_step');
//         $company_info = $request->session()->get('company_info');
//         $categories =  Users_Category::orderBy('category_name','ASC')->get();
//         $countries =  Countries::where('name','<>','')->orderBy('name','ASC')->get();
//         $data['step']=1;
//         $data['complete_step'] = $complete_step;
//         return view('front_end.register',compact('categories','countries'),$data);
//    }
    
     public function company(Request $request)
    {
        $complete_step = $request->session()->get('complete_step');
        $company_info = $request->session()->get('company_info');
        $categories =  Users_Category::orderBy('category_name','ASC')->get();
        $countries =  Countries::where('name','<>','')->orderBy('name','ASC')->get();
        $data['step']=1;
        $data['complete_step'] = $complete_step;
        return view('front_end.register',compact('categories','countries','company_info'),$data);
    }


     public function insert_company(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'category' => 'required',
            'activity' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'phone' => 'required',
            'company_first_name' => 'required|min:2',
            'company_last_name' => 'required',
            'company_designation' => 'required',
            'company_gender' => 'required',
            'company_designation' => 'required',
            'company_dob' => 'required',
            'company_mobile' => 'required|unique:tbl_users,mobile',
            'company_phone' => 'required',
            'company_nationality' => 'required',
            'company_email' => 'required|email|confirmed|unique:tbl_users,email',
            'company_email_confirmation' => 'required|email',
            'company_password' => 'required|confirmed',
            'company_password_confirmation' => 'required'  
        ]);
                $data['name'] = $request->input('name');
                $data['category'] = $request->input('category');
                $data['activity'] = $request->input('activity');
                $data['company_email'] = $request->input('email');
                $data['company_mobile'] = $request->input('phone');
                $data['company_phone'] = $request->input('phone');
                $data['first_name'] = $request->input('company_first_name');
                $data['last_name'] = $request->input('company_last_name');
                $data['designation'] = $request->input('company_designation');
                $data['gender'] = $request->input('company_gender');
                $data['birthday'] = $request->input('company_dob');
                $data['mobile'] = $request->input('company_mobile');
                $data['phone'] = $request->input('company_phone');
                $data['nationality'] = $request->input('company_nationality');
                $data['email'] = $request->input('company_email');
                $data['password'] = $request->input('company_password');
                $image = $this->isUploadProfile($request,'company_userimage');
                $data['profile_small'] = storage_path('app/upload/profile/sm/'.$image);
                $data['profile_medium'] = storage_path('app/upload/profile/md/'.$image);
                $data['profile_original'] = storage_path('app/upload/profile/'.$image);
                $request->session()->put('company_info',$data);
                $request->session()->put('complete_step',1);
            return Redirect::to('register/licence')->withInput();
    }


     public function licence(Request $request)
    {
        $complete_step = $request->session()->get('complete_step');
        $licence_info = $request->session()->get('licence_info');
        if ($complete_step < 1 ){
            return Redirect::to('register')->withInput();
        }else{
            $legalstatus=   Users_Legal_Status::where('title_en','<>','')->orderBy('title_en')->get();
            $data['step']=2;
            $data['complete_step'] = $complete_step;
            return view('front_end.register',compact('legalstatus','licence_info'),$data);
        }




    }
     public function insert_licence(Request $request)
    {
        $validatedData = $request->validate([
            'legal_status' => 'required',
            'license_number' => 'required',
            'registration_number' => 'required'
        ]);
        $data['legal_status'] = $request->input('legal_status');
        $data['license_number'] = $request->input('license_number');
        $data['registration_number'] = $request->input('registration_number');
        $request->session()->put('licence_info',$data);
        $request->session()->put('complete_step',2);
        return Redirect::to('register/location')->withInput();
    }



     public function location(Request $request)
    {
        $complete_step =$request->session()->get('complete_step');
        $location_info = $request->session()->get('location_info');
        if ($complete_step < 2 ){
            return Redirect::to('register/licence')->withInput();
        }else{
            $request->session()->put('complete_step',2);
            $countries =  Countries::where('name','<>','')->orderBy('name','ASC')->get();
            $data['step']=3;
            $data['complete_step'] = $complete_step;
            return view('front_end.register',compact('countries','location_info'),$data);
        }

    }

     public function insert_location(Request $request)
    {
        $validatedData = $request->validate([
        'fk_country_id' => 'required',
        'fk_city_id' => 'required',
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
    $data['street'] = $request->input('street');
    $data['latitude'] = $request->input('latitude');
    $data['longitude'] = $request->input('longitude');
    $request->session()->put('location_info',$data);
    $request->session()->put('complete_step',3);
    return Redirect::to('register/qregister')->withInput();
    }

     public function qregister(Request $request)
    {
        $complete_step =$request->session()->get('complete_step');
        if ($complete_step < 3 ){
            return Redirect::to('register/location')->withInput();
        }else{
            $data['step']= 4 ;
            $data['complete_step'] = $complete_step;
            return view('front_end.register',$data);
        }

    } 
     public function insert_qregister(Request $request)
    {
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

        $user =new Users();
        $user->fill( $dataArr);
        $result = $user->save();

        if($result){
            $request->session()->put('complete_step',4);
           $data['step']="6";
           return view('front_end.register',$data); 
        }else{
           return redirect('register');
        }
    }






    public function selectActivities(Request $request)
    {
    	if($request->ajax()){
            $activities =  Users_Activities::where('fk_users_category_id',$request->category)->get();
    			$data = '';
			if(!empty($activities)){
    		foreach($activities as $value){
            $selected="";
            if($request->activity){
            if($request->activity == $value->fk_users_category_id) {
            $selected = "selected"; 
            }
            }
    		$data .= '<option value="'.$value->fk_users_category_id.'" '.@$selected.'>'.$value->title.'</option>';
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

    public function getCurrentCountry(Request $request)
    {
        if($request->ajax()){
            $countries = DB::table('tbl_countries')->where('name','<>','')->orderBy('name')->pluck("name","pk_countries_id")->all();
            $data = '<option value="">Select Country</option> ';
            if(!empty($countries)){
                foreach($countries as $key => $value){
                $selected="";
                if($request->country){
                if($request->country==$value) {
                $selected = "selected"; 
                $pk_countries_id=$key;
                }
                }
                $data .= '<option value="'.$key.'" '.@$selected.'>'.$value.'</option>';
                }
            }
            return response()->json(['options'=>$data,'pk_countries_id'=>$pk_countries_id]);
        }
    }
    public function getCurrentCity(Request $request)
    {
       if($request->ajax()){
            $cities = DB::table('tbl_countries')->where('parent_id',$request->fk_country_id)->pluck("location","pk_countries_id")->all();
            $data = '<option value="">Select City</option> ';
            if(!empty($cities)){
                foreach($cities as $key => $value){
                    $selected="";
                    if($request->fk_city_id){
                    if($request->fk_city_id==$value){
                    $selected = "selected";
                    $fk_city_id= $key;
                    }
                    }
                    $data .= '<option value="'.$key.'" '.@$selected.'>'.$value.'</option>';
                }
            }           
            return response()->json(['options'=>$data,'fk_city_id'=>$fk_city_id]);
        }
    }
    public function getCurrentArea(Request $request)
    {
       if($request->ajax()){
            $area = DB::table('tbl_countries')->where('parent_id',$request->fk_city_id)->pluck("location","pk_countries_id")->all();
            $data = '<option value="">Select Area</option> ';
            if(!empty($area)){
            foreach($area as $key => $value){
            $selected="";
            if($request->fk_area_id){
            if($request->fk_area_id==$value) {
            $selected = "selected"; 
            }
            }
            $data .= '<option value="'.$key.'" '.@$selected.'>'.$value.'</option>';
            }
            }           
            return response()->json(['options'=>$data]);
        }
    }

    public function isUploadProfile($request,$image)
    {
        $SM_Path = storage_path('app/upload/profile/sm/');
        $MD_Path = storage_path('app/upload/profile/md/');
        File::isDirectory($SM_Path) or File::makeDirectory($SM_Path, 0777, true, true);
        File::isDirectory($MD_Path) or File::makeDirectory($MD_Path, 0777, true, true);
        $newname=time().'-'.$request->input('name').'.png';
        $path=$request->file($image)->storeAs('upload/profile',$newname);
        if($request->hasFile($image)) {
            $image_sm = Image::make(storage_path('app/upload/profile/'.$newname));          
            $image_sm->resize(150,150);            //$image_sm->crop(300, 300, 300, 300);
            $image_sm->save(storage_path('app/upload/profile/sm/'.$newname));
            $image_md = Image::make(storage_path('app/upload/profile/'.$newname));          
            $image_md->resize(400,400);
            $image_md->save(storage_path('app/upload/profile/md/'.$newname));
        }
        return $newname;
    }

    
}
