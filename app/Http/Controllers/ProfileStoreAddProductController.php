<?php

namespace App\Http\Controllers;

use App\ProductCategories;
use Illuminate\Http\Request;

class ProfileStoreAddProductController extends Controller
{
    function AddProductIndex(){
        $Categories = ProductCategories::where('status','>','0')->where('parent_id','0')->get();

       return view('front_end.profile.add_product',compact('Categories'));
    }
}
