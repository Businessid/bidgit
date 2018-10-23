<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ProductCategories;
use App\ProductCategoriesDescription;
use App\ProductCategoriesAttribute;
use App\ProductCategoriesOptions;

use Validator;

class CategoriesController extends Controller
{
    public function CategoryListIndex(){

        return view("dashboard.categorieslist");
    }



    public function AddCategoryIndex(){
        $Categories = ProductCategories::where('status','>','0')->get();
        return view("dashboard.add_category",compact('Categories'));
    }



    public function AddCategorySubmit(Request $request){
        $validator =  $request->validate([
            'description.*.category_name' => 'required',
            'description.*.category_description' => 'required',
            'description.*.meta_title' => 'required',
            'description.*.meta_description' => 'required',
            'parent_id'=>'required',
            'category_icon'=> 'required',
            'attribute.*.attribute_name' => 'required',
            'options.*.option_name' => 'required',
            'options.*.option_type' => 'required',

        ]);




        $category_parent =  $request->input('parent_id');
        $category_icon =  $request->input('category_icon');

        $Category_Table = new ProductCategories();

        $Category_Table->parent_id = $category_parent;
        $Category_Table->icon = $category_icon;
        $Category_Table->status = 1;
        $Category_Table->save();

        $CategoryID = $Category_Table->id;


        $category_name              = $request->input('description.*.category_name');
        $category_description       = $request->input('description.*.category_description');
        $meta_title                 = $request->input('description.*.meta_title');
        $meta_description           = $request->input('description.*.meta_description');

        $Description_Records=count($category_name);

        for ($i=0; $i < $Description_Records ; $i++) {
            $CategoryDescription_Table = new ProductCategoriesDescription();
            $CategoryDescription_Table->category_id = $CategoryID;
            $CategoryDescription_Table->name = $category_name[$i];
            $CategoryDescription_Table->description = $category_description[$i];
            $CategoryDescription_Table->meta_tile = $meta_title[$i];
            $CategoryDescription_Table->meta_description = $meta_description[$i];
            $CategoryDescription_Table->save();
        }



        $attribute_names            = $request->input('attribute.*.attribute_name');
        $attribute_values           = $request->input('attribute.*.attribute_values');
        $attribute_required         = $request->input('attribute.*.required');

        $Attribute_Records=count($attribute_names);
        for ($i =0; $i < $Attribute_Records ; $i++) {
            $CategoryAttribute_Table = new ProductCategoriesAttribute();
            $CategoryAttribute_Table->category_id = $CategoryID;
            $CategoryAttribute_Table->name = $attribute_names[$i];
            $CategoryAttribute_Table->values = $attribute_values[$i];
            $IsRequired = $attribute_required[$i];
            if (is_array($IsRequired)){
                $IsRequired = 1;
            }else{
                $IsRequired = 0;
            }
            $CategoryAttribute_Table->required = $IsRequired;

            $CategoryAttribute_Table->save();
        }



        $options_names              = $request->input('options.*.option_name');
        $options_types              = $request->input('options.*.option_type');
        $options_values             = $request->input('options.*.option_values');
        $options_required           = $request->input('options.*.required');




        $Options_Records=count($options_names);
        for ($i=0; $i < $Options_Records ; $i++) {
            $CategoryOptions_Table = new ProductCategoriesOptions() ;
            $CategoryOptions_Table->category_id = $CategoryID;
            $CategoryOptions_Table->name = $options_names[$i];
            $CategoryOptions_Table->type = $options_types[$i];
            $CategoryOptions_Table->values = $options_values[$i];
            $IsRequired = $options_required[$i];
            if (is_array($IsRequired)){
                $IsRequired = 1;
            }else{
                $IsRequired = 0;
            }
            $CategoryOptions_Table->required =$IsRequired;
            $CategoryOptions_Table->save();
        }


        $Categories = ProductCategories::all();

        $Data['Categories'] = $Categories;

        return view("dashboard.categorieslist",$Data);
    }
}
