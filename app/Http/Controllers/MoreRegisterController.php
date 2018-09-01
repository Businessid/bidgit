<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Countries;
use App\Users;
use App\UsersCompanies;
use App\CompanyOwners;
use App\CompanyBranches;
use App\Companies;
use File;
use Intervention\Image\ImageManagerStatic as Image;

class MoreRegisterController extends Controller
{
    public function users(Request $request)
    {
        $countries = Countries::where('name', '<>', '')->orderBy('name', 'ASC')->get();
        $data['step'] = 5;
        $data['complete_step'] = 5;
        return view('front_end.more_register', compact('countries'), $data);
    }


    public function insert_users(Request $request)
    {

        if (Session::has('pk_companies_id')) {
            $pk_companies_id = $request->session()->get('pk_companies_id');
        } else {
            return redirect('register/users')->withInput();
        }

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


        $LastInsertIdList = array();

        $records = count($first_name);
        for ($i = 0; $i < $records; $i++) {
            $data['first_name'] = $first_name[$i];
            $data['last_name'] = $last_name[$i];
            $data['gender'] = $gender[$i];
            $data['designation'] = $designation[$i];
            $data['mobile'] = $mobile[$i];
            $data['phone'] = $phone[$i];
            $data['nationality'] = $nationality[$i];
            $data['email'] = $email[$i];
            $data['password'] = md5($password[$i]);
            $data['status'] = $status[$i];
            $profile = $this->isUploadProfile($request, $i);
            $data['profile_image'] = storage_path('app/upload/profile/' . $profile);

            try {
                $Users = new Users();
                $Users->fill($data);
                $result = $Users->save();
                if ($result) {
                    $LastInsertId = $Users->id;
                    $LastInsertIdList[] = $LastInsertId;
                    $permissions = array();
                    $array_1 = $permission_ecommerce[$i];
                    $array_2 = $permission_social[$i];
                    $permissions = array_merge($array_1, $array_2);
                    $permissions = $this->GetPermissions($permissions);
                    $permission['fk_users_id'] = $LastInsertId;

                    $permission['fk_companies_id'] = $pk_companies_id;
                    $permission['creator'] = "0";
                    $permission['permissions'] = $permissions;
                    $UsersCompanies = new UsersCompanies();
                    $UsersCompanies->fill($permission);
                    $result = $UsersCompanies->save();
                    if(!$result){
                        $LastInsertIdCount = count($LastInsertIdList);

                        for ($x = 0; $x < $LastInsertIdCount; $x++) {
                            Users::where('pk_users_id', $LastInsertIdCount[$x])->delete();
                            UsersCompanies::where('fk_users_id', $LastInsertIdCount[$x])->where('fk_companies_id', $pk_companies_id)->delete();
                        }

                        return redirect('register/users')->withInput();
                       break;
                    }


                } else {
                    $LastInsertIdCount = count($LastInsertIdList);

                    for ($x = 0; $x < $LastInsertIdCount; $x++) {
                        Users::where('pk_users_id', $LastInsertIdCount[$x])->delete();
                        UsersCompanies::where('fk_users_id', $LastInsertIdCount[$x])->where('fk_companies_id', $pk_companies_id)->delete();
                    }

                    return redirect('register/users')->withInput();

                }
            } catch (\Exception $e) {
                $LastInsertIdCount = count($LastInsertIdList);

                for ($x = 0; $x < $LastInsertIdCount; $x++) {
                    Users::where('pk_users_id', $LastInsertIdCount[$x])->delete();
                    UsersCompanies::where('fk_users_id', $LastInsertIdCount[$x])->where('fk_companies_id', $pk_companies_id)->delete();
                }
                return redirect('register/users')->withInput();
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
        $owners_name = $request->input('owners.*.owners_name');
        $owners_type = $request->input('owners.*.owners_type');
        $owners_share = $request->input('owners.*.owners_share');
        $owners_nationality = $request->input('owners.*.owners_nationality');
        $owners_mobile = $request->input('owners.*.owners_mobile');
        $owners_phone = $request->input('owners.*.owners_phone');
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
        	$data['phone']=$owners_phone[$i];
        	$data['email']=$owners_email[$i];
        	$data['id_no']=$owners_id_no[$i];
        	$ID = $this->isUploadID($request,$i);
            $data['id_image'] = storage_path('app/upload/ID/'.$ID);
            $CompanyOwners = new CompanyOwners();
            $CompanyOwners->fill($data);
            $result = $CompanyOwners->save();
        }
        return redirect('register/branches');
    }

    	public function branches(Request $request)
    {
        $countries = Countries::where('name', '<>', '')->orderBy('name', 'ASC')->get();
        $data['step'] = 7;
        return view('front_end.more_register', compact('countries'), $data);
    }

    	public function insert_branches(Request $request)
    {
        $validatedData = $request->validate([
            'branches.*.branches_name' => 'required',
            'branches.*.branches_mobile' => 'required',
            'branches.*.branches_email' => 'required',
            'branches.*.branches_country' => 'required'
        ]);
        $branches_name = $request->input('branches.*.branches_name');
        $branches_mobile = $request->input('branches.*.branches_mobile');
        $branches_phone = $request->input('branches.*.branches_phone');
        $branches_email = $request->input('branches.*.branches_email');
        $branches_country = $request->input('branches.*.branches_country');
        $branches_city = $request->input('branches.*.branches_city');
        $branches_area = $request->input('branches.*.branches_area');
        $branch_address = $request->input('branches.*.branch_address');
        $records=count($branches_name);
        for ($i=0; $i < $records ; $i++) {
        	$pk_companies_id = "1"; // $request->session()->get('$pk_companies_id');
        	$data['fk_companies_id']=$pk_companies_id;
        	$data['branch_name']=$branches_name[$i];
        	$data['tel']=$branches_mobile[$i];
        	$data['mobile']=$branches_phone[$i];
        	$data['email']=$branches_email[$i];
        	$data['fk_country_id']=$branches_country[$i];
        	$data['fk_city_id']=$branches_city[$i];
        	$data['fk_area_id']=$branches_area[$i];
        	$data['address']=$branch_address[$i];
            $CompanyBranches = new CompanyBranches();
            $CompanyBranches->fill($data);
            $result = $CompanyBranches->save();
        }
        return redirect('register/verify');
    }

    	public function verify(Request $request)
    {
        $data['step'] = 8;
        $data['submitted'] = 0;
        return view('front_end.more_register', $data);
    }
    	public function upload_verify(Request $request)
    {
        $Document = $this->isUploadDocument($request);
        $data['documents'] = $Document;
        $update = Companies::where('pk_companies_id', 1)->update($data);
        if($update){
        	$data['step'] = 8;
        	$data['submitted'] = 1;
            return view('front_end.more_register', $data);
        }else{
        	return redirect('register/verify');
        }
    }

    	public function authoriszation(Request $request)
    {
        $data['email'] = $request->username;
        $data['password'] = md5($request->password);
        $user = Users::where($data)->get();
        $count = $user->count();
        if ($count > 0) {
            echo "true";
        } else {
            echo "false";
        }

    }

    	public function isUploadProfile($request, $i)
    {
        $image = 'users.' . $i . '.user_userimage';
        $SM_Path = storage_path('app/upload/profile/sm/');
        $MD_Path = storage_path('app/upload/profile/md/');
        File::isDirectory($SM_Path) or File::makeDirectory($SM_Path, 0777, true, true);
        File::isDirectory($MD_Path) or File::makeDirectory($MD_Path, 0777, true, true);
        $newname = time() . '-' . $request->input('users.' . $i . '.user_first_name') . '.png';

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
    	public function isUploadDocument($request)
    {
    	$Document_Path = storage_path('app/upload/verify_documents/');
        File::isDirectory($Document_Path) or File::makeDirectory($Document_Path, 0777, true, true);

    	$image = $request->file('document.*.document_file');
        $doc_images_Arr=array();
    	$i=1;
    	foreach ($image[0] as $image) {
    		$newname = time().'-'.$i.'.png';
    		$image->storeAs('upload/verify_documents', $newname);
    		array_push($doc_images_Arr,$newname);
    		$i++;
    	}
    	return json_encode($doc_images_Arr);
    }

    	public function GetPermissions($permissions)
    {

        $Json_permetions = ["allow_product" => false,
            "allow_manage_order" => false,
            "allow_buy" => false,
            "allow_tender" => false,
            "allow_job" => false,
            "allow_advertising" => false,
            "allow_post" => false,
            "allow_chat" => false];

        if (in_array("allow_product", $permissions)) {
            $Json_permetions["allow_product"] = true;
        }
        if (in_array("allow_manage_order", $permissions)) {
            $Json_permetions["allow_manage_order"] = true;
        }

        if (in_array("allow_buy", $permissions)) {
            $Json_permetions["allow_buy"] = true;
        }

        if (in_array("allow_tender", $permissions)) {
            $Json_permetions["allow_tender"] = true;
        }

        if (in_array("allow_job", $permissions)) {
            $Json_permetions["allow_job"] = true;
        }
        if (in_array("allow_advertising", $permissions)) {
            $Json_permetions["allow_advertising"] = true;
        }
        if (in_array("allow_post", $permissions)) {
            $Json_permetions["allow_post"] = true;
        }
        if (in_array("allow_chat", $permissions)) {
            $Json_permetions["allow_chat"] = true;
        }

        return json_encode($Json_permetions);
    }


}
