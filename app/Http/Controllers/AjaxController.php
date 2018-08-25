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

}
