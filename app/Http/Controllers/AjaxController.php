<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users_Activities;
use App\Users_Category;
use App\Users_Legal_Status;
use App\Users;
use App\Countries;

class AjaxController extends Controller
{

    public function AllCountry(Request $request)
    {
        $activities =  Users_Legal_Status::all();

        return response()->json($activities);

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
            $cities =  Countries::where('parent_id',$request->fk_country_id)->get();
            $data = '<option value="">Select City</option> ';
            if(!empty($cities)){
                foreach($cities as $citie){
                    $selected="";
                    if($request->fk_country_id){
                        if($request->fk_country_id==$citie->location) {
                            $selected = "selected";
                        }
                    }
                    $data .= '<option value="'.$citie->pk_countries_id .'" '.@$selected.'>'.$citie->location.'</option>';
                }
            }
            return response()->json(['options'=>$data]);
        }
    }
    public function selectAreas(Request $request)
    {

        if($request->ajax()){
            $area = Countries::where('parent_id',$request->fk_city_id)->get();
            $data = '<option value="">Select Area</option> ';
            if(!empty($area)){
                foreach($area as  $value){
                    $selected="";
                    if($request->fk_area_id){
                        if($request->fk_area_id==$value->pk_countries_id) {
                            $selected = "selected";
                        }
                    }
                    $data .= '<option value="'.$value->pk_countries_id.'" '.@$selected.'>'.$value->location.'</option>';
                }
            }
            return response()->json(['options'=>$data]);
        }

    }

    public function getCurrentCountry(Request $request)
    {
        if($request->ajax()){
            $countries = Countries::where('name','<>','')->orderBy('name')->get();
            $data = '<option value="">Select Country</option> ';
            if(!empty($countries)){
                foreach($countries as  $value){
                    $selected="";
                    if($request->country){
                        if($request->country==$value->name) {
                            $selected = "selected";
                            $pk_countries_id=$value->pk_countries_id;
                        }
                    }
                    $data .= '<option value="'.$value->pk_countries_id.'" '.@$selected.'>'.$value->name.'</option>';
                }
            }
            return response()->json(['options'=>$data,'pk_countries_id'=>$pk_countries_id]);
        }

    }
    public function getCurrentCity(Request $request)
    {
        if($request->ajax()){
            $cities =  Countries::where('parent_id',$request->fk_country_id)->get();
            $data = '<option value="">Select City</option> ';
            if(!empty($cities)){
                foreach($cities as $value){
                    $selected="";
                    if($request->fk_city_id){
                        if($request->fk_city_id==$value->location){
                            $selected = "selected";
                            $fk_city_id= $value->pk_countries_id;
                        }
                    }
                    $data .= '<option value="'.$value->pk_countries_id.'" '.@$selected.'>'.$value->location.'</option>';
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

}
