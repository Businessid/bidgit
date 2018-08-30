<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Countries;
use App\Users;
use App\UsersCompanies;
use File;
use Intervention\Image\ImageManagerStatic as Image;

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
            'users.*.user_first_name' => 'required',
            'users.*.user_last_name' => 'required',
            'users.*.user_gender' => 'required',
            'users.*.user_designation' => 'required',
            'users.*.user_dob' => 'required',
            'users.*.user_mobile' => 'required',
            'users.*.user_nationality' => 'required',
            'users.*.user_email' => 'required',
            'users.*.user_password' => 'required'
        ]);
        $profile_image = $request->file('users.*.user_userimage');
        $first_name = $request->input('users.*.user_last_name');
        $last_name = $request->input('users.*.user_last_name');
        $gender = $request->input('users.*.user_gender');
        $designation = $request->input('users.*.user_designation');
        $birth_year = $request->input('users.*.user_dob');
        $mobile = $request->input('users.*.user_mobile');
        $phone = $request->input('users.*.user_phone');
        $nationality = $request->input('users.*.user_nationality');
        $email = $request->input('users.*.user_email');
        $password = $request->input('users.*.user_password');
        $status = $request->input('users.*.auth_type');

        $permission_ecommerce = $request->input('users.*.auth_ecommerce');
        $permission_social = $request->input('users.*.auth_social');

        $records=count($first_name);
        for ($i=0; $i < $records ; $i++) { 
        	$data['first_name']=$first_name[$i];
        	$data['last_name']=$last_name[$i];
        	$data['gender']=$gender[$i];
        	$data['designation']=$designation[$i];
        	$data['mobile']=$mobile[$i];
        	$data['phone']=$phone[$i];
        	$data['nationality']=$nationality[$i];
        	$data['email']=$email[$i];
        	$data['password']=md5($password[$i]);
        	$data['status']=$status[$i];
        	$profile = $this->isUploadProfile($request,$i);
            $data['profile_image'] = storage_path('app/upload/profile/'.$profile);
            $Users = new Users();
            $Users->fill($data);
            $result = $Users->save();
        	if($result){
                $LastInsertId = $Users->id;
	        	$permissions=array();
	        	$array_1=$permission_ecommerce[$i];
	        	$array_2=$permission_social[$i];
	        	$permissions=array_merge($array_1,$array_2);
	        	$permission['fk_users_id']=$LastInsertId;
                $pk_companies_id = "1";  // $request->session()->get('$pk_companies_id');
	        	$permission['fk_companies_id']=$pk_companies_id;
	        	$permission['creator']= "0";
	        	$permission['permissions']=json_encode($permissions);
                $UsersCompanies = new UsersCompanies();
                $UsersCompanies->fill($permission);
                $UsersCompanies->save();

        	}



        }
        return redirect('register/owners');
    }

    	public function owners(Request $request)
    {   $countries =  Countries::where('name','<>','')->orderBy('name','ASC')->get();
        $data['step']=6;
        return view('front_end.more_register',compact('countries'),$data);
    }

    	public function insert_owners(Request $request)
    {
        $validatedData = $request->validate([
            'owners.*.owners_name' => 'required',
            'owners.*.owners_type' => 'required',
            'owners.*.owners_nationality' => 'required',
            'owners.*.owners_mobile' => 'required',
            'owners.*.owners_email' => 'required'
        ]);
        echo "okkk"; die;
        $owners_name = $request->input('owners.*.owners_name');
        $owners_type = $request->input('owners.*.owners_type');
        $owners_share = $request->input('owners.*.owners_share');
        $owners_nationality = $request->input('owners.*.owners_nationality');
        $owners_mobile = $request->input('owners.*.owners_mobile');
        $owners_email = $request->input('owners.*.owners_email');
        $owners_id_no = $request->input('owners.*.owners_id_no');
        $owners_image = $request->file('owners.*.owners_image');

        $records=count($owners_name);
        for ($i=0; $i < $records ; $i++) { 
        	$pk_companies_id = "1"; // $request->session()->get('$pk_companies_id');
        	$data['fk_companies_id']=$pk_companies_id;
        	$data['full_name']=$owners_name[$i];
        	$data['type']=$owners_type[$i];
        	$data['percentage_of_share']=$owners_share[$i];
        	$data['nationality']=$owners_nationality[$i];
        	$data['mobile']=$owners_mobile[$i];
        	$data['email']=$owners_email[$i];
        	$data['id_no']=$owners_id_no[$i];
        	$ID = $this->isUploadID($request,$i);
            $data['id_image'] = storage_path('app/upload/ID/'.$ID);
            print_r($data); die;
            $CompanyOwners = new CompanyOwners();
            $CompanyOwners->fill($data);
            $result = $CompanyOwners->save();
        }
        return redirect('register/branches');
    }

    	public function branches(Request $request)
    {   $countries =  Countries::where('name','<>','')->orderBy('name','ASC')->get();
        $data['step']=7;
        return view('front_end.more_register',compact('countries'),$data);
    }

    	public function authoriszation(Request $request)
    {
        $data['email']  = $request->username;
		$data['password']   = md5($request->password);
		$user = Users::where($data)->get();
		$count = $user->count();
		if($count > 0){
			echo "true";
		}else{
			echo "false";
		}

    }
    public function isUploadProfile($request, $i)
    {
    	$image = 'users.'.$i.'.user_userimage';
        $SM_Path = storage_path('app/upload/profile/sm/');
        $MD_Path = storage_path('app/upload/profile/md/');
        File::isDirectory($SM_Path) or File::makeDirectory($SM_Path, 0777, true, true);
        File::isDirectory($MD_Path) or File::makeDirectory($MD_Path, 0777, true, true);
        $newname = time() . '-' . $request->input('users.'.$i.'.user_first_name') . '.png';

        if ($request->hasFile($image)) {
            $path = $request->file($image)->storeAs('upload/profile', $newname);
            $image_sm = Image::make(storage_path('app/upload/profile/' . $newname));
            $image_sm->resize(150, 150);            //$image_sm->crop(300, 300, 300, 300);
            $image_sm->save(storage_path('app/upload/profile/sm/' . $newname));
            $image_md = Image::make(storage_path('app/upload/profile/' . $newname));
            $image_md->resize(400, 400);
            $image_md->save(storage_path('app/upload/profile/md/' . $newname));
        }
        return $newname;
    }
    public function isUploadID($request, $i)
    {
    	$image = 'braches.'.$i.'.branches_file';
        $ID_Path = storage_path('app/upload/ID/');
        File::isDirectory($ID_Path) or File::makeDirectory($ID_Path, 0777, true, true);

        $newname = time() . '-' . $request->input('braches.'.$i.'.branches_name') . '.png';

        if ($request->hasFile($image)) {
            $path = $request->file($image)->storeAs('upload/profile', $newname);
        }
        return $newname;
    }

}
