<?php

namespace App\Http\Controllers;

use App\ProductCategories;
use Illuminate\Http\Request;
use App\Users_Activities;
use App\Users_Category;
use App\Users_Legal_Status;
use App\Users;
use App\Countries;
use App\Sections;
use App\FollowUp;

class AjaxController extends Controller
{



    public function SubCategoryData($id){
        $Products = ProductCategories::where('id',$id)->with('Attribute')->with('Options')->get();
        return response()->json($Products);
    }

    public function SubCategory($id){
        $Products = ProductCategories::where('parent_id',$id)->with('Attribute')->with('Options')->with('Description')->get();
        return response()->json($Products);
    }


    public function ChangeData(){
//
//        $Results = FollowUp::select('activity_group')->where('activity_group_tr','')->groupBy('activity_group')->get();
//        foreach ($Results as $Result) {
//            print_r($Result->activity_group);
//            echo "<br> <br>";
//        }

        $Results = FollowUp::where('activity_group','الزهور و النباتات')->get();
        foreach ($Results as $Result) {
            $Table = FollowUp::find($Result->id);
            $Table->activity_group_tr = "Flowers and plants";
            $Table->save();
        }


//       $Results =  FollowUp::all();
//        foreach ($Results as $Result) {
//            $Arabic_Activity =  preg_replace('/[^أ-ي ]/ui', '', $Result->activity_name_en);
//            $English_Activity =  preg_replace('/[^A-Za-z ]/ui', '', $Result->activity_name_en);
//
//            $Arabic_Type =  preg_replace('/[^أ-ي ]/ui', '', $Result->activity_type_en);
//            $English_Type =  preg_replace('/[^A-Za-z ]/ui', '', $Result->activity_type_en);
//
//            $Table = FollowUp::find($Result->id);
//            $Table->activity_name_ar = $Arabic_Activity;
//            $Table->activity_name_en = $English_Activity;
//            $Table->activity_type_ar = $Arabic_Type;
//            $Table->activity_type_en = $English_Type;
//            $Table->save();
//
//
//
//            echo "Arabic Activity : " . $Arabic_Activity;
//            echo "<br>";
//            echo "English Activity : " . $English_Activity;
//            echo "<br>";
//            echo "Arabic Type : " . $Arabic_Type;
//            echo "<br>";
//            echo "English Type : " . $English_Type;
//            echo "<br>";
//
//
//
//
//
//          }
    }
















public function jsontoarray(Request $request)
    {
        $data = '[{"pk_sections_id":1,"section_name":"About","section_icon":"fa-address-book","section_link":"about\/","created_at":null,"updated_at":null},{"pk_sections_id":2,"section_name":"News Feed","section_icon":"fa-newspaper-o","section_link":"newsfeed\/","created_at":null,"updated_at":null},{"pk_sections_id":3,"section_name":"Store","section_icon":"fa-shopping-cart","section_link":"store\/","created_at":null,"updated_at":null},{"pk_sections_id":4,"section_name":"Videos","section_icon":"fa-video-camera","section_link":"videos\/","created_at":null,"updated_at":null},{"pk_sections_id":5,"section_name":"Photos","section_icon":"fa-picture-o","section_link":"photos\/","created_at":null,"updated_at":null},{"pk_sections_id":6,"section_name":"Tender","section_icon":"fa-gavel","section_link":"tender\/","created_at":null,"updated_at":null},{"pk_sections_id":7,"section_name":"Jobs","section_icon":"fa-address-card","section_link":"jobs\/","created_at":null,"updated_at":null},{"pk_sections_id":8,"section_name":"Vacancy","section_icon":"fa-address-card","section_link":"vacancy\/","created_at":null,"updated_at":null},{"pk_sections_id":9,"section_name":"Real Estate","section_icon":"fa-building","section_link":"realestate\/","created_at":null,"updated_at":null}]';
       $manage = json_decode($data);

print_r($manage);

    }

    public function AllCountry(Request $request)
    {
        $activities =  Sections::all();

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
