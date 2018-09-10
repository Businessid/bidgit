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
use File;
use Intervention\Image\ImageManagerStatic as Image;

use App\Companies;
use App\Users_Category;
use App\Countries;
use App\Users_Legal_Status;
use App\Users;
use App\Users_Activities;
use App\UsersCompanies;
use App\Posts;
use App\PostFiles;

class ProfileController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
        public function error()
    {
    	return Redirect::to('/');
    }

        public function index($id)
    {
        return view('front_end.profile');
    }
        public function fileupload(Request $request)
    {
        $Document_Path = storage_path('app/upload/posts/');
        File::isDirectory($Document_Path) or File::makeDirectory($Document_Path, 0777, true, true);
        $image = $request->file('file');
        $originalName =$image->getClientOriginalName();
        $nameArr=explode('.', $originalName);
        $extension=end($nameArr);
        $newname = date('Ymd').'_'.time().'_'.rand(10000000,99999999).'.'.$extension;
        $upload=$image->storeAs('upload/posts', $newname);
        if($upload){
            echo $newname;
        }else{
            echo 'failed';
        }
    }
        public function deletepostimage(Request $request)
    {
        $image=storage_path('app/upload/posts/').$request->image;
        $res=unlink($image);
        if($res){
            echo "true";
        }else{
            echo "false";
        } 
    }
        



    public function PostData(Request $request){
        $postFiles = [];
        $postText= $request->input('post-text');
        $postImages = $request->input('post_image');
        $postVideos = $request->input('post_video');
        $postUrl= $request->input('post-url');

        if($postText != NULL ||$postImages != NULL || $postVideos != NULL || $postUrl != NULL){
        $data['fk_user_id']=1;
        if($postText)
        {
           $data['title']= $postText;
           $matches='';
           preg_match_all('/#([^\s]+)/', $postText, $matches);
           $hashtags = implode(',', $matches[1]);
           $data['hashtags']=$hashtags;
        }
        $data['privacy']=1;
        $data['status']=1;
        $Posts = new Posts();
        $Posts->fill($data);
        $result = $Posts->save();
        // dd(DB::getQueryLog()); die;
        if($result){
            $LastInsertId = $Posts->id;
            // Get Images 
            if($postImages){
                $image_num =  count($postImages);
                for($i = 0; $i < $image_num; $i++){
                 $postFiles[]["image"] =$postImages[$i];
                }
            }
            // Get Images 
            if($postVideos){
                $video_num =  count($postVideos);
                for($i = 0; $i < $video_num; $i++){
                 $postFiles[]["video"] =$postVideos[$i];
                }
            }
            // Get Url 
            if($postUrl){
                $urltrim = trim($postUrl);
                if($urltrim != ""){
                $postFiles[]["url"] = $postUrl; 
                }
            }
            $result=$postFiles;
            for($i=0 ; $i < count($postFiles) ; $i++){
            foreach ($postFiles[$i] as $key=> $value) {
               $files['fk_post_id']=$LastInsertId;
               $files['type']=$key;
               $files['file']=$value;
            }
            $PostFiles = new PostFiles();
            $PostFiles->fill($files);
            $PostFiles->save();
            }
            $result = array(
                        'success' => true,
                        'title'=>$postText,
                        'result' =>$result
                        );
            echo json_encode($result);
            exit;
        }else{
            $result = array(
                        'success' => false,
                        'message' =>"Error in post.. try to post later."
                        );
            echo json_encode($result);
            exit;
        }
           
        }else{
            $result = array(
                        'success' => false,
                        'message' =>"emtey"
                        );
            echo json_encode($result);
            exit;
        }

    }
    
}
