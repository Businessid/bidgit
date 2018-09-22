<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryOptionsController extends Controller
{
    function AddCategoryOptionsIndex(){
        return view("dashboard.add_category_options");
    }


    function AddCategoryOptionsSubmit(){

    }
}
