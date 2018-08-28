<?php

namespace App\Http\Controllers;


use App\Companies;
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
use App\UsersCompanies;
use File;
use Intervention\Image\ImageManagerStatic as Image;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//     public function index(Request $request)
//    {
//        $request->session()->forget('complete_step');
//        $request->session()->flush();
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
        $company_user_info = $request->session()->get('company_user_info');
        $categories =  Users_Category::orderBy('category_name','ASC')->get();
        $countries =  Countries::where('name','<>','')->orderBy('name','ASC')->get();
        $data['step']= 1 ;
        $data['complete_step'] = $complete_step;
        return view('front_end.register',compact('categories','countries','company_info','company_user_info'),$data);

//         $data = "[{\"pk_users_legal_status_id\":1,\"orderby\":1,\"title_en\":\"LLC\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"2014-05-06 00:00:00\"},{\"pk_users_legal_status_id\":2,\"orderby\":2,\"title_en\":\"Service Agency\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"2014-05-06 00:00:00\"},{\"pk_users_legal_status_id\":3,\"orderby\":3,\"title_en\":\"FZE\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"2014-08-28 15:06:26\"},{\"pk_users_legal_status_id\":4,\"orderby\":4,\"title_en\":\"Group\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"2015-01-08 13:49:22\"},{\"pk_users_legal_status_id\":5,\"orderby\":5,\"title_en\":\"FZ-LLC\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"2015-01-28 11:24:06\"},{\"pk_users_legal_status_id\":6,\"orderby\":6,\"title_en\":\"Civil company\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"2015-02-24 12:14:04\"},{\"pk_users_legal_status_id\":7,\"orderby\":7,\"title_en\":\"Partnership Company\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"2015-03-05 14:18:27\"},{\"pk_users_legal_status_id\":8,\"orderby\":8,\"title_en\":\"Foreign Recognized Company\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"2015-03-15 16:58:42\"},{\"pk_users_legal_status_id\":9,\"orderby\":9,\"title_en\":\"Private Joint Stock Company\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"2017-12-19 00:00:00\"},{\"pk_users_legal_status_id\":10,\"orderby\":10,\"title_en\":\"Public Joint Stock Company\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"2017-12-19 00:00:12\"},{\"pk_users_legal_status_id\":11,\"orderby\":11,\"title_en\":\"Holding Company\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"2017-12-19 06:14:15\"},{\"pk_users_legal_status_id\":12,\"orderby\":12,\"title_en\":\"Sole Proprietorship\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"0000-00-00 00:00:00\"},{\"pk_users_legal_status_id\":13,\"orderby\":13,\"title_en\":\"Professional Trade Licence\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"0000-00-00 00:00:00\"},{\"pk_users_legal_status_id\":14,\"orderby\":14,\"title_en\":\"Professional Freelance Licence\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"0000-00-00 00:00:00\"},{\"pk_users_legal_status_id\":15,\"orderby\":15,\"title_en\":\"LLP\",\"description_en\":\"\",\"is_active\":\"Y\",\"added_date\":\"0000-00-00 00:00:00\"}]";
//         $data = json_decode($data, true);
//         for($i= 0; $i < count($data) ; $i++){
//             echo "[";
//             foreach ($data[$i] as $key => $value){
//                 if($key != "added_date"){
//                 echo ' "'.$key.'" => "'. $value . '",';
//                 }
//             }
//             echo "],";
//         }

    }


     public function insert_company(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|min:4',
            'company_category' => 'required',
            'company_activity' => 'required',
            'company_email' => 'required|email',
            'company_mobile' => 'required',
            'company_phone' => 'required',

            'company_user_first_name' => 'required|min:2',
            'company_user_last_name' => 'required',
            'company_user_gender' => 'required',
            'company_user_designation' => 'required',
            'company_user_dob' => 'required',
            'company_user_mobile' => 'required|unique:tbl_users,mobile',
            'company_user_phone' => 'required',
            'company_user_nationality' => 'required',
            'company_user_email' => 'required|email|confirmed|unique:tbl_users,email',
            'company_user_email_confirmation' => 'required|email',
            'company_user_password' => 'required|confirmed',
            'company_user_password_confirmation' => 'required'
        ]);
        $company_data['name'] = $request->input('company_name');
        $company_data['category'] = $request->input('company_category');
        $company_data['activity'] = $request->input('company_activity');
        $company_data['email'] = $request->input('company_email');
        $company_data['mobile'] = $request->input('company_mobile');
        $company_data['phone'] = $request->input('company_phone');
        $company_logo = $this->isUploadProfile($request,'company_logo');
        $company_data['profile_image'] = storage_path('app/upload/profile/'.$company_logo);


        $user_data['first_name'] = $request->input('company_user_first_name');
        $user_data['last_name'] = $request->input('company_user_last_name');
        $user_data['designation'] = $request->input('company_user_designation');
        $user_data['gender'] = $request->input('company_user_gender');
        $user_data['birthday'] = $request->input('company_user_dob');
        $user_data['mobile'] = $request->input('company_user_mobile');
        $user_data['phone'] = $request->input('company_user_phone');
        $user_data['nationality'] = $request->input('company_user_nationality');
        $user_data['email'] = $request->input('company_user_email');
        $user_data['password'] = $request->input('company_user_password');



        $user_image = $this->isUploadProfile($request,'company_user_image');
        $user_data['profile_image'] = storage_path('app/upload/profile/sm/'.$user_image);
                $request->session()->put('company_info',$company_data);
                $request->session()->put('company_user_info',$user_data);
                $request->session()->put('complete_step',1);
            return Redirect::to('register/licence')->withInput();
    }






     public function licence(Request $request)
    {
        $complete_step = $request->session()->get('complete_step');
        $licence_info = $request->session()->get('licence_info');
        $company_info = $request->session()->get('company_info');
        if ($complete_step < 1 ){
            return Redirect::to('register')->withInput();
        }else{
            $legalstatus=   Users_Legal_Status::where('title_en','<>','')->orderBy('title_en')->get();
            $data['step']=2;
            $data['complete_step'] = $complete_step;
            return view('front_end.register',compact('legalstatus','company_info','licence_info'),$data);
        }
    }
     public function insert_licence(Request $request)
    {
        $validatedData = $request->validate([
            'licence_legal_status' => 'required',
            'license_number' => 'required',
            'license_registration_number' => 'required'
        ]);
        $licence_data['legal_status'] = $request->input('licence_legal_status');
        $licence_data['license_number'] = $request->input('license_number');
        $licence_data['registration_number'] = $request->input('license_registration_number');
        $request->session()->put('licence_info',$licence_data);
        $request->session()->put('complete_step',2);
        return Redirect::to('register/location')->withInput();
    }





     public function location(Request $request)
    {
        $complete_step =$request->session()->get('complete_step');
        $company_info = $request->session()->get('company_info');
        $location_info = $request->session()->get('location_info');
        if ($complete_step < 2 ){
            return Redirect::to('register/licence')->withInput();
        }else{
            $request->session()->put('complete_step',2);
            $countries =  Countries::where('name','<>','')->orderBy('name','ASC')->get();
            $data['step']=3;
            $data['complete_step'] = $complete_step;
            return view('front_end.register',compact('countries','company_info','location_info'),$data);
        }

    }

     public function insert_location(Request $request)
    {
        $validatedData = $request->validate([
        'location_fk_country_id' => 'required',
        'location_fk_city_id' => 'required',
        'location_address' => 'required',
        'location_latitude' => 'required',
        'location_longitude' => 'required'
     ]);
        $location_data['fk_country_id'] = $request->input('location_fk_country_id');
        $location_data['fk_city_id'] = $request->input('location_fk_city_id');
        $location_data['fk_area_id'] = $request->input('location_fk_area_id');
        $location_data['pobox'] = $request->input('location_pobox');
        $location_data['location_email'] = $request->input('location_email');
        $location_data['location_phone'] = $request->input('location_phone');
        $location_data['location_mobile'] = $request->input('location_mobile');
        $location_data['street'] = $request->input('location_street');
        $location_data['address'] = $request->input('location_address');

        $location_data['latitude'] = $request->input('location_latitude');
        $location_data['longitude'] = $request->input('location_longitude');


    $request->session()->put('location_info',$location_data);
    $request->session()->put('complete_step',3);
    return Redirect::to('register/qregister')->withInput();
    }

     public function qregister(Request $request)
    {
        $company_info = $request->session()->get('company_info');
        $complete_step =$request->session()->get('complete_step');
        if ($complete_step < 3 ){
            return Redirect::to('register/location')->withInput();
        }else{
            $data['step']= 4 ;
            $data['complete_step'] = $complete_step;
            $data['company_info'] = $company_info;
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
        $newname= time().'-'.$request->input('name').'.png';

        if($request->hasFile($image)) {
            $path= $request->file($image)->storeAs('upload/profile',$newname);
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
