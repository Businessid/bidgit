<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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
use App\Profile;

class ProfileController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function error()
    {
        return Redirect::to('/');
    }

    public function index($Url)
    {
        $Profile_Url = Profile::where('profile_url', $Url)->first();
        if (!$Profile_Url) {
            return redirect('/');
        }

        if ($Profile_Url->profile_type == "company") {
            $Company_Data = Companies::where('pk_companies_id', $Profile_Url->profile_id)->first();
            if (!$Company_Data) {
                return redirect('/');
            }






            $Data["ProfileData"] = $Profile_Url->ProfileData;
            $Data["Posts"] = $Company_Data->Poasts;
        }

        return view('front_end.profile', $Data);
    }


    public function fileupload(Request $request)
    {
        $Path = public_path('/uploads/posts/');
        File::isDirectory($Path) or File::makeDirectory($Path, 0777, true, true);
        $Path_md = public_path('/uploads/posts/size/');
        File::isDirectory($Path_md) or File::makeDirectory($Path_md, 0777, true, true);
        $image = $request->file('file');
        $originalName = $image->getClientOriginalName();
        $extension = $image->getMimeType();
        $extArr = explode('/', $extension);

        $nameArr = explode('.', $originalName);
        $extension = end($nameArr);
        $newname = date('Ymd') . '_' . time() . '_' . rand(10000000, 99999999) . '.' . $extension;
        $upload = $image->move(public_path('/uploads/posts'), $newname);

        if ($extArr[0] == 'image') {
            $image_sm = Image::make(public_path('/uploads/posts/') . $newname);
            $image_sm->resize(500, 500);
            $image_sm->save(public_path('/uploads/posts/size/') . $newname);
        }
        if ($extArr[0] == 'video') {
            //create video poster image mpegg
        }

        if ($upload) {
            echo $newname;
        } else {
            echo 'failed';
        }
    }

    public function deletepostimage(Request $request)
    {
        $image = storage_path('app/upload/posts/') . $request->image;
        $res = unlink($image);
        if ($res) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function PostData(Request $request)
    {

        $postFiles = [];
        $postText = $request->input('post-text');
        $postImages = $request->input('post_image');
        $postVideos = $request->input('post_video');
        $postUrl = $request->input('post-url');

        if ($postText != NULL || $postImages != NULL || $postVideos != NULL || $postUrl != NULL) {

            $data['posted_id'] = 1;
            $data['post_by'] = 1;
            $data['profile_type'] = "company";
            $hashtags = "";
            if ($postText) {
                $data['title'] = $postText;
                $matches = '';
                preg_match_all('/#([^\s]+)/', $postText, $matches);
                $hashtags = implode(',', $matches[1]);
                $data['hashtags'] = $hashtags;
            }
            $data['privacy'] = 1;
            $data['status'] = 1;
            $Posts = new Posts();
            $Posts->fill($data);
            $result = $Posts->save();
            // dd(DB::getQueryLog()); die;
            if ($result) {
                $LastInsertId = $Posts->id;
                // Get Images
                if ($postImages) {
                    $image_num = count($postImages);
                    for ($i = 0; $i < $image_num; $i++) {
                        $postFiles[]["image"] = $postImages[$i];
                    }
                }
                // Get Images
                if ($postVideos) {
                    $video_num = count($postVideos);
                    for ($i = 0; $i < $video_num; $i++) {
                        $postFiles[]["video"] = $postVideos[$i];
                    }
                }
                // Get Url
                if ($postUrl) {
                    $urltrim = trim($postUrl);
                    if ($urltrim != "") {
                        $postFiles[]["url"] = $postUrl;
                    }
                }
                $result = $postFiles;
                for ($i = 0; $i < count($postFiles); $i++) {
                    foreach ($postFiles[$i] as $key => $value) {
                        $files['fk_post_id'] = $LastInsertId;
                        $files['type'] = $key;
                        $files['file'] = $value;
                    }
                    $PostFiles = new PostFiles();
                    $PostFiles->fill($files);
                    $PostFiles->save();
                }
                $storage_path = storage_path('app/upload/posts/');
                $result = array(
                    'success' => true,
                    'postId' => $LastInsertId,
                    'hashTags' => $hashtags,
                    'postText' => $postText,
                    'result' => $result
                );
                echo json_encode($result);
                exit;
            } else {
                $result = array(
                    'success' => false,
                    'message' => "Error in post.. try to post later."
                );
                echo json_encode($result);
                exit;
            }

        } else {
            $result = array(
                'success' => false,
                'message' => "emtey"
            );
            echo json_encode($result);
            exit;
        }

    }

}
